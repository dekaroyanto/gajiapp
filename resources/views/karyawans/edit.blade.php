@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Edit Karyawan
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('karyawans.update', $karyawans->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label class="font-weight-bold">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name', $karyawans->name) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk name -->
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">No Rekening</label>
                        <input type="number" class="form-control @error('norek') is-invalid @enderror" name="norek"
                            value="{{ old('norek', $karyawans->norek) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk norek -->
                        @error('norek')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="font-weight-bold">Lama Kerja</label>
                        <input type="number" step="0.01" class="form-control @error('lamakerja') is-invalid @enderror"
                            name="lamakerja" value="{{ old('lamakerja', $karyawans->lamakerja) }}"
                            placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk lamakerja -->
                        @error('lamakerja')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                    <button type="reset" class="btn btn-md btn-warning">RESET</button>

                </form>
            </div>
        </div>

    </section>
@endsection
