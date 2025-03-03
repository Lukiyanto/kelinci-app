<?php

namespace App\Http\Controllers;

use App\Models\JenisRas;
use Illuminate\Http\Request;

class JenisRasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenisRas = JenisRas::all();
        return view('jenis-ras.index', compact('jenisRas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jenis-ras.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga_jual' => 'required|integer|min:0',
        ]);

        JenisRas::create($request->all());
        return redirect()->route('jenis-ras.index')->with('success', 'Jenis Ras created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(JenisRas $ras)
    {
        return view('jenis-ras.show', compact('ras'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JenisRas $ras)
    {
        return view('jenis-ras.edit', compact('ras'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JenisRas $ras)
    {
        $request->validate([
            'nama_ras' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga_jual' => 'required|integer|min:0',
        ]);

        $ras->update($request->all());
        return redirect()->route('jenis-ras.index')->with('success', 'Jenis Ras updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JenisRas $ras)
    {
        $ras->delete();
        return redirect()->route('jenis-ras.index')->with('success', 'Jenis Ras deleted successfully.');
    }
}
