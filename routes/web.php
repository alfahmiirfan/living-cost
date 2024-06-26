<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\OtentifikasiController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPage;

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

// Route::get('/', function () {
//     return view('Pages/SuperAdmin/DashboardSuperAdmin');
// });
// Route::get('/PemasukanSuperAdmin', function () {
//     return view('Pages/SuperAdmin/PemasukanSuperAdmin');
// });
// Route::get('/Pemasukan-StatusSuperAdmin', function () {
//     return view('Pages/SuperAdmin/Pemasukan-StatusSuperAdmin');
// });
// Route::get('/PengeluaranSuperAdmin', function () {
//     return view('Pages/SuperAdmin/PengeluaranSuperAdmin');
// });
// Route::get('/Pengeluaran-TambahSuperAdmin', function () {
//     return view('Pages/SuperAdmin/Pengeluaran-TambahSuperAdmin');
// });
// Route::get('/Pengeluaran-UbahSuperAdmin', function () {
//     return view('Pages/SuperAdmin/Pengeluaran-UbahSuperAdmin');
// });
// Route::get('/PendataanSiswaSuperAdmin', function () {
//     return view('Pages/SuperAdmin/PendataanSuperAdmin');
// });
// Route::get('/Pendataan-TambahSuperAdmin', function () {
//     return view('Pages/SuperAdmin/Pendataan-TambahSuperAdmin');
// });
// Route::get('/Pendataan-UbahSuperAdmin', function () {
//     return view('Pages/SuperAdmin/Pendataan-UbahSuperAdmin');
// });
// Route::get('/PengelolaanAdminSuperAdmin', function () {
//     return view('Pages/SuperAdmin/PengelolaanAdminSuperAdmin');
// });
// Route::get('/PengelolaanAdmin-TambahSuperAdmin', function () {
//     return view('Pages/SuperAdmin/PengelolaanAdmin-TambahSuperAdmin');
// });
// Route::get('/PengelolaanAdmin-UbahSuperAdmin', function () {
//     return view('Pages/SuperAdmin/PengelolaanAdmin-UbahSuperAdmin');
// });
// Route::get('/LaporanSuperAdmin', function () {
//     return view('Pages/SuperAdmin/LaporanSuperAdmin');
// });
// Route::get('/Laporan-LihatSuperAdmin', function () {
//     return view('Pages/SuperAdmin/Laporan-LihatSuperAdmin');
// });
// //Auth
// Route::get('/LoginSuperAdmin', function () {
//     return view('Pages/LoginSuperAdmin');
// });
// Route::get('/LupaPasswordSuperAdmin', function () {
//     return view('Pages/LupaPasswordSuperAdmin');
// });
// Route::get('/NewPasswordSuperAdmin', function () {
//     return view('Pages/NewPasswordSuperAdmin');
// });
// Route::get('/OtpSuperAdmin', function () {
//     return view('Pages/OtpSuperAdmin');
// });

//pendataan siswa super admin
Route::controller(SiswaController::class)->group(function () {
    Route::get('/PendataanSiswaSuperAdmin', 'PendataanSiswa');
    Route::get('/PendataanSiswaSuperAdmin/hapus', 'hapus');
    Route::get('/Pendataan-TambahSuperAdmin', 'PendataanTambah');
    Route::post('/Pendataan-TambahSuperAdmin', 'tambah');
    Route::get('/Pendataan-UbahSuperAdmin', 'PendataanUbah');
    Route::post('/Pendataan-UbahSuperAdmin', 'edit');
});
//pendataan siswa admin
Route::controller(SiswaController::class)->group(function () {
    Route::get('/PendataanSiswaAdmin', 'PendataanSiswa');
    Route::get('/PendataanSiswaAdmin/hapus', 'hapus');
    Route::get('/PendataanSiswa-TambahAdmin', 'PendataanTambah');
    Route::post('/PendataanSiswa-TambahAdmin', 'tambah');
    Route::get('/PendataanSiswa-UbahAdmin', 'PendataanUbah');
    Route::post('/PendataanSiswa-UbahAdmin', 'edit');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('/PengelolaanAdminSuperAdmin', 'PengelolaanAdminSuperAdmin');
    Route::get('/PengelolaanAdminSuperAdmin/hapus', 'hapus');
    Route::get('/PengelolaanAdmin-TambahSuperAdmin', 'PengelolaanAdminTambahSuperAdmin');
    Route::post('/PengelolaanAdmin-TambahSuperAdmin', 'tambah');
    Route::get('/PengelolaanAdmin-UbahSuperAdmin', 'PengelolaanAdminUbahSuperAdmin');
    Route::post('/PengelolaanAdmin-UbahSuperAdmin', 'edit');
});
//pengeluaran super admin
Route::controller(PengeluaranController::class)->group(function () {
    Route::get('/PengeluaranSuperAdmin', 'Pengeluaran');
    Route::get('/PengeluaranSuperAdmin/hapus', 'hapus');
    Route::get('/Pengeluaran-TambahSuperAdmin', 'PengeluaranTambah');
    Route::post('/Pengeluaran-TambahSuperAdmin', 'tambah');
    Route::get('/Pengeluaran-UbahSuperAdmin', 'PengeluaranUbah');
    Route::post('/Pengeluaran-UbahSuperAdmin', 'edit');
});
// pengeluaran admin
Route::controller(PengeluaranController::class)->group(function () {
    Route::get('/PengeluaranAdmin', 'Pengeluaran');
    Route::get('/PengeluaranAdmin/hapus', 'hapus');
    Route::get('/Pengeluaran-TambahAdmin', 'PengeluaranTambah');
    Route::post('/Pengeluaran-TambahAdmin', 'tambah');
    Route::get('/Pengeluaran-UbahAdmin', 'PengeluaranUbah');
    Route::post('/Pengeluaran-UbahAdmin', 'edit');
});


