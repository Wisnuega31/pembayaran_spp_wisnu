<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        return view("spp.dashboardPetugas");
    }
    public function siswa(){
        return view("spp.crud.siswa");
    }
    public function petugas(){
        return view("spp.crud.petugas");
    }
    public function kelas(){
        return view("spp.crud.kelas");
    }
    public function spp(){
        return view("spp.crud.spp");
    }
}
