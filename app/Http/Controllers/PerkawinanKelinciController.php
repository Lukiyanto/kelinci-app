<?php

namespace App\Http\Controllers;

use App\Models\PerkawinanKelinci;
use Illuminate\Http\Request;

class PerkawinanKelinciController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $perkawinanKelincis = PerkawinanKelinci::all();
        return view('perkawinan-kelinci.index', compact('perkawinanKelincis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('perkawinan-kelinci.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'induk_jantan_id' => 'nullable|integer',
            'induk_betina_id' => 'nullable|integer',
            'tanggal_kawin' => 'nullable|date',
            'tanggal_lahir' => 'nullable|date',
            'status' => 'nullable|string',
            'jumlah_anak' => 'nullable|integer|min:0',
            'jumlah_anak_hidup' => 'nullable|integer|min:0',
            'jumlah_anak_mati' => 'nullable|integer|min:0',
            'catatan' => 'nullable|string',
        ]);
        
        PerkawinanKelinci::create($request->all());
        return redirect()->route('perkawinan-kelinci.index')->with('success', 'Perkawinan kelinci created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(PerkawinanKelinci $perkawinanKelinci)
    {
        return view('perkawinan-kelinci.show', compact('perkawinanKelinci'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PerkawinanKelinci $perkawinanKelinci)
    {
        return view('perkawinan-kelinci.edit', compact('perkawinanKelinci'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PerkawinanKelinci $perkawinanKelinci)
    {
        $request->validate([
            'induk_jantan_id' => 'nullable|integer',
            'induk_betina_id' => 'nullable|integer',
            'tanggal_kawin' => 'nullable|date',
            'tanggal_lahir' => 'nullable|date',
            'status' => 'nullable|string',
            'jumlah_anak' => 'nullable|integer|min:0',
            'jumlah_anak_hidup' => 'nullable|integer|min:0',
            'jumlah_anak_mati' => 'nullable|integer|min:0',
            'catatan' => 'nullable|string',
        ]);

        $perkawinanKelinci->update($request->all());
        return redirect()->route('perkawinan-kelinci.index')->with('success', 'Perkawinan kelinci updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PerkawinanKelinci $perkawinanKelinci)
    {
        $perkawinanKelinci->delete();
        return redirect()->route('perkawinan-kelinci.index')->with('success', 'Perkawinan kelinci deleted successfully.');
    }
}
