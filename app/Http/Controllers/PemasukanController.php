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
            if ($request->search) {
                $query->whereAny(['name', 'nisn', 'month', 'status', 'upload_date'], 'LIKE', `%{$request->search}%`);
            }
        })->paginate(5);

        $harga = Harga::firstOrFail();

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/PemasukanSuperAdmin', compact('incomes', 'years', 'harga'));
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
