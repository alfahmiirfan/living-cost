<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class GeneralPage extends Controller
{
    // super admin
    function dashboardSuperAdmin()
    {
        $belumbayar=Income::where('status', 'LIKE', '%belum bayar%')->count();
        $telatbayar=Income::where('status', 'LIKE', '%telat bayar%')->count();
        $lunas=Income::where('status', 'LIKE', '%sudah bayar%')->count();
        return view('Pages/SuperAdmin/DashboardSuperAdmin', compact('belumbayar','telatbayar','lunas'));
    }
    // function PemasukanSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/PemasukanSuperAdmin');
    // }
    function DetailPembayaranSiswaSuperAdmin()
    {
        return view('Pages/SuperAdmin/DetailPembayaranSiswa-SuperAdmin');
    }
    // function PemasukanStatusSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/Pemasukan-StatusSuperAdmin');
    // }
    // function PemasukanLihatSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/Pemasukan-LihatSuperAdmin');
    // }
    // function PengeluaranSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/PengeluaranSuperAdmin');
    // }
    // function PengeluaranTambahSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/Pengeluaran-TambahSuperAdmin');
    // }
    // function PengeluaranUbahSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/Pengeluaran-UbahSuperAdmin');
    // }
    // function PendataanSiswaSuperAdmin () {
    //     return view('Pages/SuperAdmin/PendataanSuperAdmin');
    // }
    // function PendataanTambahSuperAdmin () {
    //     return view('Pages/SuperAdmin/Pendataan-TambahSuperAdmin');
    // }
    // function PendataanUbahSuperAdmin () {
    //     return view('Pages/SuperAdmin/Pendataan-UbahSuperAdmin');
    // }
    // function PengelolaanAdminSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/PengelolaanAdminSuperAdmin');
    // }
    // function PengelolaanAdminTambahSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/PengelolaanAdmin-TambahSuperAdmin');
    // }
    // function PengelolaanAdminUbahSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/PengelolaanAdmin-UbahSuperAdmin');
    // }
    // function LaporanSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/LaporanSuperAdmin');
    // }
    // function LaporanKategoriSuperAdmin()
    // {
    //     return view('Pages/SuperAdmin/LaporanKategoriSuperAdmin');
    // }
    function CetakLaporan()
    {
        return view('Pages/SuperAdmin/CetakLaporan');
    }
    function CetakLaporanKategori()
    {
        return view('Pages/SuperAdmin/CetakLaporanKategori');
    }
    // function LoginSuperAdmin()
    // {
    //     return view('Pages/LoginSuperAdmin');
    // }
    // function LupaPasswordSuperAdmin()
    // {
    //     return view('Pages/LupaPasswordSuperAdmin');
    // }
    // function NewPasswordSuperAdmin()
    // {
    //     return view('Pages/NewPasswordSuperAdmin');
    // }
    // function OtpSuperAdmin()
    // {
    //     return view('Pages/OtpSuperAdmin');
    // }
    // akhir super admin

    // admin
    function DashboardAdmin()
    {
        return view('Pages/Admin/DashboardAdmin');
    }
    function PemasukanAdmin()
    {
        return view('Pages/Admin/PemasukanAdmin');
    }
    function PemasukanStatusAdmin()
    {
        return view('Pages/Admin/Pemasukan-StatusAdmin');
    }
    function PemasukanLihatAdmin()
    {
        return view('Pages/Admin/Pemasukan-LihatAdmin');
    }
    function PengeluaranAdmin()
    {
        return view('Pages/Admin/PengeluaranAdmin');
    }
    function PengeluaranTambahAdmin()
    {
        return view('Pages/Admin/Pengeluaran-TambahAdmin');
    }
    function PengeluaranUbahAdmin()
    {
        return view('Pages/Admin/Pengeluaran-UbahAdmin');
    }
    function PendataanSiswaAdmin()
    {
        return view('Pages/Admin/PendataanSiswaAdmin');
    }
    function PendataanSiswaTambahAdmin()
    {
        return view('Pages/Admin/PendataanSiswa-TambahAdmin');
    }
    function PendataanSiswaUbahAdmin()
    {
        return view('Pages/Admin/PendataanSiswa-UbahAdmin');
    }
    // akhir admin

    // user
    // function LoginUser()
    // {
    //     return view('Pages/User/LoginUser');
    // }
    // function DashboardUser()
    // {
    //     return view('Pages/User/DashboardUser');
    // }
    // function InformasiUser()
    // {
    //     return view('Pages/User/InformasiUser');
    // }
    // function PembayaranUser()
    // {
    //     return view('Pages/User/PembayaranUser');
    // }
    // function MetodePembayaranUser()
    // {
    //     return view('Pages/User/MetodePembayaranUser');
    // }
    // function VirtualAccountUser()
    // {
    //     return view('Pages/User/VirtualAccountUser');
    // }
    // Akhir user

}
