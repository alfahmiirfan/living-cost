<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengeluaran;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    function PengeluaranSuperAdmin(Request $request)
    {
        $data = Pengeluaran::where(function (Builder $query) use ($request) {
            if ($request->pencarian) {
                $query->whereAny(['nama_item', 'kategori', 'tanggal'], 'LIKE', "%{$request->pencarian}%");
            }
        })->latest()->get();

        return view('Pages/SuperAdmin/PengeluaranSuperAdmin');
    }
    function PengeluaranTambahSuperAdmin()
    {
        $kategori = Kategori::get();

        return view('Pages/SuperAdmin/Pengeluaran-TambahSuperAdmin');
    }
    function PengeluaranUbahSuperAdmin(Request $request)
    {
        if ($request->id) {
            $pengeluaran = Pengeluaran::findOrFail($request->id);
        }

        return view('Pages/SuperAdmin/Pengeluaran-UbahSuperAdmin');
    }

    function tambah(Request $request)
    {
        $validasi = $request->validate([
            'jumlah' => 'required|numeric|integer|max_digits:11',
            'harga' => 'required|numeric|integer|max_digits:15',
            'kategori' => 'required|string|exists:kategori,id',
            'nama_item' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
        ]);

        $kategori = Kategori::findOrFail($validasi['kategori']);
        $pengeluaran = Pengeluaran::create(['kategori' => $kategori->nama, ...$request->only(['nama_item', 'tanggal', 'jumlah', 'harga'])]);

        return true;
    }

    function edit(Request $request)
    {
        $validasi = $request->validate([
            'jumlah' => 'required|numeric|integer|max_digits:11',
            'harga' => 'required|numeric|integer|max_digits:15',
            'kategori' => 'required|string|exists:kategori,id',
            'nama_item' => 'required|string|max:255',
            'tanggal' => 'required|string|max:255',
        ]);

        if ($request->id) {
            $kategori = Kategori::findOrFail($validasi['kategori']);
            $pengeluaran = Pengeluaran::findOrFail($request->id);

            $pengeluaran->update(['kategori' => $kategori->nama, ...$request->only(['nama_item', 'tanggal', 'jumlah', 'harga'])]);

            return true;
        }

        abort(404);
    }

    public function hapus(Request $request)
    {
        if ($request->id) {
            $pengeluaran = Pengeluaran::findOrFail($request->id);
            $pengeluaran->delete();

            return true;
        }

        abort(404);
    }
}
