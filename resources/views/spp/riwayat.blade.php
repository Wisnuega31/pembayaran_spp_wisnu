@extends('../Layout')
@section('content')
    <div class="card">
        <h5 class="card-header">Riwayat Pembayaran</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nisn</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Jumlah Bayar</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($dataPembayaran as $item)
                    <tr>
                        <th scope="row">{{$item->nisn}}</th>
                        <td>{{$item->siswa->nama}}</td>
                        <td>{{$item->siswa->kelas->nama_kelas}}</td>
                        <td>{{$item->bulan_dibayar}}</td>
                        <td>{{$item->jumlah_bayar}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
