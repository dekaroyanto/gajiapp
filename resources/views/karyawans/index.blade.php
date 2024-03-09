@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Daftar Karyawan
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead class="text-center">
                        <tr>
                            <th>Name</th>
                            <th>Departmen</th>
                            <th>Jabatan</th>
                            <th>No Rekening</th>
                            <th>Tanggal Masuk</th>
                            <th>Lama Kerja</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawans as $karyawan)
                            <tr>
                                <td>{{ $karyawan->name }}</td>
                                <td>{{ $karyawan->departmen }}</td>
                                <td>{{ $karyawan->jabatan->jabatan }}</td>
                                <td>{{ $karyawan->norek }}</td>
                                <td>{{ $karyawan->masuk }}</td>
                                <td>
                                    {{-- Calculate work duration in years and round to two decimal places --}}
                                    {{ round(Carbon\Carbon::parse($karyawan->masuk)->floatDiffInYears(Carbon\Carbon::now()), 2) }}
                                </td>
                                </td>
                                <td>
                                    <form action="{{ route('karyawans.destroy', $karyawan->id) }}" method="POST">
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalDetail{{ $karyawan->id }}">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>

                                        <a href="{{ route('karyawans.edit', $karyawan->id) }}" class="btn btn-warning"><i
                                                class="bi bi-pencil-square"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger delete-kontak"><i
                                                class="bi bi-trash-fill"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    <!-- Modal -->
    @foreach ($karyawans as $karyawan)
        <div class="modal fade" id="exampleModalDetail{{ $karyawan->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Karyawan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                                <input disabled type="text" class="form-control" name="name"
                                    value="{{ $karyawan->name }}">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">No Rekening</label>
                                <input disabled type="text" class="form-control" name="norek"
                                    value="{{ $karyawan->norek }}">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Lama Kerja</label>
                                <input disabled type="text" class="form-control" name="lamakerja"
                                    value="{{ $karyawan->lamakerja }}">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
