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
            'induk_jantan_id' => 'required|integer',
            'induk_betina_id' => 'required|integer',
            'tanggal_kawin' => 'required|date',
            'tanggal_lahir' => 'required|date',
            'status' => 'required|string',
            'jumlah_anak' => 'required|integer|min:0',
            'jumlah_anak_hidup' => 'required|integer|min:0',
            'jumlah_anak_mati' => 'required|integer|min:0',
            'catatan' => 'required|string',
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
            'induk_jantan_id' => 'required|integer',
            'induk_betina_id' => 'required|integer',
            'tanggal_kawin' => 'required|date',
            'tanggal_lahir' => 'required|date',
            'status' => 'required|string',
            'jumlah_anak' => 'required|integer|min:0',
            'jumlah_anak_hidup' => 'required|integer|min:0',
            'jumlah_anak_mati' => 'required|integer|min:0',
            'catatan' => 'required|string',
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
