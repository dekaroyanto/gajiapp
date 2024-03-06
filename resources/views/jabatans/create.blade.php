@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Tambah Jabatan
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('jabatans.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf
                    <div class="col-md-12">
                        <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan"
                            value="{{ old('jabatan') }}" placeholder="Masukkan Jabatan">
                        @error('jabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Gaji Pokok</label>
                        <input type="number" class="form-control @error('gajipokok') is-invalid @enderror" name="gajipokok"
                            value="{{ old('gajipokok') }}" placeholder="Masukkan Gaji Pokok">
                        @error('gajipokok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Gaji Jabatan</label>
                        <input type="number" step="0.01" class="form-control @error('gjabatan') is-invalid @enderror"
                            name="gjabatan" value="{{ old('gjabatan') }}" placeholder="Masukkan No Rekening">
                        @error('gjabatan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Operasional</label>
                        <input type="number" step="0.01" class="form-control @error('oprs') is-invalid @enderror"
                            name="oprs" value="{{ old('oprs') }}" placeholder="Masukkan No Rekening">
                        @error('oprs')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Service</label>
                        <input type="number" step="0.01" class="form-control @error('service') is-invalid @enderror"
                            name="service" value="{{ old('service') }}" placeholder="Masukkan No Rekening">
                        @error('service')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">HP</label>
                        <input type="number" step="0.01" class="form-control @error('hp') is-invalid @enderror"
                            name="hp" value="{{ old('hp') }}" placeholder="Masukkan No Rekening">
                        @error('hp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Insentif Kehadiran</label>
                        <input type="number" step="0.01" class="form-control @error('inshadir') is-invalid @enderror"
                            name="inshadir" value="{{ old('inshadir') }}" placeholder="Masukkan No Rekening">
                        @error('inshadir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-danger">RESET</button>
                    </div>



                </form>
            </div>
        </div>

    </section>
@endsection
