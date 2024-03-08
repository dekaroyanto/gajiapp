@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Daftar Gaji Karyawan
                </h5>
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead class="text-center">
                        <tr>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            <th>Angsuran</th>
                            <th>gajipokok</th>
                            <th>gajipokok - angsuran</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($totalgajis as $lur)
                            <tr>
                                <td>{{ $lur->karyawan->name }}</td>
                                <td>{{ $lur->karyawan->jabatan->jabatan }}</td>
                                <td>{{ $lur->angsuran }}</td>
                                <td>{{ $lur->karyawan->jabatan->gajipokok }}</td>
                                <td>{{ $lur->karyawan->jabatan->gajipokok - $lur->angsuran }}</td>
                                <td>
                                    <form action="{{ route('karyawans.destroy', $lur->id) }}" method="POST">
                                        <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                            data-bs-target="#exampleModalDetail{{ $lur->id }}">
                                            <i class="bi bi-eye-fill"></i>
                                        </button>

                                        <a href="{{ route('karyawans.edit', $lur->id) }}" class="btn btn-warning"><i
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
@endsection
