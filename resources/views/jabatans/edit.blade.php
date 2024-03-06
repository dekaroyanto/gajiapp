@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Edit Jabatan
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('jabatans.update', $jabatans->id) }}" method="POST" enctype="multipart/form-data"
                    class="row g-3">
                    @csrf
                    @method('PUT')
                    <div class="form-group col-md-12">
                        <label class="font-weight-bold">Jabatan</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="jabatan"
                            value="{{ old('jabatan', $jabatans->jabatan) }}" placeholder="Masukkan Jabatan">

                        <!-- error message untuk name -->
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Gaji Pokok</label>
                        <input type="number" class="form-control @error('gajipokok') is-invalid @enderror" name="gajipokok"
                            value="{{ old('gajipokok', $jabatans->gajipokok) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk gajipokok -->
                        @error('gajipokok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Gaji Jabatan</label>
                        <input type="number" class="form-control @error('gjabatan') is-invalid @enderror" name="gjabatan"
                            value="{{ old('gjabatan', $jabatans->gjabatan) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk gjabatan -->
                        @error('gjabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Operasional</label>
                        <input type="number" class="form-control @error('oprs') is-invalid @enderror" name="oprs"
                            value="{{ old('oprs', $jabatans->oprs) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk oprs -->
                        @error('oprs')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Service</label>
                        <input type="number" class="form-control @error('service') is-invalid @enderror" name="service"
                            value="{{ old('service', $jabatans->service) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk service -->
                        @error('service')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">HP</label>
                        <input type="number" class="form-control @error('hp') is-invalid @enderror" name="hp"
                            value="{{ old('hp', $jabatans->hp) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk hp -->
                        @error('hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="font-weight-bold">Insentif Kehadiran</label>
                        <input type="number" class="form-control @error('inshadir') is-invalid @enderror" name="inshadir"
                            value="{{ old('inshadir', $jabatans->inshadir) }}" placeholder="Masukkan Nama Lengkap">

                        <!-- error message untuk inshadir -->
                        @error('inshadir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        {{-- <button type="reset" class="btn btn-md btn-warning">RESET</button> --}}
                        <a href="{{ URL::previous() }}" class="btn btn-md btn-danger">CANCEL</a>
                    </div>

                </form>
            </div>
        </div>

    </section>
@endsection
