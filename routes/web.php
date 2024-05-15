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
    return view('Pages/DashboardSuperAdmin');
});
Route::get('/PemasukanSuperAdmin', function () {
    return view('Pages/PemasukanSuperAdmin');
});
Route::get('/Pemasukan-StatusSuperAdmin', function () {
    return view('Pages/Pemasukan-StatusSuperAdmin');
});
Route::get('/PengeluaranSuperAdmin', function () {
    return view('Pages/PengeluaranSuperAdmin');
});
Route::get('/Pengeluaran-TambahSuperAdmin', function () {
    return view('Pages/Pengeluaran-TambahSuperAdmin');
});
Route::get('/Pengeluaran-UbahSuperAdmin', function () {
    return view('Pages/Pengeluaran-UbahSuperAdmin');
});
Route::get('/PendataanSiswaSuperAdmin', function () {
    return view('Pages/PendataanSuperAdmin');
});
Route::get('/Pendataan-TambahSuperAdmin', function () {
    return view('Pages/Pendataan-TambahSuperAdmin');
});
Route::get('/Pendataan-UbahSuperAdmin', function () {
    return view('Pages/Pendataan-UbahSuperAdmin');
});
Route::get('/PengelolaanAdminSuperAdmin', function () {
    return view('Pages/PengelolaanAdminSuperAdmin');
});
Route::get('/PengelolaanAdmin-TambahSuperAdmin', function () {
    return view('Pages/PengelolaanAdmin-TambahSuperAdmin');
});
Route::get('/PengelolaanAdmin-UbahSuperAdmin', function () {
    return view('Pages/PengelolaanAdmin-UbahSuperAdmin');
});
Route::get('/LaporanSuperAdmin', function () {
    return view('Pages/LaporanSuperAdmin');
});


