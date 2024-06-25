<?php

namespace App\Http\Controllers;

use App\Models\Pengeluaran;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    function LaporanSuperAdmin(Request $request)
    {
        if (($request->bulan !== null && !is_numeric($request->bulan)) || ($request->tahun !== null && !is_numeric($request->tahun))) {
            abort(404);
        }

        $daftarTahun = Pengeluaran::selectRaw('extract(year FROM tanggal) AS tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun')
            ->flatten()
            ->unique()
            ->toArray();

        $tahun = $request->tahun ?? end($daftarTahun);

        $daftarBulan = Pengeluaran::whereYear('tanggal', $tahun)->selectRaw('extract(month FROM tanggal) AS bulan')
            ->distinct()
            ->orderBy('bulan', 'desc')
            ->pluck('bulan')
            ->flatten()
            ->unique()
            ->toArray();

        $bulan = $request->bulan ?? end($daftarBulan);

        $pengeluaran = Pengeluaran::whereYear('tanggal', $tahun)->whereMonth('tanggal', $bulan)->where(function (Builder $query) use ($request) {
            if ($request->pencarian) {
                $query->whereAny(['nama_item', 'kategori'], 'LIKE', "%{$request->pencarian}%");
            }
        })->orderBy('tanggal', 'desc')->get();

        $namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        return view('Pages/SuperAdmin/LaporanSuperAdmin', compact('pengeluaran', 'daftarTahun', 'daftarBulan', 'namaBulan', 'bulan', 'tahun'));
    }
    function LaporanKategoriSuperAdmin(Request $request)
    {
        if (($request->bulan !== null && !is_numeric($request->bulan)) || ($request->tahun !== null && !is_numeric($request->tahun))) {
            abort(404);
        }

        $daftarTahun = Pengeluaran::selectRaw('extract(year FROM tanggal) AS tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun')
            ->flatten()
            ->unique()
            ->toArray();

        $tahun = $request->tahun ?? end($daftarTahun);

        $daftarBulan = Pengeluaran::whereYear('tanggal', $tahun)->selectRaw('extract(month FROM tanggal) AS bulan')
            ->distinct()
            ->orderBy('bulan', 'desc')
            ->pluck('bulan')
            ->flatten()
            ->unique()
            ->toArray();

        $bulan = $request->bulan ?? end($daftarBulan);

        $pengeluaran = Pengeluaran::whereYear('tanggal', $tahun)->whereMonth('tanggal', $bulan)->where(function (Builder $query) use ($request) {
            if ($request->pencarian) {
                $query->where('kategori', 'LIKE', "%{$request->pencarian}%");
            }
        })->orderBy('tanggal', 'desc')->get();

        $jumlahHarga = $pengeluaran->sum('harga');

        $pengeluaran = $pengeluaran->groupBy('tanggal');

        $namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        return view('Pages/SuperAdmin/LaporanKategoriSuperAdmin', compact('pengeluaran', 'jumlahHarga', 'daftarTahun', 'daftarBulan', 'namaBulan', 'bulan', 'tahun'));
    }
}
