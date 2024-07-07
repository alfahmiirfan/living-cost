<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use App\Models\Income;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

class SiswaWebController extends Controller
{
    function LoginUser()
    {
        return view('Pages/User/LoginUser');
    }
    function DashboardUser()
    {
        return view('Pages/User/DashboardUser');
    }
    function InformasiUser(Request $request)
    {
        $siswa = Income::where('siswa_id', $request->attributes->get('token')->id)->get();
        $years = $siswa->sortBy('year')->pluck('year')->flatten()->unique()->toArray();

        if (!$request->year) {
            $request->mergeIfMissing(['year' => end($years)]);
        }

        $newRequest = Request::create('/api/v1/income/list/siswa');
        $newRequest->headers->set('Authorization', 'Bearer ' . $request->cookie('access_token'));
        $response = Route::dispatch($newRequest);

        $status = $response->getStatusCode();
        if ($status === 200 && $siswa->count()) {
            $response = json_decode($response->getContent());
            $data = $response->data;

            return view('Pages/User/InformasiUser', compact('data', 'years'));
        }

        return redirect('/LoginUser');
    }
    function PembayaranUser(Request $request)
    {
        $siswa = Income::where('siswa_id', $request->attributes->get('token')->id)->get();
        $years = $siswa->sortBy('year')->pluck('year')->flatten()->unique()->toArray();

        if (!$request->year) {
            $request->mergeIfMissing(['year' => end($years)]);
        }

        $newRequest = Request::create('/api/v1/income/list/siswa');
        $newRequest->headers->set('Authorization', 'Bearer ' . $request->cookie('access_token'));
        $response = Route::dispatch($newRequest);

        $status = $response->getStatusCode();
        if ($status === 200 && $siswa->count()) {
            $response = json_decode($response->getContent());
            $data = $response->data;

            return view('Pages/User/PembayaranUser', compact('data', 'years'));
        }

        return redirect('/LoginUser');
    }
    function MetodePembayaranUser(Request $request)
    {
        if ($request->id) {
            Income::whereKey($request->id)->where('siswa_id', $request->attributes->get('token')->id)->where('status', 'Belum Bayar')->firstOrFail();
            $harga = Harga::firstOrFail();

            return view('Pages/User/MetodePembayaranUser', compact('harga'));
        }

        return abort(404);
    }
    function VirtualAccountUser(Request $request)
    {
        $status = 404;
        if ($request->id && in_array($request->bank, ['BRIVA', 'BNIVA', 'BCAVA'])) {
            Income::whereKey($request->id)->where('siswa_id', $request->attributes->get('token')->id)->where('status', 'Belum Bayar')->firstOrFail();
            $harga = Harga::firstOrFail();
            $request->mergeIfMissing(['method' => $request->bank]);

            $newRequest = Request::create('/api/v1/siswa/payment/' . $request->id, 'POST');
            $newRequest->headers->set('Authorization', 'Bearer ' . $request->cookie('access_token'));
            $response = Route::dispatch($newRequest);

            $status = $response->getStatusCode();
            if ($status === 200) {
                $response = json_decode($response->getContent());
                $data = $response->data->data;

                $va = $data->pay_code;

                return view('Pages/User/VirtualAccountUser', compact('harga', 'va'));
            }
        }

        return abort($status);
    }

    function login(Request $request)
    {
        $request->validate([
            'nisn' => 'required|string|max:255|exists:siswa,nisn',
            'kata_sandi' => 'required|string|max:255',
        ]);
        $request->merge(['password' => $request->kata_sandi]);

        $newRequest = Request::create('/api/v1/siswa/login', 'POST');
        $loginResponse = Route::dispatch($newRequest);

        $status = $loginResponse->getStatusCode();
        if ($status === 200) {
            $response = json_decode($loginResponse->getContent());
            $siswa = Siswa::where('nisn', $request->nisn)->firstOrFail();
            return redirect('/DashboardUser')->withCookies([
                Cookie::make('username', $siswa->nama),
                Cookie::make('access_token', $response->data->access_token),
                Cookie::make('refresh_token', $response->data->refresh_token)
            ]);
        }

        return back()->withInput()->withErrors(['nisn' => "NISN or Password doesn't correct"]);
    }
}
