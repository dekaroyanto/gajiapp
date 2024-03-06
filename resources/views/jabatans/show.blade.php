@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Detail Jabatan
                </h5>
            </div>
            <div class="card-body">


                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $jabatans->jabatan }}">
                </div>
                </form>
            </div>
        </div>

    </section>
@endsection
