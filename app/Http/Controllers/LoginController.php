<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }
    public function cekPetugas(Request $request){
        $data = new Petugas();
        $data = $data->where("username",$request->username)->where('password',$request->password)->first();
        if($data->exists()){
            session(['dataPetugas'=>$data]);
            return redirect('/');
        }
        return back()->with('error','Username dan Password tidak terdaftar');
    }
    public function logout(){
        session()->flush();
        return back();
    }
}
