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
                <form action="{{ route('gajis.store') }}" method="POST" enctype="multipart/form-data" class="row g-3">
                    @csrf

                    <div class="mb-3 col-md-12">
                        <label for="karyawan" class="form-label">Nama Karyawan</label>
                        <select class="choices form-select @error('karyawan_id') is-invalid @enderror" name="karyawan_id"
                            id="karyawan">
                            @foreach ($karyawans as $karyawan)
                                <option value="{{ $karyawan->id }}">{{ $karyawan->name }} -
                                    {{ $karyawan->jabatan->jabatan }}
                                </option>
                            @endforeach
                        </select>
                        @error('karyawan_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="col-md-6 col-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label ">Tanggal Periode Gaji
                            </label>
                            <input type="date" name="tanggal"
                                class="form-control mb-3 @error('tanggal') is-invalid @enderror "
                                placeholder="Masukan Tanggal" />
                            @error('tanggal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>



                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Angsuran</label>
                        <input type="number" class="form-control @error('angsuran') is-invalid @enderror" name="angsuran"
                            value="{{ old('angsuran') }}" placeholder="Masukkan Jumlah angsuran">
                        @error('angsuran')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">BPJS</label>
                        <input type="number" class="form-control @error('bpjs') is-invalid @enderror" name="bpjs"
                            value="{{ old('bpjs') }}" placeholder="Masukkan Jumlah bpjs">
                        @error('bpjs')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Kasbon</label>
                        <input type="number" class="form-control @error('kasbon') is-invalid @enderror" name="kasbon"
                            value="{{ old('kasbon') }}" placeholder="Masukkan Jumlah kasbon">
                        @error('kasbon')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Hadir</label>
                        <input type="number" class="form-control @error('hadir') is-invalid @enderror" name="hadir"
                            value="{{ old('hadir') }}" placeholder="Masukkan Jumlah hadir">
                        @error('hadir')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Izin</label>
                        <input type="number" class="form-control @error('izin') is-invalid @enderror" name="izin"
                            value="{{ old('izin') }}" placeholder="Masukkan Jumlah izin">
                        @error('izin')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Sakit</label>
                        <input type="number" class="form-control @error('sakit') is-invalid @enderror" name="sakit"
                            value="{{ old('sakit') }}" placeholder="Masukkan Jumlah Sakit">
                        @error('sakit')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Telat</label>
                        <input type="number" class="form-control @error('telat') is-invalid @enderror" name="telat"
                            value="{{ old('telat') }}" placeholder="Masukkan Jumlah telat">
                        @error('telat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">Alfa</label>
                        <input type="number" class="form-control @error('alfa') is-invalid @enderror" name="alfa"
                            value="{{ old('alfa') }}" placeholder="Masukkan Jumlah alfa">
                        @error('alfa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 col-md-6">
                        <label for="exampleInputEmail1" class="form-label">THR/BONUS</label>
                        <input type="number" class="form-control @error('thr') is-invalid @enderror" name="thr"
                            value="{{ old('thr') }}" placeholder="Masukkan Jumlah thr">
                        @error('thr')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                    <button type="reset" class="btn btn-md btn-danger">RESET</button>
                </form>
            </div>
        </div>

    </section>
@endsection
