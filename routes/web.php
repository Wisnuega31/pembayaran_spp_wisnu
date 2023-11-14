<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/',[LoginController::class,'login']);
Route::post('/',[LoginController::class,'ceklogin']);

Route::get('dashboard',[PembayaranController::class,'index']);
Route::get('siswa',[PembayaranController::class,'siswa']);//CRUD siswa
Route::get('petugas',[PembayaranController::class,'petugas']);//CRUD peugas
Route::get('kelas',[PembayaranController::class,'kelas']);//CRUD kelas
Route::get('spp',[PembayaranController::class,'spp']);//CRUD spp
