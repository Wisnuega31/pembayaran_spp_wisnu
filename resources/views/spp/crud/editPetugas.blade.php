@extends('../../Layout')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kelas</h1>
    </div>
    <form action="" method="post">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama_petugas" class="form-label">Nama Petugas</label>
                <input type="text" class="form-control" name="nama_petugas" id="nama_petugas" value="{{$dataPetugas->nama_petugas}}">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="username" value="{{$dataPetugas->username}}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" value="{{$dataPetugas->password}}">
            </div>
            <select class="form-select my-2" name="level">
                <option value="admin" @if ($dataPetugas->level == 'admin')
                    selected
                @endif>Admin</option>
                <option value="petugas" @if ($dataPetugas->level == 'petugas')
                    selected
                @endif>Petugas</option>
            </select>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
