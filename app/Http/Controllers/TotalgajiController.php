<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Totalgaji;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

use Dompdf\Dompdf;
use Dompdf\Options;

use Mpdf\Mpdf;

class TotalgajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index(Request $request)
    // {
    //     $startDate = $request->input('start_date');
    //     $endDate = $request->input('end_date');

    //     $query = Totalgaji::query();

    //     if ($startDate && $endDate) {
    //         $query->whereBetween('tanggal', [$startDate, $endDate]);
    //     }

    //     $totalgajis = $query->get();

    //     return view('gajis.index', compact('totalgajis'));
    // }

    public function index(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $query = Totalgaji::query();

        if ($month && $year) {
            $query->whereMonth('tanggal', $month)->whereYear('tanggal', $year);
        }

        $totalgajis = $query->get();

        return view('gajis.index', compact('totalgajis'));
    }



    public function cetakGaji(Request $request)
    {
        $month = $request->input('month');
        $year = $request->input('year');

        $query = Totalgaji::query();

        if ($month && $year) {
            $query->whereMonth('tanggal', $month)->whereYear('tanggal', $year);
        }

        $totalgajis = $query->get();

        $pdf = PDF::loadView('gajis.cetak-gaji', compact('totalgajis'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }

    // public function cetakGaji(Request $request)
    // {
    //     $startDate = $request->input('start_date');
    //     $endDate = $request->input('end_date');

    //     $query = Totalgaji::query();

    //     if ($startDate && $endDate) {
    //         $query->whereBetween('tanggal', [$startDate, $endDate]);
    //     }

    //     $totalgajis = $query->get();

    //     $pdf = PDF::loadView('gajis.cetak-gaji', compact('totalgajis'))->setPaper('a4', 'landscape');
    //     return $pdf->stream();
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $karyawans = Karyawan::all();
        return view('gajis.create', compact('karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'karyawan_id'     => 'required',
            'tanggal'     => 'required',
            'hadir'     => 'required',
            'izin'     => 'required',
            'sakit'     => 'required',
            'telat'     => 'required',
            'alfa'     => 'required',
            'angsuran'     => 'required',
            'bpjs'     => 'required',
            'kasbon'     => 'required',
            'thr'     => 'required',

        ], [
            'karyawan_id.required' => 'Nama karyawan wajib diisi.',
            'tanggal.required' => 'Tanggal wajib diisi.',
            'hadir.required' => 'Jumlah Kehadiran wajib diisi.',
            'izin.required' => 'Jumlah izin wajib diisi.',
            'sakit.required' => 'Jumlah sakit wajib diisi.',
            'telat.required' => 'Jumlah telat wajib diisi.',
            'alfa.required' => 'Jumlah alfa wajib diisi.',
            'angsuran.required' => 'Jumlah angsuran wajib diisi.',
            'bpjs.required' => 'Jumlah bpjs wajib diisi.',
            'kasbon.required' => 'Jumlah kasbon wajib diisi.',
            'thr.required' => 'Jumlah THR/Bonus wajib diisi.',

        ]);

        Totalgaji::create([
            'karyawan_id' => $request->karyawan_id,
            'tanggal' => $request->tanggal,
            'hadir' => $request->hadir,
            'izin' => $request->izin,
            'sakit' => $request->sakit,
            'telat' => $request->telat,
            'alfa' => $request->alfa,
            'angsuran' => $request->angsuran,
            'bpjs' => $request->bpjs,
            'kasbon' => $request->kasbon,
            'thr' => $request->thr,
        ]);

        return redirect()->route('gajis.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $gajis = Totalgaji::find($id);
        return view('gajis.show', compact('gajis'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Totalgaji $totalgaji)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Totalgaji $totalgaji)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Totalgaji $totalgaji)
    {
        //
    }
}
