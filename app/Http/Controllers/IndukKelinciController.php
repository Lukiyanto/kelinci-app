<?php

namespace App\Http\Controllers;

use App\Models\IndukKelinci;
use Illuminate\Http\Request;

class IndukKelinciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $indukKelincis = IndukKelinci::all();
        return view('induk-kelinci.index', compact('indukKelincis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('induk-kelinci.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_induk' => 'required|string|max:255',
            'nama_induk' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'jenis_kelinci_id' => 'required|integer',
            'kandang_id' => 'required|integer',
        ]);

        IndukKelinci::create($request->all());
        return redirect()->route('induk-kelinci.index')->with('success', 'Induk Kelinci created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(IndukKelinci $indukKelinci)
    {
        return view('induk-kelinci.show', compact('indukKelinci'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IndukKelinci $indukKelinci)
    {
        return view('induk-kelinci.edit', compact('indukKelinci'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IndukKelinci $indukKelinci)
    {
        $request->validate([
            'kode_induk' => 'required|string|max:255',
            'nama_induk' => 'nullable|string|max:255',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'required|string|max:255',
            'catatan' => 'nullable|string',
            'jenis_kelinci_id' => 'required|integer',
            'kandang_id' => 'required|integer',
        ]);

        $indukKelinci->update($request->all());
        return redirect()->route('induk-kelinci.index')->with('success', 'Induk kelinci update successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IndukKelinci $indukKelinci)
    {
        $indukKelinci->delete();
        return redirect()->route('induk-kelinci.index')->with('success', 'Induk kelinci deleted successfully.');
    }
}
