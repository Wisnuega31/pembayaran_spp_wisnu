<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }
    public function cekPetugas(Request $request){
        $data = new Petugas();
        $petugas = $data->where("username",$request->username)->where('password',$request->password);
        if($petugas->exists()){
            session(['dataPetugas'=>$petugas->first()]);
            return redirect('/');
        }
        return back()->with('pesan','Username dan Password tidak terdaftar');
    }
    public function cekSiswa(Request $request){
        $data = new Siswa();
        $siswa = $data->where("nisn",$request->nisn)->where('nis',$request->nis);
        if($siswa->exists()){
            session(['dataSiswa'=>$siswa->first()]);
            return redirect('/');
        }
        return back()->with('pesan','NISN tidak terdaftar');
    }
    public function logout(){
        session()->flush();
        return back();
    }
}
