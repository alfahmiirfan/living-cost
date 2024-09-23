<?php

namespace App\Http\Controllers;

use App\Imports\SiswaImport;
use App\Models\Harga;
use App\Models\Income;
use App\Models\Month;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Year;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    function PendataanSiswa(Request $request)
    {
        $siswa = Siswa::where(function (Builder $query) use ($request) {
            if ($request->pencarian) {
                $query->whereAny(['nama', 'nisn', 'angkatan'], 'LIKE', "%{$request->pencarian}%");
            }
        })->latest()->paginate(5);

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/PendataanSuperAdmin', compact('siswa'));
        }
        return view('Pages/Admin/PendataanSiswaAdmin', compact('siswa'));
    }

    function DetailPembayaranSiswaSuperAdmin(Request $request)
    {
        $siswa = Siswa::findOrFail($request->id);

        return view('Pages/SuperAdmin/DetailPembayaranSiswa-SuperAdmin', compact('siswa'));
    }

    function PendataanTambah()
    {
        $daftarTahun = $this->daftarTahun();

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/Pendataan-TambahSuperAdmin', compact('daftarTahun'));
        }
        return view('Pages/Admin/PendataanSiswa-TambahAdmin', compact('daftarTahun'));
    }
    function PendataanUbah(Request $request)
    {
        $daftarTahun = $this->daftarTahun();
        $siswa = Siswa::findOrFail($request->id);

        if (auth()->user()->id_number === null) {
            return view('Pages/SuperAdmin/Pendataan-UbahSuperAdmin', compact('siswa', 'daftarTahun'));
        }
        return view('Pages/Admin/PendataanSiswa-UbahAdmin', compact('siswa', 'daftarTahun'));
    }

    function tambah(Request $request)
    {
        $validasi = $request->validate([
            'nisn' => 'required|string|max:255|unique:siswa,nisn',
            'tahun_masuk' => 'required|string|exists:year,id',
            'angkatan' => 'required|string|exists:year,id',
            'kata_sandi' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
        ]);

        $tahunMasuk = Year::findOrFail($validasi['tahun_masuk']);
        $angkatan = Year::findOrFail($validasi['angkatan']);

        $sisaTahun = (int) $angkatan->year + 3 - (int) $tahunMasuk->year;

        if ($angkatan->year > $tahunMasuk->year || $sisaTahun < 0) {
            return back()->withInput()->withErrors(['angkatan' => 'Angkatan must equal or less than Tahun Masuk']);
        }

        $daftarBulan = Month::get();
        if (!$daftarBulan->count()) {
            return back()->withInput()->withErrors(['tahun_masuk' => 'Months doesnt exists']);
        }
        $harga = Harga::first();
        if (!$harga) {
            return back()->withInput()->withErrors(['tahun_masuk' => 'Harga doesnt exists']);
        }

        DB::beginTransaction();
        $siswa = Siswa::create([
            'tahun_masuk' => $tahunMasuk->year,
            'angkatan' => $angkatan->year,
            'password' => $validasi['kata_sandi'],
            'nisn' => $validasi['nisn'],
            'nama' => $validasi['nama'],
            'year_id' => $tahunMasuk->id,
        ]);

        $mulai = (int) $tahunMasuk->year;
        $akhir = (int) $tahunMasuk->year + $sisaTahun;
        foreach (range($mulai, $akhir) as $key => $tahun) {
            $temp = Year::firstOrNew(['year' => $tahun]);
            if (!$temp->id) {
                $temp->save();
            }
            foreach ($daftarBulan as $key => $bulan) {
                if (($mulai === $tahun && $bulan->id <= 6) || ($tahun === $akhir && $bulan->id > 6)) {
                    continue;
                }
                $income = new Income();
                $income->siswa_id = $siswa->id;
                $income->year_id = $temp->id;
                $income->amount = $harga->amoung;
                $income->month_id = $bulan->id;
                $income->name = $siswa->nama;
                $income->nisn = $siswa->nisn;
                $income->year = $temp->year;
                $income->month = $bulan->month;
                $income->status = 'Belum Bayar';
                $save = $income->save();
                if (!$save) {
                    DB::rollBack();
                    return back()->withInput()->withErrors(['nama' => 'Failed to create income']);
                }
            }
        }
        DB::commit();

        if (auth()->user()->id_number === null) {
            return redirect('/PendataanSiswaSuperAdmin');
        }
        return redirect('/PendataanSiswaAdmin');
    }

    public function edit(Request $request)
    {
        $validasi = $request->validate([
            // 'tahun_masuk' => 'required|numeric|integer|digits:4',
            // 'angkatan' => 'required|numeric|integer|digits:4',
            'kata_sandi' => 'nullable|string|max:255',
            'nama' => 'required|string|max:255',
            'nisn' => 'required|string|max:255',
        ]);

        if ($request->id) {
            $siswa = Siswa::findOrFail($request->id);
            $cek = Siswa::whereKeyNot($request->id)->where('nisn', $validasi['nisn'])->exists();

            if (!$cek) {
                $siswa->nama = $validasi['nama'];
                $siswa->nisn = $validasi['nisn'];
                $siswa->save();

                if ($validasi['kata_sandi'] !== null) {
                    $siswa->update(['password' => $validasi['kata_sandi']]);
                }

                // Ubah data yang bersangkutan

                if (auth()->user()->id_number === null) {
                    return redirect('/PendataanSiswaSuperAdmin');
                }
                return redirect('/PendataanSiswaAdmin');
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
            if ($siswa->transaction->count()) {
                $siswa->delete();
            } else {
                $siswa->income()->forceDelete();
                $siswa->forceDelete();
            }

            if (auth()->user()->id_number === null) {
                return redirect('/PendataanSiswaSuperAdmin');
            }
            return redirect('/PendataanSiswaAdmin');
        }
        abort(404);
    }

    public function daftarTahun(): Collection
    {
        $tahunSekarang = (int) Carbon::now()->format('Y');

        for ($i = $tahunSekarang - 2; $i <= $tahunSekarang + 2; $i++) {
            $tahun = Year::firstOrNew(['year' => $i]);
            if ($tahun->id === null) {
                $tahun->save();
            }
        }

        return Year::select(['id', 'year AS tahun'])->orderBy('year')->get();
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'excel' => 'bail|required|file'
        ]);

        Excel::import(new SiswaImport, $request->file('excel'));

        return back();
    }
}
