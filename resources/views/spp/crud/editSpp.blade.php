@extends('../../Layout')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kelas</h1>
    </div>
    <form action="" method="post">
        @csrf
        <div class="modal-body">
            <select class="form-select my-2" name="tahun">
                <option value="2020" @if ($dataSpp->tahun == '2020')
                    selected
                @endif>2020</option>
                <option value="2021" @if ($dataSpp->tahun == '2021')
                    selected
                @endif>2021</option>
                <option value="2022" @if ($dataSpp->tahun == '2022')
                    selected
                @endif>2022</option>
                <option value="2023" @if ($dataSpp->tahun == '2023')
                    selected
                @endif>2023</option>
                <option value="2024" @if ($dataSpp->tahun == '2024')
                    selected
                @endif>2024</option>
                <option value="2025" @if ($dataSpp->tahun == '2025')
                    selected
                @endif>2025</option>
                <option value="2026" @if ($dataSpp->tahun == '2026')
                    selected
                @endif>2026</option>
            </select>
            <div class="mb-3">
                <label for="nominal" class="form-label">Nominal</label>
                <input type="number" class="form-control" name="nominal" id="nominal" value="{{$dataSpp->nominal}}">
              </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection
