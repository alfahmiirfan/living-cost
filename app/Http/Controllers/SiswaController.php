<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function PendataanSiswa(Request $request)
    {
        $siswa = User::where(function (Builder $query) use ($request) {
            $query->whereNull(['email', 'id_admin']);
            if ($request->pencarian) {
                $query->whereAny(['nama', 'nisn', 'angkatan'], 'LIKE', "%{$request->pencarian}%");
            }
        })->latest()->paginate(5);

        if(auth()->user()->id_admin === null) {
            // return auth()->user();
            return view('Pages/SuperAdmin/PendataanSuperAdmin', compact('siswa'));
        }
        return view('Pages/Admin/PendataanSiswaAdmin', compact('siswa'));

    }
    function PendataanTambah()
    {
        if (auth()->user()->id_admin === null) {
            return view('Pages/SuperAdmin/Pendataan-TambahSuperAdmin');
        }return view('Pages/Admin/PendataanSiswa-TambahAdmin');
        
    }
    function PendataanUbah(Request $request)
    {
        $siswa = User::whereKey($request->id)->whereNull(['email', 'id_admin'])->firstOrFail();

        if (auth()->user()->id_admin === null) {
            return view('Pages/SuperAdmin/Pendataan-UbahSuperAdmin', compact('siswa'));
        }return view('Pages/Admin/PendataanSiswa-UbahAdmin', compact('siswa'));

    }

    function tambah(Request $request)
    {
        $validasi = $request->validate([
            'nisn' => 'required|string|max:255|unique:users,nisn',
            'tahun_masuk' => 'required|numeric|integer|digits:4',
            'angkatan' => 'required|numeric|integer|digits:4',
            'kata_sandi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        User::create($validasi);

        if (auth()->user()->id_admin === null) {
            return redirect('/PendataanSiswaSuperAdmin');
        }return redirect('/PendataanSiswaAdmin');
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
        $siswa = User::whereKey($request->id)->whereNull(['email', 'id_admin'])->firstOrFail();
        $cek = User::whereKeyNot($request->id)->whereNull(['email', 'id_admin'])->where('nisn', $validasi['nisn'])->exists();

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

                if (auth()->user()->id_admin === null) {
                    return redirect('/PendataanSiswaSuperAdmin');
                }return redirect('/PendataanSiswaAdmin');
            }

            return back()->withInput()->withErrors(['nisn' => 'nisn already used']);
        }

        abort(404);
    }

    public function hapus(Request $request)
    {
        if ($request->id) {
        $siswa = User::whereKey($request->id)->whereNull(['email', 'id_admin'])->firstOrFail();

            // amankan data yang bersangkutan

            $siswa->delete();
            if (auth()->user()->id_admin === null) {
                return redirect('/PendataanSuperAdmin');
            }return redirect('/PendataanSiswaAdmin');   
        }
        abort(404);
    }
}
