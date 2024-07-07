<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//api
Route::prefix('v1')->group(function () {
    Route::prefix('siswa')->group(function () {
        Route::middleware('siswa')->post('/payment/{id}', [App\Http\Controllers\Siswa\PaymentController::class, 'action']);
        Route::post('/login', [App\Http\Controllers\Siswa\LoginController::class, 'action']);
        Route::get('/harga', [App\Http\Controllers\Siswa\GetHargaController::class, 'action']);
    });
    Route::post('/callback', [App\Http\Controllers\Siswa\CallbackController::class, 'action']);
    Route::get('/transaction/{ref}', [App\Http\Controllers\Siswa\GetTransactionController::class, 'action']);

    Route::prefix('income')->group(function () {
        Route::get('/list/siswa', [App\Http\Controllers\Income\GetBySiswaController::class, 'action'])->middleware('siswa');
    });
});
