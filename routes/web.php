<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
use App\Http\Middleware\ceklogin;
use App\Http\Middleware\cekRolePetugas;
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
Route::get('transaksi',[PembayaranController::class,'transaksi'])->middleware(ceklogin::class);
Route::post('transaksi',[PembayaranController::class,'cekTransaksi']);
Route::get('riwayat',[PembayaranController::class,'riwayat'])->middleware(ceklogin::class);

Route::prefix('siswa')->group(function () {
    Route::get('/',[PembayaranController::class,'siswa'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD siswa
    Route::post('/',[PembayaranController::class,'tambahSiswa']);//CRUD siswa
    Route::get('/edit/{id}',[PembayaranController::class,'editsis'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD siswa
    Route::post('/edit/{id}',[PembayaranController::class,'editSiswa']);//CRUD siswa
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusSiswa'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD siswa
});
Route::prefix('petugas')->group(function () {
    Route::get('/',[PembayaranController::class,'petugas'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Petugas
    Route::post('/',[PembayaranController::class,'tambahPetugas']);//CRUD Petugas
    Route::get('/edit/{id}',[PembayaranController::class,'editptg'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Petugas
    Route::post('/edit/{id}',[PembayaranController::class,'editPetugas']);//CRUD Petugas
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusPetugas'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Petugas
});
Route::prefix('kelas')->group(function () {
    Route::get('/',[PembayaranController::class,'kelas'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Kelas
    Route::post('/',[PembayaranController::class,'tambahKelas']);//CRUD Kelas
    Route::get('/edit/{id}',[PembayaranController::class,'editkls'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Kelas
    Route::post('/edit/{id}',[PembayaranController::class,'editKelas']);//CRUD Kelas
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusKelas'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Kelas
});
Route::prefix('spp')->group(function () {
    Route::get('/',[PembayaranController::class,'spp'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Spp
    Route::post('/',[PembayaranController::class,'tambahSpp']);//CRUD Spp
    Route::get('/edit/{id}',[PembayaranController::class,'editsp'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Spp
    Route::post('/edit/{id}',[PembayaranController::class,'editSpp']);//CRUD Spp
    Route::get('/hapus/{id}',[PembayaranController::class,'hapusSpp'])->middleware([ceklogin::class,cekRolePetugas::class]);//CRUD Spp
});
