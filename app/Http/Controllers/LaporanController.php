<?php

namespace App\Http\Controllers;

use App\Models\Expenditure;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    function LaporanSuperAdmin(Request $request)
    {
        if (($request->bulan !== null && !is_numeric($request->bulan)) || ($request->tahun !== null && !is_numeric($request->tahun))) {
            abort(404);
        }

        $daftarTahun = Expenditure::selectRaw('extract(year FROM date) AS tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun')
            ->flatten()
            ->unique()
            ->toArray();

        $tahun = $request->tahun ?? end($daftarTahun);

        $daftarBulan = Expenditure::whereYear('date', $tahun)->selectRaw('extract(month FROM date) AS bulan')
            ->distinct()
            ->orderBy('bulan', 'desc')
            ->pluck('bulan')
            ->flatten()
            ->unique()
            ->toArray();

        $bulan = $request->bulan ?? end($daftarBulan);

        $pengeluaran = Expenditure::select(['id', 'name AS nama_item', 'category AS kategori', 'amount AS jumlah', 'price AS harga', 'date AS tanggal'])
            ->whereYear('date', $tahun)->whereMonth('date', $bulan)->where(function (Builder $query) use ($request) {
                if ($request->pencarian) {
                    $query->whereAny(['name', 'category'], 'LIKE', "%{$request->pencarian}%");
                }
            })->orderBy('date', 'desc')->paginate(5);

        $namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        return view('Pages/SuperAdmin/LaporanSuperAdmin', compact('pengeluaran', 'daftarTahun', 'daftarBulan', 'namaBulan', 'bulan', 'tahun'));
    }
    function LaporanKategoriSuperAdmin(Request $request)
    {
        if (($request->bulan !== null && !is_numeric($request->bulan)) || ($request->tahun !== null && !is_numeric($request->tahun))) {
            abort(404);
        }

        $daftarTahun = Expenditure::selectRaw('extract(year FROM date) AS tahun')
            ->distinct()
            ->orderBy('tahun', 'desc')
            ->pluck('tahun')
            ->flatten()
            ->unique()
            ->toArray();

        $tahun = $request->tahun ?? end($daftarTahun);

        $daftarBulan = Expenditure::whereYear('date', $tahun)->selectRaw('extract(month FROM date) AS bulan')
            ->distinct()
            ->orderBy('bulan', 'desc')
            ->pluck('bulan')
            ->flatten()
            ->unique()
            ->toArray();

        $bulan = $request->bulan ?? end($daftarBulan);

        $pengeluaran = Expenditure::select(['id', 'name AS nama_item', 'category AS kategori', 'amount AS jumlah', 'price AS harga', 'date AS tanggal'])
            ->whereYear('date', $tahun)->whereMonth('date', $bulan)->where(function (Builder $query) use ($request) {
                if ($request->pencarian) {
                    $query->where('category', 'LIKE', "%{$request->pencarian}%");
                }
            })->orderBy('date', 'desc')->get();

        $jumlahHarga = $pengeluaran->sum('harga');

        $pengeluaran = $pengeluaran->groupBy('tanggal');

        $namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        return view('Pages/SuperAdmin/LaporanKategoriSuperAdmin', compact('pengeluaran', 'jumlahHarga', 'daftarTahun', 'daftarBulan', 'namaBulan', 'bulan', 'tahun'));
    }
}
