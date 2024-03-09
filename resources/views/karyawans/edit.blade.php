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
                        <label class="font-weight-bold">Departmen</label>
                        <input type="text" class="form-control @error('departmen') is-invalid @enderror" name="departmen"
                            value="{{ old('departmen', $karyawans->departmen) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk departmen -->
                        @error('departmen')
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
                        <label class="font-weight-bold">Tanggal Masuk</label>
                        <input type="date" class="form-control @error('masuk') is-invalid @enderror" name="masuk"
                            value="{{ old('masuk', $karyawans->masuk) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk masuk -->
                        @error('masuk')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                    <a href="{{ URL::previous() }}" class="btn btn-md btn-danger">CANCEL</a>

                </form>
            </div>
        </div>

    </section>
@endsection
