<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\Petugas;
use App\Models\Siswa;
use App\Models\Spp;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index(){
        if (session('dataPetugas')) {
            return view("spp.dashboardPetugas");
        }elseif ( session('dataSiswa')) {
            return view("spp.dashboardSiswa");
        }
    }  

    public function siswa(){
        $data = new Siswa();
        $dataKelas = new Kelas();
        $dataSpp = new Spp();
        $data = $data->with(['kelas','spp'])->get();
        return view("spp.crud.siswa",["dataSiswa"=>$data,'dataKelas'=>$dataKelas->all(),'dataSpp'=>$dataSpp->all()]);
    }
    public function tambahSiswa(Request $request){
        $data = new Siswa();
        $data->create($request->all());
        return back()->with("pesan","data berhasil di tambahkan");
    }
    public function editsis($id){
        $data = new Siswa();
        $dataKelas = new Kelas();
        $dataSpp = new Spp();

        $data = $data->with(["kelas","spp"])->find($id);

        return view("spp.crud.editSiswa",["dataSiswa"=>$data,'dataKelas'=>$dataKelas->all(),'dataSpp'=>$dataSpp->all()]);
    }
    public function editSiswa(Request $request,$id){
        $data = new Siswa();
        $data->find($id)->update($request->all());
        return redirect('siswa')->with('pesan','data berhasil di ubah');
    }
    public function hapusSiswa($id){
        $data = new Siswa();
        $data->find($id)->delete();
        return redirect('siswa')->with('pesan','data berhasil di ubah');
    }


    public function petugas(){
        $data = new Petugas();
        return view("spp.crud.petugas",["dataPetugas"=>$data->all()]);
    }
    public function tambahPetugas(Request $request){
        $data = new Petugas();
        $data->create($request->all());
        return back()->with("pesan","data berhasil di tambahkan");
    }
    public function editptg($id){
        $data = new Petugas();
        return view("spp.crud.editPetugas",["dataPetugas"=>$data->where('id_petugas',$id)->first()]);
    }
    public function editPetugas(Request $request,$id){
        $data = new Petugas();
        $data->find($id)->update($request->all());
        return redirect('petugas')->with('pesan','data berhasil di ubah');
    }
    public function hapusPetugas($id){
        $data = new Petugas();
        $data->find($id)->delete();
        return redirect('petugas')->with('pesan','data berhasil di ubah');
    }


    public function kelas(){
        $data = new Kelas();
        return view("spp.crud.kelas",["dataKelas"=>$data->all()]);
    }
    public function tambahKelas(Request $request){
        $data = new Kelas();
        $data->create($request->all());
        return back()->with("pesan","data berhasil di tambahkan");
    }
    public function editkls($id){
        $data = new Kelas();
        return view("spp.crud.editKelas",["dataKelas"=>$data->where('id_kelas',$id)->first()]);
    }
    public function editKelas(Request $request,$id){
        $data = new Kelas();
        $data->find($id)->update($request->all());
        return redirect('kelas')->with('pesan','data berhasil di ubah');
    }
    public function hapusKelas($id){
        $data = new Kelas();
        $data->find($id)->delete();
        return redirect('kelas')->with('pesan','data berhasil di ubah');
    }


    public function spp(){
        $data = new Spp();
        return view("spp.crud.spp",["dataSpp"=>$data->all()]);
    }
    public function tambahSpp(Request $request){
        $data = new Spp();
        $data->create($request->all());
        return back()->with("pesan","data berhasil di tambahkan");
    }
    public function editsp($id){
        $data = new Spp();
        return view("spp.crud.editSpp",["dataSpp"=>$data->where('id_spp',$id)->first()]);
    }
    public function editSpp(Request $request,$id){
        $data = new Spp();
        $data->find($id)->update($request->all());
        return redirect('spp')->with('pesan','data berhasil di ubah');
    }
    public function hapusSpp($id){
        $data = new Spp();
        $data->find($id)->delete();
        return redirect('spp')->with('pesan','data berhasil di ubah');
    }

    public function transaksi(){
        $data = new Spp();
        $bulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        return view('spp.transaksi', ['dataSpp' => $data->all(),'bulan'=>$bulan]);
    }
    public function cekTransaksi(Request $request){
        $data = new Pembayaran();
        $data = $data->create([
            'id_petugas' => session('dataPetugas')->id_petugas,
            'nisn' => $request->nisn,
            'tgl_bayar' => date('Y/m/d'),
            'bulan_dibayar' => $request->bulan_dibayar,
            'tahun_dibayar' => $request->tahun_dibayar,
            'id_spp' => $request->id_spp,
            'jumlah_bayar' => $request->jumlah_bayar
        ]);
        return back()->with('pesan','Transaksi berhasil ditambahkan');
    }
    public function riwayat(){
        $data = new Siswa();
        $data = $data->with(['pembayaran','kelas'])->orderBy('nama','asc')->get();
        return view('spp.riwayat',['dataSiswa' => $data]);
    }
}
