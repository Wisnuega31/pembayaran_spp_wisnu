@extends('../Layout')
@section('content')
    <div class="card">

        <div class="card-body">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Data Spp</h1>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Tambah Spp<i class="bi bi-plus-circle-fill mx-1"></i>
                </button>

                <!-- Modal Tambah-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Spp</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="{{ url('spp') }}" method="post">
                                @csrf
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="tahun" class="form-label">Tahun</label>
                                        <select class="form-select my-2" name="tahun">
                                            @for ($i = date('Y')-10; $i <= date('Y'); $i++)
                                            <option value="{{$i}}">{{$i}}</option>
                                            @endfor
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nominal" class="form-label">Nominal</label>
                                        <input type="number" class="form-control" name="nominal" id="nominal">
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
                            <th>Id Spp</th>
                            <th>Tahun</th>
                            <th>Nominal</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($dataSpp as $item)
                            <tr>
                                <td>{{ $item->id_spp }}</td>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->nominal }}</td>

                                <td> <a href="{{ url('spp/edit/' . $item->id_spp) }}"
                                        class="btn btn-warning btn-circle btn-sm">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <a href="{{ url('spp/hapus/' . $item->id_spp) }}"
                                        class="btn btn-danger btn-circle btn-sm">
                                        <i class="bi bi-trash-fill"></i>
                                </td>
                            </tr>
                        @endforeach

                        {{-- modal edit --}}

                    </tbody>
                </table>
            </div>


        </div>
    </div>
@endsection
