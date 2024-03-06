@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Tambah Karyawan
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('karyawans.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" placeholder="Masukkan Nama Lengkap">
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Rekening</label>
                        <input type="text" class="form-control @error('norek') is-invalid @enderror" name="norek"
                            value="{{ old('norek') }}" placeholder="Masukkan No Rekening">
                        @error('norek')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Lama Kerja</label>
                        <input type="number" step="0.01" class="form-control @error('lamakerja') is-invalid @enderror"
                            name="lamakerja" value="{{ old('lamakerja') }}" placeholder="Masukkan No Rekening">
                        @error('lamakerja')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                        @error('image')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                    </div> --}}
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-danger">RESET</button>
                </form>
            </div>
        </div>

    </section>
@endsection
