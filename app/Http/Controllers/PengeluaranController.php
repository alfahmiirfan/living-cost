<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Pengeluaran;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    function Pengeluaran(Request $request)
    {
        $pengeluaran = Pengeluaran::where(function (Builder $query) use ($request) {
            if ($request->pencarian) {
                $query->whereAny(['nama_item', 'kategori', 'tanggal'], 'LIKE', "%{$request->pencarian}%");
            }
        })->orderBy('tanggal', 'desc')->paginate(5);

        if (auth()->user()->id_admin === null) {
            return view('Pages/SuperAdmin/PengeluaranSuperAdmin', compact('pengeluaran'));
        }
        return view('Pages/Admin/PengeluaranAdmin', compact('pengeluaran'));
    }
    function PengeluaranTambah()
    {
        $kategori = Kategori::get();

        if (auth()->user()->id_admin === null) {
            return view('Pages/SuperAdmin/Pengeluaran-TambahSuperAdmin', compact('kategori'));
        }
        return view('Pages/Admin/Pengeluaran-TambahAdmin', compact('kategori'));
    }
    function PengeluaranUbah(Request $request)
    {
        $kategori = Kategori::get();
        $pengeluaran = Pengeluaran::findOrFail($request->id);

        if (auth()->user()->id_admin === null) {
            return view('Pages/SuperAdmin/Pengeluaran-UbahSuperAdmin', compact('pengeluaran', 'kategori'));
        }
        return view('Pages/Admin/Pengeluaran-UbahAdmin', compact('pengeluaran', 'kategori'));
    }

    function tambah(Request $request)
    {
        $validasi = $request->validate([
            'jumlah' => 'required|numeric|integer|max_digits:11',
            'harga' => 'required|numeric|integer|max_digits:15',
            'kategori' => 'required|string|exists:kategori,id',
            'nama_item' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        $kategori = Kategori::findOrFail($validasi['kategori']);
        $pengeluaran = Pengeluaran::create(['kategori' => $kategori->nama, ...$request->only(['nama_item', 'tanggal', 'jumlah', 'harga'])]);

        if (auth()->user()->id_admin === null) {
            return redirect('/PengeluaranSuperAdmin');
        }
        return redirect('/PengeluaranAdmin');
    }

    function edit(Request $request)
    {
        $validasi = $request->validate([
            'jumlah' => 'required|numeric|integer|max_digits:11',
            'harga' => 'required|numeric|integer|max_digits:15',
            'kategori' => 'required|string|exists:kategori,id',
            'nama_item' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        if ($request->id) {
            $kategori = Kategori::findOrFail($validasi['kategori']);
            $pengeluaran = Pengeluaran::findOrFail($request->id);

            $pengeluaran->update(['kategori' => $kategori->nama, ...$request->only(['nama_item', 'tanggal', 'jumlah', 'harga'])]);

            if (auth()->user()->id_admin === null) {
                return redirect('/PengeluaranSuperAdmin');
            }
            return redirect('/PengeluaranAdmin');
        }

        abort(404);
    }

    public function hapus(Request $request)
    {
        if ($request->id) {
            $pengeluaran = Pengeluaran::findOrFail($request->id);
            $pengeluaran->delete();

            if (auth()->user()->id_admin === null) {
                return redirect('/PengeluaranSuperAdmin');
            }
            return redirect('/PengeluaranAdmin');
        }

        abort(404);
    }
}
