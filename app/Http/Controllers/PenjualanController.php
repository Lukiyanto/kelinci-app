<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualans = Penjualan::all();
        return view('penjualan.index', compact('penjualans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_transaksi' => 'required|string|max:255',
            'tanggal_transaksi' => 'required|date',
            'total_harga' => 'required|integer|min:0',
            'nama_pembeli' => 'required|string|max:255',
            'telepon_pembeli' => 'required|string|max:255',
        ]);

        Penjualan::create($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Penjualan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjualan $penjualan)
    {
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjualan $penjualan)
    {
        return view('penjualan.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penjualan $penjualan)
    {
        $request->validate([
            'nomor_transaksi' => 'required|string|max:255',
            'tanggal_transaksi' => 'required|date',
            'total_harga' => 'required|integer|min:0',
            'nama_pembeli' => 'required|string|max:255',
            'telepon_pembeli' => 'required|string|max:255',
        ]);

        $penjualan->update($request->all());
        return redirect()->route('penjualan.index')->with('success', 'Penjualan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->route('penjualan.index')->with('success', 'Penjualan deleted successfully.');
    }
}
