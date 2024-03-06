@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Detail Karyawan
                </h5>
            </div>
            <div class="card-body">
                <div class="mb-3">

                    <img src="{{ asset('storage/karyawans/' . $karyawans->image) }}" class="img-thumbnail">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" value="{{ $karyawans->name }}">
                </div>
                </form>
            </div>
        </div>

    </section>
@endsection