Route::controller(OtentifikasiController::class)->group(function () {
    Route::get('/Login', 'LoginView')->name('login');
    Route::post('/Login', 'Login');
    Route::get('/LupaPassword', 'LupaPasswordView');
    Route::post('/LupaPassword', 'LupaPassword');
    Route::get('/NewPassword', 'NewPassword');
    Route::post('/NewPassword', 'gantiPassword');
    Route::get('/Otp', 'Otp');
    Route::post('/Otp', 'otpVerifikasi');
});

Route::controller(LaporanController::class)->group(function () {
    Route::get('/LaporanSuperAdmin', 'LaporanSuperAdmin');
    Route::get('/LaporanKategoriSuperAdmin', 'LaporanKategoriSuperAdmin');
});

Route::controller(GeneralPage::class)->group(function () {
    // super admin
    Route::get('/', 'dashboardSuperAdmin');
    Route::get('/PemasukanSuperAdmin', 'pemasukanSuperAdmin');
    Route::get('/Pemasukan-StatusSuperAdmin', 'pemasukanStatusSuperAdmin');
    Route::get('/Pemasukan-LihatSuperAdmin', 'pemasukanLihatSuperAdmin');

    // **
    // Route::get('/PengeluaranSuperAdmin', 'pengeluaranSuperAdmin');
    // Route::get('/Pengeluaran-TambahSuperAdmin', 'PengeluaranTambahSuperAdmin');
    // Route::get('/Pengeluaran-UbahSuperAdmin', 'PengeluaranUbahSuperAdmin');
    // **

    // ***
    // Route::get('/PendataanSiswaSuperAdmin', 'PendataanSiswaSuperAdmin');
    // Route::get('/Pendataan-TambahSuperAdmin', 'PendataanTambahSuperAdmin');
    // Route::get('/Pendataan-UbahSuperAdmin', 'PendataanUbahSuperAdmin');
    // **

    // **
    // Route::get('/PengelolaanAdminSuperAdmin', 'PengelolaanAdminSuperAdmin');
    // Route::get('/PengelolaanAdmin-TambahSuperAdmin', 'PengelolaanAdminTambahSuperAdmin');
    // Route::get('/PengelolaanAdmin-UbahSuperAdmin', 'PengelolaanAdminUbahSuperAdmin');
    // **

    // Route::get('/LaporanSuperAdmin', 'LaporanSuperAdmin');
    // Route::get('/LaporanKategoriSuperAdmin', 'LaporanKategoriSuperAdmin');
    Route::get('/CetakLaporan', 'CetakLaporan');
    Route::get('/CetakLaporanKategori', 'CetakLaporanKategori');
    // **
    // Route::get('/LoginSuperAdmin', 'LoginSuperAdmin');
    // Route::get('/LupaPasswordSuperAdmin', 'LupaPasswordSuperAdmin');
    // Route::get('/NewPasswordSuperAdmin', 'NewPasswordSuperAdmin');
    // Route::get('/OtpSuperAdmin', 'OtpSuperAdmin');
    // **

    // akhir super admin

    // admin
    Route::get('/DashboardAdmin', 'DashboardAdmin');
    // Route::get('/PemasukanAdmin', 'PemasukanAdmin');
    // Route::get('/Pemasukan-StatusAdmin', 'PemasukanStatusAdmin');
    // Route::get('/Pemasukan-LihatAdmin', 'PemasukanLihatAdmin');
    // Route::get('/PengeluaranAdmin', 'PengeluaranAdmin');
    // Route::get('/Pengeluaran-TambahAdmin', 'PengeluaranTambahAdmin');
    // Route::get('/Pengeluaran-UbahAdmin', 'PengeluaranUbahAdmin');
    // Route::get('/PendataanSiswaAdmin', 'PendataanSiswaAdmin');
    // Route::get('/PendataanSiswa-TambahAdmin', 'PendataanSiswaTambahAdmin');
    // Route::get('/PendataanSiswa-UbahAdmin', 'PendataanSiswaUbahAdmin');
    // akhir admin

    // user
    Route::get('/LoginUser', 'LoginUser');
    Route::get('/DashboardUser', 'DashboardUser');
    Route::get('/InformasiUser', 'InformasiUser');
    Route::get('/PembayaranUser', 'PembayaranUser');
    Route::get('/MetodePembayaranUser', 'MetodePembayaranUser');
    Route::get('/VirtualAccountUser', 'VirtualAccountUser');
    // Akhir user

    //api
    Route::prefix('v1')->group(function () {
        Route::prefix('siswa')->group(function (){
            Route::middleware('siswa')->post('/payment/{id}', [App\Http\Controllers\Siswa\PaymentController::class, 'action']);
            Route::post('/login', [App\Http\Controllers\Siswa\LoginController::class, 'action']);
            Route::get('/harga', [App\Http\Controllers\Siswa\GetHargaController::class, 'action']);
        });
        Route::post('/callback', [App\Http\Controllers\Siswa\CallbackController::class, 'action']);
        Route::get('/transaction/{ref}', [App\Http\Controllers\Siswa\GetTransactionController::class, 'action']);

        Route::prefix('income')->group(function (){
            Route::get('/list/siswa', [App\Http\Controllers\Income\GetBySiswaController::class, 'action'])->middleware('siswa');
        });
    });


});