<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function PengelolaanAdminSuperAdmin(Request $request)
    {
        $admin = User::select(['id', 'id_number AS id_admin', 'username AS email', 'name AS nama'])
            ->where(function (Builder $query) use ($request) {
                // $query->whereKeyNot();
                $query->whereNotNull('id_number');
                if ($request->pencarian) {
                    $query->whereAny(['username', 'id_number', 'name'], 'LIKE', "%{$request->pencarian}%");
                }
            })->latest()->paginate(5);

        return view('Pages/SuperAdmin/PengelolaanAdminSuperAdmin', compact('admin'));
    }
    function PengelolaanAdminTambahSuperAdmin()
    {
        return view('Pages/SuperAdmin/PengelolaanAdmin-TambahSuperAdmin');
    }
    function PengelolaanAdminUbahSuperAdmin(Request $request)
    {
        // $query->whereKeyNot();
        $admin = User::select(['id', 'id_number AS id_admin', 'username AS email', 'name AS nama'])
            ->whereKey($request->id)->whereNotNull('id_number')->firstOrFail();

        return view('Pages/SuperAdmin/PengelolaanAdmin-UbahSuperAdmin', compact('admin'));
    }

    function tambah(Request $request)
    {
        $validasi = $request->validate([
            'id_admin' => 'required|string|max:255|unique:users,id_number',
            'email' => 'required|string|max:255|email|unique:users,username',
            'kata_sandi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        User::create([
            'password' => $validasi['kata_sandi'],
            'id_number' => $validasi['id_admin'],
            'username' => $validasi['email'],
            'name' => $validasi['nama'],
        ]);

        return redirect('/PengelolaanAdminSuperAdmin');
    }

    public function edit(Request $request)
    {
        $validasi = $request->validate([
            'kata_sandi' => 'nullable|string|max:255',
            'id_admin' => 'required|string|max:255',
            'email' => 'required|string|max:255|email',
            'nama' => 'required|string|max:255',
        ]);

        if ($request->id) {
            // $query->whereKeyNot();
            $admin = User::whereKey($request->id)->whereNotNull('id_number')->firstOrFail();
            $cek_id = User::whereKeyNot($request->id)->where('id_number', $validasi['id_admin'])->exists();
            $cek_email = User::whereKeyNot($request->id)->where('username', $validasi['email'])->exists();

            if (!$cek_id && !$cek_email) {
                $admin->name = $validasi['nama'];
                $admin->username = $validasi['email'];
                $admin->id_number = $validasi['id_admin'];
                $admin->save();

                if ($validasi['kata_sandi'] !== null) {
                    $admin->update(['password' => $validasi['kata_sandi']]);
                }

                return redirect('/PengelolaanAdminSuperAdmin');
            }

            if ($cek_id) {
                return back()->withInput()->withErrors(['id_admin' => 'id admin already used']);
            }
            return back()->withInput()->withErrors(['email' => 'email already used']);
        }

        abort(404);
    }

    public function hapus(Request $request)
    {
        if ($request->id) {
            // $query->whereKeyNot();
            $admin = User::whereKey($request->id)->whereNotNull('id_number')->firstOrFail();
            $admin->forceDelete();

            return back();
        }

        abort(404);
    }
}
