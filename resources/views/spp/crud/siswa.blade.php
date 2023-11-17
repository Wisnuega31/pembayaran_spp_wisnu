@extends('../Layout')
@section('content')
    <div class="card">

        <div class="card-body">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Siswa<i class="bi bi-plus-circle-fill mx-1"></i>
                </button>

                <!-- Modal Tambah-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ url('siswa') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nisn" class="form-label">Nisn</label>
                                        <input type="text" class="form-control" name="nisn" id="nisn">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nis" class="form-label">Nis</label>
                                        <input type="text" class="form-control" name="nis" id="nis">
                                    </div>
                                    <div class="mb-3">
                                        <label for="nama" class="form-label">nama</label>
                                        <input type="text" class="form-control" name="nama" id="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_kelas" class="form-label">Kelas</label>
                                        <select class="form-select my-2" name="id_kelas">
                                            @foreach ($dataKelas as $item)
                                            <option value="{{$item->id_kelas}}">{{$item->nama_kelas}} {{$item->kompetensi_keahlian}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="no_telp" class="form-label">No Telpon</label>
                                        <input type="text" class="form-control" name="no_telp" id="no_telp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="id_spp" class="form-label">Tahun/Nominal Spp</label>
                                        <select class="form-select my-2" name="id_spp">
                                            @foreach ($dataSpp as $item)
                                            <option value="{{$item->id_spp}}">{{$item->tahun}}/{{$item->nominal}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="alamat" class="form-label">alamat</label>
                                        <textarea type="text" class="form-control" name="alamat" id="alamat"></textarea>
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
                            <th>Nisn</th>
                            <th>Nis</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Alamat</th>
                            <th>No Telpon</th>
                            <th>Spp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($dataSiswa as $item)    
                        <tr>
                            <td>{{$item->nisn}}</td>
                            <td>{{$item->nis}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->kelas->nama_kelas}} {{$item->kelas->kompetensi_keahlian}}</td>
                            <td>{{$item->alamat}}</td>
                            <td>{{$item->no_telp}}</td>
                            <td>{{$item->id_spp}}</td>

                            <td> <a href="{{url('siswa/edit/'.$item->nisn)}}" class="btn btn-warning btn-circle btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <a href="{{url('siswa/hapus/'.$item->nisn)}}" class="btn btn-danger btn-circle btn-sm">
                                    <i class="bi bi-trash-fill"></i>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
