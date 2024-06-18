<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;


class GeneralPage extends Controller
{
    // super admin
    function dashboardSuperAdmin()
    {
        return view('Pages/SuperAdmin/DashboardSuperAdmin');
    }
    function PemasukanSuperAdmin()
    {
        return view('Pages/SuperAdmin/PemasukanSuperAdmin');
    }
    function PemasukanStatusSuperAdmin()
    {
        return view('Pages/SuperAdmin/Pemasukan-StatusSuperAdmin');
    }
    function PemasukanLihatSuperAdmin()
    {
        return view('Pages/SuperAdmin/Pemasukan-LihatSuperAdmin');
    }
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
    function LaporanSuperAdmin()
    {
        return view('Pages/SuperAdmin/LaporanSuperAdmin');
    }
    function LaporanLihatSuperAdmin()
    {
        return view('Pages/SuperAdmin/Laporan-LihatSuperAdmin');
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
    function DashboardUser()
    {
        return view('Pages/User/DashboardUser');
    }
    function ProfileUser()
    {
        return view('Pages/User/ProfileUser');
    }
    function UploadUser()
    {
        return view('Pages/User/UploadUser');
    }
    function InformasiUser()
    {
        return view('Pages/User/InformasiUser');
    }
    // Akhir user

}