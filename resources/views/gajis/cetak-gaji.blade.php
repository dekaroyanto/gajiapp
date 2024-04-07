<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border-collapse: collapse;
            /* width: 100%; */
        }

        table.static td,
        table.static th {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            border: none;
            padding: 1px 4px;
        }

        table.static th {
            border: 1px dotted;
            border-left: none;
            border-right: none;

        }

        table.static tr:nth-child(10n+1) {
            border-bottom: 1px dotted;
        }

        table.static tr.total-row td {
            border-top: 1px dotted;
            border-bottom: 1px dotted;
        }
    </style>
    <title>CETAK REKAP GAJI</title>
</head>

<body style="font-size: 8px;">
    <div class="center-container">
        <div class="form-group">
            <table class="form-group center">
                <p>REKAPITULASI RINCIAN GAJI KARYAWAN <br>
                    PT. COLUMBUS UNIT BISNIS CIREBON <br>
                    PERIODE
                    @php
                        $firstDataDate = $totalgajis->first()->tanggal;
                        $formattedDate = date('F Y', strtotime($firstDataDate));
                        echo $formattedDate;
                    @endphp
                </p>
                <table class="static" rules="all" cellpadding='8' style="width: 100%;">
                    <tr align="center">
                        <th>NO <br /> SLIP</th>
                        <th>NIK</th>
                        <th>NAMA</th>
                        <th>STATUS</th>
                        <th>JABATAN</th>
                        <th>GAJI POKOK</th>
                        <th>T.JAB</th>
                        <th>T. OPR</th>
                        <th>T. SVC</th>
                        <th>OTHERS</th>
                        <th>THR / BONUS</th>
                        <th>TOT. UPAH</th>
                        <th>TOT. INS. <br /> KEHADIRAN</th>
                        <th>TOT. GAJI</th>
                        <th>Angsuran</th>
                        <th>BPJS</th>
                        <th>Kasbon</th>
                        <th>Gaji Akhir</th>
                    </tr>
                    @php
                        $no = 1;
                        $totalGajiPokok = 0;
                        $totalTJab = 0;
                        $totalTOpr = 0;
                        $totalTService = 0;
                        $totalOthers = 0;
                        $totalThr = 0;
                        $totalUpah = 0;
                        $totalInsentifHadir = 0;
                        $totalGaji = 0;
                        $totalAngsuran = 0;
                        $totalBPJS = 0;
                        $totalKasbon = 0;
                        $totalGajiAkhir = 0;
                    @endphp
                    @foreach ($totalgajis as $lur)
                        <tr align="left">
                            <td>{{ $no++ }}</td>
                            <td>0</td>
                            <td>{{ $lur->karyawan->name }}</td>
                            <td>0</td>
                            <td>{{ $lur->karyawan->jabatan->jabatan }}</td>
                            <td>Rp. {{ number_format($lur->karyawan->jabatan->gajipokok, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->karyawan->jabatan->gjabatan, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->karyawan->jabatan->oprs, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->karyawan->jabatan->service, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->karyawan->jabatan->hp, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->thr, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->total_upah, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->total_inshadir, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->totalgaji, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->angsuran, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->bpjs, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->kasbon, 0, ',', '.') }}</td>
                            <td>Rp. {{ number_format($lur->gajiakhir, 0, ',', '.') }}</td>
                        </tr>
                        @php
                            $totalGajiPokok += $lur->karyawan->jabatan->gajipokok;
                            $totalTJab += $lur->karyawan->jabatan->gjabatan;
                            $totalTOpr += $lur->karyawan->jabatan->oprs;
                            $totalTService += $lur->karyawan->jabatan->service;
                            $totalOthers += $lur->karyawan->jabatan->hp;
                            $totalThr += $lur->thr;
                            $totalUpah += $lur->total_upah;
                            $totalInsentifHadir += $lur->total_inshadir;
                            $totalGaji += $lur->totalgaji;
                            $totalAngsuran += $lur->angsuran;
                            $totalBPJS += $lur->bpjs;
                            $totalKasbon += $lur->kasbon;
                            $totalGajiAkhir += $lur->gajiakhir;
                        @endphp
                    @endforeach


                    <tr align="left" class="total-row">
                        <td colspan="5" align="center">TOTAL</td>
                        <td>Rp. {{ number_format($totalGajiPokok, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalTJab, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalTOpr, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalTService, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalOthers, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalThr, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalUpah, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalInsentifHadir, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalGaji, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalAngsuran, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalBPJS, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalKasbon, 0, ',', '.') }}</td>
                        <td>Rp. {{ number_format($totalGajiAkhir, 0, ',', '.') }}</td>
                    </tr>
                </table>
        </div>
    </div>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
