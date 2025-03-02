<?php

namespace App\Http\Controllers;

use App\Models\DetailPenjualan;
use Illuminate\Http\Request;

class DetailPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('detail-penjualan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('detail-penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'penjualan_id' => 'required|integer',
            'kelinci_id' => 'required|integer',
            'harga_jual' => 'required|integer|min:0',
            'catatan' => 'nullable|text',
        ]);

        DetailPenjualan::create($request->all());
        return redirect()->route('detail-penjualan.index')->with('success', 'Detail penjualan created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(DetailPenjualan $detailPenjualan)
    {
        return view('detail-penjualan.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DetailPenjualan $detailPenjualan)
    {
        return view('detail-penjualan.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DetailPenjualan $detailPenjualan)
    {
    $request->validate([
            'penjualan_id' => 'required|integer',
            'kelinci_id' => 'required|integer',
            'harga_jual' => 'required|integer|min:0',
            'catatan' => 'nullable|text',
        ]);

        $detailPenjualan->update($request->all());
        return redirect()->route('detail-penjualan.index')->with('success', 'Detail penjualan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailPenjualan $detailPenjualan)
    {
        $detailPenjualan->delete();
        return redirect()->route('detail-penjualan.index')->with('success', 'Detail penjualan deleted successfully.');
    }
}
