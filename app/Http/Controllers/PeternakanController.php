<?php

namespace App\Http\Controllers;

use App\Models\Peternakan;
use Illuminate\Http\Request;

class PeternakanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peternakans = Peternakan::all();
        return view('peternakan.index', compact('peternakans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('peternakan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_peternakan' => 'required|string|max:255',
            'alamat_peternakan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:255',
        ]);

        Peternakan::create($request->all());
        return redirect()->route('peternakan.index')->with('success', 'Peternakan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peternakan $peternakan)
    {
        return view('peternakan.show', compact('peternakan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peternakan $peternakan)
    {
        return view('peternakan.edit', compact('peternakan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peternakan $peternakan)
    {
        $request->validate([
            'nama_peternakan' => 'required|string|max:255',
            'alamat_peternakan' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telepon' => 'required|string|max:255',
        ]);

        $peternakan->update($request->all());
        return redirect()->route('peternakan.index')->with('success', 'Peternakan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peternakan $peternakan)
    {
        $peternakan->delete();
        return redirect()->route('peternakan.index')->with('success', 'Peternakan deleted successfully.');
    }
}
