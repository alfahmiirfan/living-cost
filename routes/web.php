<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Pages/SuperAdmin/DashboardSuperAdmin');
});
Route::get('/PemasukanSuperAdmin', function () {
    return view('Pages/SuperAdmin/PemasukanSuperAdmin');
});
Route::get('/Pemasukan-StatusSuperAdmin', function () {
    return view('Pages/SuperAdmin/Pemasukan-StatusSuperAdmin');
});
Route::get('/PengeluaranSuperAdmin', function () {
    return view('Pages/SuperAdmin/PengeluaranSuperAdmin');
});
Route::get('/Pengeluaran-TambahSuperAdmin', function () {
    return view('Pages/SuperAdmin/Pengeluaran-TambahSuperAdmin');
});
Route::get('/Pengeluaran-UbahSuperAdmin', function () {
    return view('Pages/SuperAdmin/Pengeluaran-UbahSuperAdmin');
});
Route::get('/PendataanSiswaSuperAdmin', function () {
    return view('Pages/SuperAdmin/PendataanSuperAdmin');
});
Route::get('/Pendataan-TambahSuperAdmin', function () {
    return view('Pages/SuperAdmin/Pendataan-TambahSuperAdmin');
});
Route::get('/Pendataan-UbahSuperAdmin', function () {
    return view('Pages/SuperAdmin/Pendataan-UbahSuperAdmin');
});
Route::get('/PengelolaanAdminSuperAdmin', function () {
    return view('Pages/SuperAdmin/PengelolaanAdminSuperAdmin');
});
Route::get('/PengelolaanAdmin-TambahSuperAdmin', function () {
    return view('Pages/SuperAdmin/PengelolaanAdmin-TambahSuperAdmin');
});
Route::get('/PengelolaanAdmin-UbahSuperAdmin', function () {
    return view('Pages/SuperAdmin/PengelolaanAdmin-UbahSuperAdmin');
});
Route::get('/LaporanSuperAdmin', function () {
    return view('Pages/SuperAdmin/LaporanSuperAdmin');
});
Route::get('/Laporan-LihatSuperAdmin', function () {
    return view('Pages/SuperAdmin/Laporan-LihatSuperAdmin');
});
//Auth
Route::get('/LoginSuperAdmin', function () {
    return view('Pages/LoginSuperAdmin');
});
Route::get('/LupaPasswordSuperAdmin', function () {
    return view('Pages/LupaPasswordSuperAdmin');
});
Route::get('/NewPasswordSuperAdmin', function () {
    return view('Pages/NewPasswordSuperAdmin');
});
Route::get('/OtpSuperAdmin', function () {
    return view('Pages/OtpSuperAdmin');
});
