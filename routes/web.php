<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MasyarakatController;
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
Route::get('pengaduan',[MasyarakatController::class,'pengaduan']);
Route::post('pengaduan',[MasyarakatController::class,'komplain']);
Route::get('laporan',[MasyarakatController::class,'lapor']);
Route::post('laporan',[MasyarakatController::class,'laporan']);

// login & register
Route::get('login',[LoginController::class,'login']);
Route::post('login',[LoginController::class,'ceklogin']);
Route::get('registrasi',[LoginController::class,'registrasi']);
Route::post('registrasi',[LoginController::class,'simpan']);


// Data Admin
Route::get('petugas',[AdminController::class,'index']);
Route::get('petugas/status/{id}',[AdminController::class,'validasiStatus']);
Route::get('petugas/tanggapan',[AdminController::class,'tanggapan']);
Route::post('petugas/tanggapan/{id}',[AdminController::class,'balasan']);
Route::get('petugas/registrasi',[AdminController::class,'registrasi']);
Route::get('petugas/laporan',[AdminController::class,'laporan']);
Route::get('petugas/login',[AdminController::class,'login']);

route::get('coba',function(){
    return view('coba');
});