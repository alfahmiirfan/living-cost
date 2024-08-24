<?php

namespace App\Http\Controllers;

use App\Models\Harga;
use App\Models\Income;
use Illuminate\Http\Request;

class PemasukanController extends Controller
{
    function PemasukanSuperAdmin(Request $request)
    {
        $years = Income::orderBy('year')->pluck('year')->flatten()->unique()->toArray();
        $months = Income::pluck('month')->flatten()->unique()->toArray();

        $incomes = Income::where('year', $request->year ?? end($years))->where('month', $request->month ?? end($months))->where(function ($query) use ($request) {
            if ($request->pencarian) {
                $query->whereAny(['name', 'nisn', 'month', 'status', 'upload_date'], 'LIKE', "%{$request->pencarian}%");
            }
        })->paginate(5);

        $harga = Harga::firstOrFail();

        $tahun = $request->year ?? end($years);
        $bulan = $request->month ?? end($months);

        $request->merge([
            'year' => $tahun,
            'month' => $bulan,
        ]);

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/PemasukanSuperAdmin', compact('incomes', 'years', 'harga', 'bulan', 'tahun'));
        }
        return view('Pages/Admin/PemasukanAdmin', compact('incomes', 'years', 'harga'));
    }
    function PemasukanStatusSuperAdmin()
    {
        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/Pemasukan-StatusSuperAdmin');
        }
        return view('Pages/SuperAdmin/Pemasukan-StatusAdmin');
    }
    function PemasukanLihatSuperAdmin()
    {
        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/Pemasukan-LihatSuperAdmin');
        }
        return view('Pages/SuperAdmin/Pemasukan-LihatAdmin');
    }

    function updateBiaya(Request $request)
    {
        $validasi = $request->validate([
            'price' => 'required|numeric|min:1',
        ]);
        $harga = Harga::firstOrFail();

        $harga->update(['amoung' => $validasi['price']]);

        return back();
    }
}
