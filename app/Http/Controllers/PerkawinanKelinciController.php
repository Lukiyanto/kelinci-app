<?php

namespace App\Http\Controllers;

use App\Models\PerkawinanKelinci;
use App\Models\IndukKelinci;
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
        $indukBetinas = IndukKelinci::where('kode_induk', 'like', 'IKB%')->pluck('kode_induk', 'id');
        $indukJantans = IndukKelinci::where('kode_induk', 'like', 'IKJ%')->pluck('kode_induk', 'id');
        return view('perkawinan-kelinci.create', compact('indukBetinas', 'indukJantans'));
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

        $data = $request->all();
        if ($request->tanggal_kawin) {
            $data['tanggal_melahirkan'] = \Carbon\Carbon::parse($request->tanggal_kawin)->addDays(30);
        }
        $data['status'] = 'Berhasil';

        PerkawinanKelinci::create($data);
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
        $indukBetinas = IndukKelinci::where('kode_induk', 'like', 'IKB%')->pluck('kode_induk', 'id');
        $indukJantans = IndukKelinci::where('kode_induk', 'like', 'IKJ%')->pluck('kode_induk', 'id');
        return view('perkawinan-kelinci.edit', compact('perkawinanKelinci', 'indukBetinas', 'indukJantans'));
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

        $data = $request->all();
        if ($request->tanggal_kawin) {
            $data['tanggal_melahirkan'] = \Carbon\Carbon::parse($request->tanggal_kawin)->addDays(30);
        }
        $data['status'] = 'Berhasil';

        $perkawinanKelinci->update($data);
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
