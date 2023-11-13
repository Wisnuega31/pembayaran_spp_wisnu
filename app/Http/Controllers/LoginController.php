<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view("login");
    }
    public function ceklogin(Request $request){
        $data = new Petugas();
    }
    public function logout(){

    }
}
