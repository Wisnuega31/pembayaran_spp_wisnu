@extends('../layout')
@section('content')
    <div class="card">
        <h5 class="card-header">Form Transaksi</h5>
        <div class="card-body">
            <form action="{{ url('transaksi') }}" method="post">
                @csrf
                @if (session('pesan'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('pesan')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="mb-3 row">
                    <label for="nisn" class="col-sm-2 col-form-label">NISN</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="nisn" name="nisn">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="bulan_dibayar" class="col-sm-2 col-form-label">Bulan Bayar</label>
                    <div class="col-sm-10">
                        <select class="form-select my-2" name="bulan_dibayar">
                            @foreach ($bulan as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tahun_dibayar" class="col-sm-2 col-form-label">Tahun Bayar</label>
                    <div class="col-sm-10">
                        <select class="form-select my-2" name="tahun_dibayar">
                            @for ($i = date('Y') - 10; $i <= date('Y'); $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="id_spp" class="col-sm-2 col-form-label">Tahun/Nominal Spp</label>
                    <div class="col-sm-10">
                        <select class="form-select my-2" name="id_spp">
                            @foreach ($dataSpp as $item)
                                <option value="{{ $item->id_spp }}">{{ $item->tahun }}/{{ $item->nominal }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jumlah_bayar" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar">
                    </div>
                </div>
                <div class="d-grid gap-2 col-11 mx-auto">
                    <button class="btn btn-primary" type="submit">Button</button>
                </div>
            </form>
        </div>
    </div>
@endsection
