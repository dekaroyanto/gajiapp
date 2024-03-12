@extends('layouts.default_template')

@section('content')
    <section class="section">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">
                    Daftar Gaji Karyawan
                    <a href="{{ route('cetak-gaji', ['month' => request('month'), 'year' => request('year')]) }}"
                        target="_blank" class="btn btn-primary">Cetak Data <i
                            class="bi bi-file-earmark-arrow-down-fill"></i></a>

                </h5>

            </div>
            {{-- <form method="GET" action="{{ route('gajis.index') }}">
                <div class="row mx-2">
                    <div class="col-12 col-md-4">
                        <label for="start_date">Tanggal Awal:</label>
                        <input class="form-control" type="date" id="start_date" name="start_date"
                            value="{{ request('start_date') }}">
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="end_date">Tanggal Akhir:</label>
                        <input class="form-control" type="date" id="end_date" name="end_date"
                            value="{{ request('end_date') }}">
                    </div>
                    <div class="col-12 col-md-4 mt-4 mb-4">
                        <button type="submit" class="btn btn-secondary">Filter</button>
                        <a href="{{ route('gajis.index') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
            </form> --}}

            <form method="GET" action="{{ route('gajis.index') }}">
                <div class="row mx-2">
                    <div class="col-12 col-md-4">
                        <label for="month">Bulan:</label>
                        <select class="form-control" id="month" name="month">
                            <option value="">Pilih Bulan</option>
                            @for ($i = 1; $i <= 12; $i++)
                                <option value="{{ $i }}" {{ request('month') == $i ? 'selected' : '' }}>
                                    {{ date('F', mktime(0, 0, 0, $i, 10)) }}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-12 col-md-4">
                        <label for="year">Tahun:</label>
                        <select class="form-control" id="year" name="year">
                            <option value="">Pilih Tahun</option>
                            @for ($i = date('Y'); $i >= date('Y') - 10; $i--)
                                <option value="{{ $i }}" {{ request('year') == $i ? 'selected' : '' }}>
                                    {{ $i }}</option>
                            @endfor
                        </select>
                    </div>
                    <div class="col-12 col-md-4 mt-4 mb-4">
                        <button type="submit" class="btn btn-secondary">Filter</button>
                        <a href="{{ route('gajis.index') }}" class="btn btn-secondary">Reset</a>
                    </div>
                </div>
            </form>


            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead class="text-center">
                        <tr>
                            <th>Tanggal Input</th>
                            <th>NAMA</th>
                            <th>NOMOR REKENING</th>
                            <th>JABATAN</th>
                            <th>TANGGAL MASUK</th>
                            <th>H</th>
                            <th>I</th>
                            <th>S</th>
                            <th>T</th>
                            <th>A</th>
                            <th>INSENTIF KEHADIRAN</th>
                            <th>GAJI POKOK</th>
                            <th>JABATAN</th>
                            <th>OPERASIONAL</th>
                            <th>SERVICE</th>
                            <th>HP</th>
                            <th>TOTAL INSENTIF KEHADIRAN</th>
                            <th>THR/BONUS</th>
                            <th>TOTAL</th>
                            <th>ANGSURAN</th>
                            <th>BPJS</th>
                            <th>KASBON</th>
                            <th>GAJI AKHIR</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($totalgajis as $lur)
                            <tr>
                                <td>{{ $lur->tanggal }}</td>
                                <td>{{ $lur->karyawan->name }}</td>
                                <td>{{ $lur->karyawan->norek }}</td>
                                <td>{{ $lur->karyawan->jabatan->jabatan }}</td>
                                <td>{{ $lur->karyawan->masuk }}</td>
                                <td>{{ $lur->hadir }}</td>
                                <td>{{ $lur->izin }}</td>
                                <td>{{ $lur->sakit }}</td>
                                <td>{{ $lur->telat }}</td>
                                <td>{{ $lur->alfa }}</td>
                                <td>{{ number_format($lur->karyawan->jabatan->inshadir, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->karyawan->jabatan->gajipokok, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->karyawan->jabatan->gjabatan, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->karyawan->jabatan->oprs, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->karyawan->jabatan->service, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->karyawan->jabatan->hp, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->total_inshadir, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->thr, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->totalgaji, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->angsuran, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->bpjs, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->kasbon, 0, ',', '.') }}</td>
                                <td>{{ number_format($lur->gajiakhir, 0, ',', '.') }}</td>
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
