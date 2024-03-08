<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Karyawan;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard()
    {
        return view('dashboard');
    }


    public function index(): View
    {
        $karyawans = Karyawan::with('jabatan')->latest()->get();
        // $karyawans = DB::table('karyawans')->get();

        return view('karyawans.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // return view('karyawans.create');
        $jabatans = Jabatan::all();
        return view('karyawans.create', compact('jabatans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            // 'image'     => 'required|image|mimes:jpeg,jpg,png|max:10048',
            'name'     => 'required',
            'norek'     => 'required',
            'lamakerja'     => 'required',

        ], [
            'name.required' => 'Nama wajib diisi.',
            // 'name.min' => 'Nama minimal harus 5 karakter.',
            'norek.required' => 'Nomor rekening wajib diisi.',
            'lamakerja.required' => 'Lama kerja wajib diisi.',
        ]);



        //create post
        Karyawan::create([
            'name'     => $request->name,
            'norek'     => $request->norek,
            'lamakerja'     => $request->lamakerja,
            'jabatan_id' => $request->jabatan_id,
        ]);

        //redirect to index
        return redirect()->route('karyawans.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Karyawan $karyawan)
    // {

    // }

    public function show($id)
    {
        $karyawans = Karyawan::find($id);
        return view('karyawans.show', compact('karyawans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $karyawans = Karyawan::findOrFail($id);
        return view('karyawans.edit', compact('karyawans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required',
            'norek'   => 'required',
            'lamakerja' => 'required'
        ], [
            'name.required' => 'Nama wajib diisi.',
            // 'name.min' => 'Nama minimal harus 5 karakter.',
            'norek.required' => 'Nomor rekening wajib diisi.',
            'lamakerja.required' => 'Lama kerja wajib diisi.',
        ]);

        $karyawans = Karyawan::findOrFail($id);

        $karyawans->update([
            'name'     => $request->name,
            'norek'   => $request->norek,
            'lamakerja'   => $request->lamakerja,
        ]);


        //redirect to index
        return redirect()->route('karyawans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $karyawans = Karyawan::findOrFail($id);
        $karyawans->delete();
        return redirect()->route('karyawans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    // public function destroy($id)
    // {
    //     $karyawans = Karyawan::find($id);
    //     $karyawans->delete();

    //     return redirect()->route('karyawans.index')->with('success', 'Data Berhasil Di Hapus');
    // }
}
