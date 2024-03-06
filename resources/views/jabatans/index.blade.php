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
                                <td>Rp {{ number_format($jabatan->gajipokok, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($jabatan->gjabatan, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($jabatan->oprs, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($jabatan->service, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($jabatan->hp, 0, ',', '.') }}</td>
                                <td>Rp {{ number_format($jabatan->inshadir, 0, ',', '.') }}</td>
                                <td>
                                    <a href="{{ route('jabatans.show', $jabatan->id) }}" class="btn btn-info"><i
                                            class="bi bi-eye-fill"></i>
                                    </a>

                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalUbah{{ $jabatan->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <a href="{{ route('jabatans.destroy', $jabatan->id) }}" class="btn btn-danger delete"
                                        id="delete" data-id="{{ $jabatan->id }}" data-nama="{{ $jabatan->nama }}"><i
                                            class="bi bi-trash3"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
