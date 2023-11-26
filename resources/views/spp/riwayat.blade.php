@extends('../Layout')
@section('content')
    <div class="card">
        <h5 class="card-header">Riwayat Pembayaran</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nis</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Jumlah Bayar</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($dataSiswa as $item)
                    <tr>

                        <th scope="row">{{$item->nisn}}</th>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->kelas->nama_kelas}}</td>
                        <td>{{$item->jumlah_bayar}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
