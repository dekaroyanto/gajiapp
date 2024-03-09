<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Totalgaji;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TotalgajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalgajis = Totalgaji::all();
        foreach ($totalgajis as $lur) {
            $lur->total_inshadir = $lur->karyawan->jabatan->inshadir * $lur->hadir;

            $lur->totalgaji = $lur->total_inshadir + $lur->karyawan->jabatan->gajipokok + $lur->karyawan->jabatan->gjabatan + $lur->karyawan->jabatan->oprs + $lur->karyawan->jabatan->service + $lur->karyawan->jabatan->hp;

            $lur->gajiakhir = $lur->totalgaji - ($lur->angsuran + $lur->bpjs + $lur->kasbon);
        }
        return view('gajis.index', compact('totalgajis',));
    }

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
