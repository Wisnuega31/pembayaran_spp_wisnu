@extends('../Layout')
@section('content')
<div class="card">

    <div class="card-body">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Data kelas</h1>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Kelas<i class="bi bi-plus-circle-fill mx-1"></i>
            </button>

            <!-- Modal Tambah-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Kelas</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ url('kelas') }}" method="post">
                            @csrf
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="nama_kelas" class="form-label">Nama Kelas</label>
                                    <div class="row">
                                        <div class="col">
                                                <select class="form-select my-2" name="nama_kelas">
                                                    <option value="X">X</option>
                                                    <option value="XI">XI</option>
                                                    <option value="XII">XII</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                            <select class="form-select my-2" name="jurusan">
                                                <option value="RPL">RPL</option>
                                                <option value="TKRO">TKRO</option>
                                                <option value="TP">TP</option>
                                                <option value="AK">AK</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="kompetensi_keahlian" class="form-label">Kompetensi Keahlian</label>
                                    <select class="form-select my-2" name="kompetensi_keahlian">
                                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                        <option value="Teknik Kendaraan Ringan dan Otomotif">Teknik Kendaraan Ringan dan Otomotif</option>
                                        <option value="Teknik Permesinan">Teknik Permesinan</option>
                                        <option value="Akutansi">Akutansi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Kompetensi Keahlian</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($dataKelas as $item)
                    <tr>
                        <td>{{$item->id_kelas}}</td>
                        <td>{{$item->nama_kelas}}</td>
                        <td>{{$item->kompetensi_keahlian}}</td>

                        <td> <a href="{{url('kelas/edit/'.$item->id_kelas)}}" class="btn btn-warning btn-circle btn-sm">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <a href="{{url('kelas/hapus/'.$item->id_kelas)}}" class="btn btn-danger btn-circle btn-sm">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection