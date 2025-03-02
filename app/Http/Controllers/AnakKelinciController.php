<?php

namespace App\Http\Controllers;

use App\Models\AnakKelinci;
use Illuminate\Http\Request;

class AnakKelinciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('anak-kelinci.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anak-kelinci.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_anak' => 'required|string|max:255',
            'nama_anak' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:255',
            'status_anak' => 'required|string',
            'perkawinan_id' => 'required|integer',
            'jenis_ras_id' => 'required|integer',
        ]);

        AnakKelinci::create($request->all());
        return redirect()->route('anak-kelinci.index')->with('success', 'Anak kelinci created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(AnakKelinci $anakKelinci)
    {
        return view('anak-kelinci.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AnakKelinci $anakKelinci)
    {
        return view('anak-kelinci.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AnakKelinci $anakKelinci)
    {
        $request->validate([
            'kode_anak' => 'required|string|max:255',
            'nama_anak' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string|max:255',
            'status_anak' => 'required|string',
            'perkawinan_id' => 'required|integer',
            'jenis_ras_id' => 'required|integer',
        ]);

        $anakKelinci->update($request->all());
        return redirect()->route('anak-kelinci.index')->with('success', 'Anak kelinci updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnakKelinci $anakKelinci)
    {
        $anakKelinci->delete();
        return redirect()->route('anak-kelinci.index')->with('success', 'Anak kelinci deleted successfully.');
    }
}
