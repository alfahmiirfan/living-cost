<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Expenditure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class PengeluaranController extends Controller
{
    function Pengeluaran(Request $request)
    {
        $pengeluaran = Expenditure::select(['id', 'name AS nama_item', 'category AS kategori', 'amount AS jumlah', 'price AS harga', 'date AS tanggal'])
            ->where(function (Builder $query) use ($request) {
                if ($request->pencarian) {
                    $query->whereAny(['name', 'category', 'date'], 'LIKE', "%{$request->pencarian}%");
                }
            })->orderBy('date', 'desc')->paginate(5);

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/PengeluaranSuperAdmin', compact('pengeluaran'));
        }
        return view('Pages/Admin/PengeluaranAdmin', compact('pengeluaran'));
    }
    function PengeluaranTambah()
    {
        $kategori = Category::select(['id', 'name AS nama'])->get();

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/Pengeluaran-TambahSuperAdmin', compact('kategori'));
        }
        return view('Pages/Admin/Pengeluaran-TambahAdmin', compact('kategori'));
    }
    function PengeluaranUbah(Request $request)
    {
        $kategori = Category::select(['id', 'name AS nama'])->get();
        $pengeluaran = Expenditure::findOrFail($request->id, ['id', 'name AS nama_item', 'category AS kategori', 'amount AS jumlah', 'price AS harga', 'date AS tanggal']);

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/Pengeluaran-UbahSuperAdmin', compact('pengeluaran', 'kategori'));
        }
        return view('Pages/Admin/Pengeluaran-UbahAdmin', compact('pengeluaran', 'kategori'));
    }

    function tambah(Request $request)
    {
        $validasi = $request->validate([
            'jumlah' => 'required|numeric|integer|max_digits:11',
            'harga' => 'required|numeric|integer|max_digits:15',
            'kategori' => 'required|string|exists:category,id',
            'nama_item' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        $kategori = Category::findOrFail($validasi['kategori']);
        $pengeluaran = Expenditure::create([
            'category' => $kategori->name,
            'name' => $validasi['nama_item'],
            'amount' => $validasi['jumlah'],
            'date' => $validasi['tanggal'],
            'price' => $validasi['harga'],
        ]);

        if (auth()->user()->id_number === null) {
            return redirect('/PengeluaranSuperAdmin');
        }
        return redirect('/PengeluaranAdmin');
    }

    function edit(Request $request)
    {
        $validasi = $request->validate([
            'jumlah' => 'required|numeric|integer|max_digits:11',
            'harga' => 'required|numeric|integer|max_digits:15',
            'kategori' => 'required|string|exists:category,id',
            'nama_item' => 'required|string|max:255',
            'tanggal' => 'required|date',
        ]);

        if ($request->id) {
            $kategori = Category::findOrFail($validasi['kategori']);
            $pengeluaran = Expenditure::findOrFail($request->id);

            $pengeluaran->update([
                'category' => $kategori->name,
                'name' => $validasi['nama_item'],
                'amount' => $validasi['jumlah'],
                'date' => $validasi['tanggal'],
                'price' => $validasi['harga'],
            ]);

            if (auth()->user()->id_number === null) {
                return redirect('/PengeluaranSuperAdmin');
            }
            return redirect('/PengeluaranAdmin');
        }

        abort(404);
    }

    public function hapus(Request $request)
    {
        if ($request->id) {
            $pengeluaran = Expenditure::findOrFail($request->id);
            $pengeluaran->forceDelete();

            if (auth()->user()->id_number === null) {
                return redirect('/PengeluaranSuperAdmin');
            }
            return redirect('/PengeluaranAdmin');
        }

        abort(404);
    }
}
