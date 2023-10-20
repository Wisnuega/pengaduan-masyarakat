<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Middleware\cekRolePetugas;
use App\Http\Middleware\validasiMasyarakat;
use App\Http\Middleware\validasiPetugas;
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

// Data Masyarakat
Route::get('/',[MasyarakatController::class,'index']);
Route::get('pengaduan',[MasyarakatController::class,'pengaduan'])->middleware(validasiMasyarakat::class);
Route::post('pengaduan',[MasyarakatController::class,'komplain']);
Route::get('laporan',[MasyarakatController::class,'lapor'])->middleware(validasiMasyarakat::class);
Route::get('filter',[MasyarakatController::class,'lapor']);

// login & register
Route::get('login',[LoginController::class,'login']);
Route::post('login',[LoginController::class,'ceklogin']);
Route::get('registrasi',[LoginController::class,'registrasi']);
Route::post('registrasi',[LoginController::class,'simpan']);
Route::get('logout',[LoginController::class,'logout']);


// Data Admin
Route::prefix('petugas')->group(function () {
    Route::get('/',[AdminController::class,'index'])->middleware(validasiPetugas::class);
    Route::get('/status/{id}',[AdminController::class,'validasiStatus']);
    Route::get('/tanggapan',[AdminController::class,'tanggapan']);
    Route::post('/tanggapan/{id}',[AdminController::class,'balas']);
    Route::get('/registrasi',[AdminController::class,'registrasi'])->middleware(cekRolePetugas::class);
    Route::post('/registrasi',[AdminController::class,'simpan']);
    Route::get('/login',[AdminController::class,'login']);
    Route::post('/login',[AdminController::class,'ceklogin']);
    Route::get('/logout',[AdminController::class,'logout']);
    Route::get('/laporan',[AdminController::class,'laporan']);
});

