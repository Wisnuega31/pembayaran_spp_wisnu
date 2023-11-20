@extends('../Layout')
@section('content')
    <div class="card">
        <h5 class="card-header">Riwayat Pembayaran</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nisn</th>
                        <th scope="col">Tanggal Bayar</th>
                        <th scope="col">Nominal Spp</th>
                        <th scope="col">Jumlah Bayar</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($dataPembayaran as $item)
                    <tr>
                        <th scope="row">{{$item->nisn}}</th>
                        <td>{{$item->tgl_bayar}}</td>
                        <td>{{$item->id_spp}}</td>
                        <td>{{$item->jumlah_bayar}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
