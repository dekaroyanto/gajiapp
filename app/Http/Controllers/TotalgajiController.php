<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Totalgaji;
use Illuminate\Http\Request;

class TotalgajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalgajis = Totalgaji::all();
        return view('totalgaji.index', compact('totalgajis',));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Totalgaji $totalgaji)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Totalgaji $totalgaji)
    {
        //
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
