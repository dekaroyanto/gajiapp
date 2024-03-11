<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative border: 1px solid #543535;
        }
    </style>
    <title>CETAK REKAP GAJI</title>
</head>

<body>
    <div class="form-group">
        <table class="form-group">
            <p align="center"><b>REKAP GAJI</b></p>
            <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
                <tr>
                    <th>NO SLIP</th>
                    <th>Nama Karyawan</th>
                    <th>Jabatan</th>
                    <th>Gaji Pokok</th>
                    <th>Jabatan</th>
                    <th>Operasional</th>
                    <th>Service</th>
                    <th>HP</th>
                    <th>Total Insentif Hadir</th>
                    <th>Total</th>
                    <th>Angsuran</th>
                    <th>BPJS</th>
                    <th>Kasbon</th>
                    <th>Gaji Akhir</th>
                </tr>
                @php
                    $no = 1;
                @endphp
                @foreach ($totalgajis as $lur)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $lur->karyawan->name }}</td>
                        <td>{{ $lur->karyawan->jabatan->jabatan }}</td>
                        <td>{{ number_format($lur->karyawan->jabatan->gajipokok, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->karyawan->jabatan->gjabatan, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->karyawan->jabatan->oprs, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->karyawan->jabatan->service, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->karyawan->jabatan->hp, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->total_inshadir, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->totalgaji, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->angsuran, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->bpjs, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->kasbon, 0, ',', '.') }}</td>
                        <td>{{ number_format($lur->gajiakhir, 0, ',', '.') }}</td>
                    </tr>
                @endforeach

            </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
