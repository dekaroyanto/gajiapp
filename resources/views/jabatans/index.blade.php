@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Daftar Jabatan
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-striped text-sm" id="table1">
                    <thead class="text-center">
                        <tr>
                            <th>Jabatan</th>
                            <th>Gaji Pokok</th>
                            <th>Gaji Jabatan</th>
                            <th>Operasional</th>
                            <th>Service</th>
                            <th>HP</th>
                            <th>Insentif Kehadiran</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm">
                        @foreach ($jabatans as $jabatan)
                            <tr>
                                <td>{{ $jabatan->jabatan }}</td>
                                <td> {{ number_format($jabatan->gajipokok, 0, ',', '.') }}</td>
                                <td> {{ number_format($jabatan->gjabatan, 0, ',', '.') }}</td>
                                <td> {{ number_format($jabatan->oprs, 0, ',', '.') }}</td>
                                <td> {{ number_format($jabatan->service, 0, ',', '.') }}</td>
                                <td> {{ number_format($jabatan->hp, 0, ',', '.') }}</td>
                                <td> {{ number_format($jabatan->inshadir, 0, ',', '.') }}</td>
                                <td>
                                    <form action="{{ route('jabatans.destroy', $jabatan->id) }}" method="POST">
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalDetail{{ $jabatan->id }}">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>

                                        <a href="{{ route('jabatans.edit', $jabatan->id) }}" class="btn btn-warning"><i
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

    <!-- Modal Detail -->
    @foreach ($jabatans as $jabatan)
        <div class="modal fade" id="exampleModalDetail{{ $jabatan->id }}" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Jabatan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                                <input disabled type="text" class="form-control" name="name"
                                    value="{{ $jabatan->jabatan }}">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Gaji Pokok</label>
                                <input disabled type="text" class="form-control" name="norek"
                                    value="{{ $jabatan->gajipokok }}">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Gaji Jabatan</label>
                                <input disabled type="text" class="form-control" name="lamakerja"
                                    value="{{ $jabatan->gjabatan }}">
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
    {{-- End Modal Deetail --}}
@endsection
