<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function PendataanSiswaSuperAdmin(Request $request)
    {
        $siswa = Siswa::where(function (Builder $query) use ($request) {
            if ($request->pencarian) {
                $query->whereAny(['nama', 'nisn', 'angkatan'], 'LIKE', "%{$request->pencarian}%");
            }
        })->latest()->get();

        return view('Pages/SuperAdmin/PendataanSuperAdmin', compact('siswa'));
    }
    function PendataanTambahSuperAdmin()
    {
        return view('Pages/SuperAdmin/Pendataan-TambahSuperAdmin');
    }
    function PendataanUbahSuperAdmin(Request $request)
    {
        $siswa = Siswa::findOrFail($request->id);

        return view('Pages/SuperAdmin/Pendataan-UbahSuperAdmin', compact('siswa'));
    }

    function tambah(Request $request)
    {
        $validasi = $request->validate([
            'nisn' => 'required|string|max:255|unique:siswa,nisn',
            'tahun_masuk' => 'required|numeric|integer|digits:4',
            'angkatan' => 'required|numeric|integer|digits:4',
            'kata_sandi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        Siswa::create($validasi);

        return redirect('/PendataanSiswaSuperAdmin');
    }

    public function edit(Request $request)
    {
        $validasi = $request->validate([
            'tahun_masuk' => 'required|numeric|integer|digits:4',
            'angkatan' => 'required|numeric|integer|digits:4',
            'kata_sandi' => 'nullable|string|max:255',
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|max:255',
        ]);

        if ($request->id) {
            $siswa = Siswa::findOrFail($request->id);
            $cek = Siswa::whereKeyNot($request->id)->where('nisn', $validasi['nisn'])->exists();

            if (!$cek) {
                $siswa->tahun_masuk = $validasi['tahun_masuk'];
                $siswa->angkatan = $validasi['angkatan'];
                $siswa->nama = $validasi['nama'];
                $siswa->nisn = $validasi['nisn'];
                $siswa->save();

                if ($validasi['kata_sandi'] !== null) {
                    $siswa->update(['kata_sandi' => $validasi['kata_sandi']]);
                }

                // Ubah data yang bersangkutan

                return redirect('/PendataanSiswaSuperAdmin');
            }

            return back()->withInput()->withErrors(['nisn' => 'nisn already used']);
        }

        abort(404);
    }

    public function hapus(Request $request)
    {
        if ($request->id) {
            $siswa = Siswa::findOrFail($request->id);

            // amankan data yang bersangkutan

            $siswa->delete();

            return back();
        }

        abort(404);
    }
}
