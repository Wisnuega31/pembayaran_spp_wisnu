<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        return view("dashboardPetugas");
    }
    public function siswa(){
        return view("crud.siswa");
    }
    public function petugas(){
        return view("crud.petugas");
    }
    public function kelas(){
        return view("crud.kelas");
    }
    public function spp(){
        return view("crud.spp");
    }
}
