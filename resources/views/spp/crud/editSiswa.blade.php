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
                    @foreach ($dataKelas as $item)
                    <option value="{{$item->id_kelas}}" @if ($item->id_kelas == $dataSiswa->kelas->id_kelas)
                        selected
                    @endif>{{$item->nama_kelas}} {{$item->kompetensi_keahlian}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="no_telp" class="form-label">No Telpon</label>
                <input type="text" class="form-control" name="no_telp" id="no_telp" value="{{$dataSiswa->no_telp}}">
            </div>
            <div class="mb-3">
                <label for="id_spp" class="form-label">Tahun/Nominal Spp</label>
                <select class="form-select my-2" name="id_spp">
                    @foreach ($dataSpp as $item)
                    <option value="{{$item->id_spp}}" @if ($item->id_spp == $dataSiswa->spp->id_spp)
                        selected
                    @endif>{{$item->tahun}}/{{$item->nominal}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">alamat</label>
                <textarea type="text" class="form-control" name="alamat" id="alamat">{{$dataSiswa->alamat}}</textarea>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
