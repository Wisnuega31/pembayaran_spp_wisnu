@extends('../../Layout')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Siswa</h1>
    </div>
    <form action="" method="post">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="nisn" class="form-label">Nisn</label>
                <input type="text" class="form-control" name="nisn" id="nisn" value="{{$dataSiswa->nisn}}">
            </div>
            <div class="mb-3">
                <label for="nis" class="form-label">nis</label>
                <input type="text" class="form-control" name="nis" id="nis" value="{{$dataSiswa->nis}}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="nama" class="form-control" name="nama" id="nama" value="{{$dataSiswa->nama}}">
            </div>
            <div class="mb-3">
                <label for="id_kelas" class="form-label">Kelas</label>
                <select class="form-select my-2" name="id_kelas">
                    <option value="admin" @if ($dataKelas->level == 'admin')
                        selected
                    @endif>Admin</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
