<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $jabatans = Jabatan::latest()->get();
        // $jabatans = DB::table('jabatans')->get();

        return view('jabatans.index', compact('jabatans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('jabatans.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            // 'image'     => 'required|image|mimes:jpeg,jpg,png|max:10048',
            'departmen'     => 'required',
            'jabatan'     => 'required',
            'gajipokok'     => 'required',
            'gjabatan'     => 'required',
            'oprs'     => 'required',
            'service'     => 'required',
            'hp'     => 'required',
            'inshadir'     => 'required',

        ], [
            'departmen.required' => 'Departmen wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
            'gajipokok.required' => 'Gaji Pokok wajib diisi.',
            'gjabatan.required' => 'Gaji Jabatan wajib diisi.',
            'oprs.required' => 'Operasional wajib diisi.',
            'service.required' => 'Service wajib diisi.',
            'hp.required' => 'HP wajib diisi.',
            'inshadir.required' => 'Insentif Kehadiran wajib diisi.',
        ]);


        //create Jabatan
        Jabatan::create([
            // 'image'     => $image->hashName(),
            'departmen'     => $request->departmen,
            'jabatan'     => $request->jabatan,
            'gajipokok'     => $request->gajipokok,
            'gjabatan'     => $request->gjabatan,
            'oprs'     => $request->oprs,
            'service'     => $request->service,
            'hp'     => $request->hp,
            'inshadir'     => $request->inshadir,
        ]);

        //redirect to index
        return redirect()->route('jabatans.index')->with('success', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jabatans = Jabatan::find($id);
        return view('jabatans.show', compact('jabatans'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $jabatans = Jabatan::findOrFail($id);
        return view('jabatans.edit', compact('jabatans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            // 'image'     => 'required|image|mimes:jpeg,jpg,png|max:10048',
            'departmen'     => 'required',
            'jabatan'     => 'required',
            'gajipokok'     => 'required',
            'gjabatan'     => 'required',
            'oprs'     => 'required',
            'service'     => 'required',
            'hp'     => 'required',
            'inshadir'     => 'required',

        ], [
            'departmen.required' => 'Departmen wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
            'gajipokok.required' => 'Gaji Pokok wajib diisi.',
            'gjabatan.required' => 'Gaji Jabatan wajib diisi.',
            'oprs.required' => 'Operasional wajib diisi.',
            'service.required' => 'Service wajib diisi.',
            'hp.required' => 'HP wajib diisi.',
            'inshadir.required' => 'Insentif Kehadiran wajib diisi.',
        ]);

        $jabatans = Jabatan::findOrFail($id);

        $jabatans->update([
            'departmen'     => $request->departmen,
            'jabatan'     => $request->jabatan,
            'gajipokok'     => $request->gajipokok,
            'gjabatan'     => $request->gjabatan,
            'oprs'     => $request->oprs,
            'service'     => $request->service,
            'hp'     => $request->hp,
            'inshadir'     => $request->inshadir,
        ]);
        //redirect to index
        return redirect()->route('jabatans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        $jabatans = Jabatan::findOrFail($id);
        $jabatans->delete();
        return redirect()->route('jabatans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
