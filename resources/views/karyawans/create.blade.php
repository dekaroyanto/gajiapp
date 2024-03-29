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
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Departmen</label>
                        <input type="text" class="form-control @error('departmen') is-invalid @enderror" name="departmen"
                            value="{{ old('departmen') }}" placeholder="Masukkan Departmen">
                        @error('departmen')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jabatan" class="form-label">Jabatan</label>
                        <select class="choices form-select @error('jabatan_id') is-invalid @enderror" name="jabatan_id"
                            id="jabatan">
                            @foreach ($jabatans as $jabatan)
                                <option value="{{ $jabatan->id }}">{{ $jabatan->jabatan }}</option>
                            @endforeach
                        </select>
                        @error('jabatan_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">No Rekening</label>
                        <input type="text" class="form-control @error('norek') is-invalid @enderror" name="norek"
                            value="{{ old('norek') }}" placeholder="Masukkan No Rekening">
                        @error('norek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
                        <input type="date" step="0.01" class="form-control mb-3 @error('masuk') is-invalid @enderror"
                            name="masuk" value="{{ old('masuk') }}" placeholder="Masukkan Tanggal Masuk">
                        @error('masuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Foto</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                        @error('image')
                            <div class="invalid-feedback">
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
