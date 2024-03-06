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
                            {{-- <th>Image</th> --}}
                            <th>Name</th>
                            <th>No Rekening</th>
                            <th>Lama Kerja</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($karyawans as $karyawan)
                            <tr>
                                {{-- <td class="text-center">
                                    <img src="{{ asset('/storage/karyawans/' . $karyawan->image) }}" class="rounded"
                                        style="width: 150px">
                                </td> --}}
                                <td>{{ $karyawan->name }}</td>
                                <td>{{ $karyawan->norek }}</td>
                                <td>{{ $karyawan->lamakerja }}</td>
                                <td>
                                <td>
                                    <a href="{{ route('karyawans.show', $karyawan->id) }}" class="btn btn-info"><i
                                            class="bi bi-eye-fill"></i></a>


                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#exampleModalUbah{{ $karyawan->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <a href="{{ route('karyawans.destroy', $karyawan->id) }}" class="btn btn-danger delete"
                                        id="delete" data-id="{{ $karyawan->id }}" data-nama="{{ $karyawan->nama }}"><i
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
