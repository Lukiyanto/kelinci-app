<?php

namespace App\Http\Controllers;

use App\Models\JenisKelinci;
use Illuminate\Http\Request;

class JenisKelinciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisKelincis = JenisKelinci::all();
        return view('jenis-kelinci.index', compact('jenisKelincis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis-kelinci.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jenis' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_jual' => 'required|integer|min:0',
        ]);

        JenisKelinci::create($request->all());
        return redirect()->route('jenis-kelinci.index')->with('success', 'Jenis kelinci created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisKelinci $jenisKelinci)
    {
        return view('jenis-kelinci.show', compact('jenisKelinci'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisKelinci $jenisKelinci)
    {
        return view('jenis-kelinci.edit', compact('jenisKelinci'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisKelinci $jenisKelinci)
    {
        $request->validate([
            'nama_jenis' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga_jual' => 'required|integer|min:0',
        ]);

        $jenisKelinci->update($request->all());
        return redirect()->route('jenis-kelinci.index')->with('success', 'Jenis kelinci updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisKelinci $jenisKelinci)
    {
        $jenisKelinci->delete();
        return redirect()->route('jenis-kelinci.index')->with('success', 'Jenis kelinci deleted successfully.');
    }
}
