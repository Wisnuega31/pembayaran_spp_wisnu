<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Middleware\ceklogin;
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

Route::get('login',[LoginController::class,'login']);
Route::post('loginSiswa',[LoginController::class,'cekSiswa']);
Route::post('loginPetugas',[LoginController::class,'cekPetugas']);
Route::get('logout',[LoginController::class,'logout']);

Route::get('/',[PembayaranController::class,'index'])->middleware([ceklogin::class]);

Route::prefix('siswa')->group(function () {
    Route::get('/',[PembayaranController::class,'siswa']);//CRUD siswa
    Route::post('/',[PembayaranController::class,'tambahSiswa']);//CRUD siswa
    Route::get('/edit/{id}',[PembayaranController::class,'editsis']);//CRUD siswa
    Route::post('/edit/{id}',[PembayaranController::class,'editSiswa']);//CRUD siswa
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusSiswa']);//CRUD siswa
});
Route::prefix('petugas')->group(function () {
    Route::get('/',[PembayaranController::class,'petugas']);//CRUD Petugas
    Route::post('/',[PembayaranController::class,'tambahPetugas']);//CRUD Petugas
    Route::get('/edit/{id}',[PembayaranController::class,'editptg']);//CRUD Petugas
    Route::post('/edit/{id}',[PembayaranController::class,'editPetugas']);//CRUD Petugas
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusPetugas']);//CRUD Petugas
});
Route::prefix('kelas')->group(function () {
    Route::get('/',[PembayaranController::class,'kelas']);//CRUD Kelas
    Route::post('/',[PembayaranController::class,'tambahKelas']);//CRUD Kelas
    Route::get('/edit/{id}',[PembayaranController::class,'editkls']);//CRUD Kelas
    Route::post('/edit/{id}',[PembayaranController::class,'editKelas']);//CRUD Kelas
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusKelas']);//CRUD Kelas
});
Route::prefix('spp')->group(function () {
    Route::get('/',[PembayaranController::class,'spp']);//CRUD Spp
    Route::post('/',[PembayaranController::class,'tambahSpp']);//CRUD Spp
    Route::get('/edit/{id}',[PembayaranController::class,'editsp']);//CRUD Spp
    Route::post('/edit/{id}',[PembayaranController::class,'editSpp']);//CRUD Spp
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusSpp']);//CRUD Spp
});

Route::get('transaksi',[PembayaranController::class,'transaksi']);
Route::post('transaksi',[PembayaranController::class,'cekTransaksi']);