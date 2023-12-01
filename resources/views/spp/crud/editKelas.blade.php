@extends('../../Layout')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kelas</h1>
    </div>
    <form action="" method="post">
        @csrf
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama_kelas" class="form-label">Nama Kelas</label>
                <div class="row">
                    <div class="col">
                        <select class="form-select my-2" name="nama_kelas">
                            <option value="X" @if ($nama_kelas == 'X')
                                selected
                            @endif>X</option>
                            <option value="XI" @if ($nama_kelas == 'XI')
                                selected
                            @endif>XI</option>
                            <option value="XII" @if ($nama_kelas == 'XII')
                                selected
                            @endif>XII</option>
                        </select>
                        </div>
                        <div class="col">
                        <select class="form-select my-2" name="jurusan">
                            <option value="RPL" @if ($jurusan == 'RPL')
                                selected
                            @endif>RPL</option>
                            <option value="TKRO" @if ($jurusan == 'TKRO')
                                selected
                            @endif>TKRO</option>
                            <option value="TP" @if ($jurusan == 'TP')
                                selected
                            @endif>TP</option>
                            <option value="AK" @if ($jurusan == 'AK')
                                selected
                            @endif>AK</option>
                        </select>
                    </div>
                </div>
            </div>
            <select class="form-select my-2" name="kompetensi_keahlian">
                <option value="Rekayasa Perangkat Lunak" @if ($kompetensi_keahlian == 'Rekayasa Perangkat Lunak')
                    selected
                @endif>Rekayasa Perangkat Lunak</option>
                <option value="Teknik Kendaraan Ringan dan Otomotif" @if ($kompetensi_keahlian == 'Teknik Kendaraan Ringan dan Otomotif')
                    selected
                @endif>Teknik Kendaraan Ringan dan Otomotif</option>
                <option value="Teknik Permesinan" @if ($kompetensi_keahlian == 'Teknik Permesinan')
                    selected
                @endif>Teknik Permesinan</option>
                <option value="Akutansi" @if ($kompetensi_keahlian == 'Akutansi')
                    selected
                @endif>Akutansi</option>
            </select>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
