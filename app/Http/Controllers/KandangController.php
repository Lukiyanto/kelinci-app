<?php

namespace App\Http\Controllers;

use App\Models\Kandang;
use Illuminate\Http\Request;

class KandangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kandangs = Kandang::all();
        return view('kandang.index', compact('kandangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kandang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_kandang' => 'required|string|max:255',
            'nama_kandang' => 'required|string|max:255',
            'jenis_kandang' => 'required|string|max:255',
            'lokasi' => 'nullable|string|max:255',
            'kapasitas' => 'nullable|integer|min:0',
            'status_kandang' => 'nullable|string|max:255',
            'peternakan_id' => 'nullable|exists:peternakans,id',
        ]);

        Kandang::create($request->all());
        return redirect()->route('kandang.index')->with('success', 'Kandang created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kandang $kandang)
    {
        return view('kandang.show', compact('kandang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kandang $kandang)
    {
        return view('kandang.edit', compact('kandang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kandang $kandang)
    {
        $request->validate([
            'kode_kandang' => 'required|string|max:255',
            'nama_kandang' => 'required|string|max:255',
            'jenis_kandang' => 'required|string|max:255',
            'lokasi' => 'nullable|string|max:255',
            'kapasitas' => 'nullable|integer|min:0',
            'status_kandang' => 'nullable|string|max:255',
            'peternakan_id' => 'nullable|exists:peternakans,id',
        ]);

        $kandang->update($request->all());
        return redirect()->route('kandang.index')->with('success', 'Kandang updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kandang $kandang)
    {
        $kandang->delete();
        return redirect()->route('kandang.index')->with('success', 'Kandang deleted successfully.');
    }
}
