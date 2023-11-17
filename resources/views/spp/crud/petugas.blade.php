@extends('../Layout')
@section('content')
    <div class="card">

        <div class="card-body">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Petugas</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Petugas<i class="bi bi-plus-circle-fill mx-1"></i>
                </button>

                <!-- Modal Tambah-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Petugas</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ url('petugas') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nama_petugas" class="form-label">Nama Petugas</label>
                                        <input type="text" class="form-control" name="nama_petugas" id="nama_petugas">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" id="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" id="password">
                                    </div>
                                    <select class="form-select my-2" name="level">
                                        <option value="admin">Admin</option>
                                        <option value="petugas">Petugas</option>
                                    </select>
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
                            <th>Id Petugas</th>
                            <th>Nama Petugas</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($dataPetugas as $item)    
                        <tr>
                            <td>{{$item->id_petugas}}</td>
                            <td>{{$item->nama_petugas}}</td>
                            <td>{{$item->username}}</td>
                            <td>{{$item->level}}</td>

                            <td> <a href="{{url('petugas/edit/'.$item->id_petugas)}}" class="btn btn-warning btn-circle btn-sm">
                                    <i class="bi bi-pencil-fill"></i>
                                </a>
                                <a href="{{url('petugas/hapus/'.$item->id_petugas)}}" class="btn btn-danger btn-circle btn-sm">
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
