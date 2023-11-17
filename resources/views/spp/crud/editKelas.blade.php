@extends('../../Layout')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kelas</h1>
    </div>
    <form action="" method="post">
        @csrf
        <div class="modal-body">
            <select class="form-select my-2" name="nama_kelas">
                <option value="X" @if ($dataKelas->nama_kelas == 'X')
                    selected
                @endif>X</option>
                <option value="XI" @if ($dataKelas->nama_kelas == 'XI')
                    selected
                @endif>XI</option>
                <option value="XII" @if ($dataKelas->nama_kelas == 'XII')
                    selected
                @endif>XII</option>
            </select>
            <select class="form-select my-2" name="kompetensi_keahlian">
                <option value="RPL" @if ($dataKelas->kompetensi_keahlian == 'RPL')
                    selected
                @endif>RPL</option>
                <option value="TKRO" @if ($dataKelas->kompetensi_keahlian == 'TKRO')
                    selected
                @endif>TKRO</option>
                <option value="TP" @if ($dataKelas->kompetensi_keahlian == 'TP')
                    selected
                @endif>TP</option>
            </select>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
