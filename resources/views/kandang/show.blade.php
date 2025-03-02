@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Kandang</h1>
    <div class="form-group">
        <label for="kode_kandang">Kode Kandang</label>
        <input type="text" name="kode_kandang" class="form-control" value="{{ $kandang->kode_kandang }}" readonly>
    </div>
    <div class="form-group">
        <label for="nama_kandang">Nama Kandang</label>
        <input type="text" name="nama_kandang" class="form-control" value="{{ $kandang->nama_kandang }}" readonly>
    </div>
    <div class="form-group">
        <label for="jenis_kandang">Jenis Kandang</label>
        <input type="text" name="jenis_kandang" class="form-control" value="{{ $kandang->jenis_kandang }}" readonly>
    </div>
    <div class="form-group">
        <label for="lokasi">Lokasi</label>
        <input type="text" name="lokasi" class="form-control" value="{{ $kandang->lokasi }}" readonly>
    </div>
    <div class="form-group">
        <label for="kapasitas">Kapasitas</label>
        <input type="number" name="kapasitas" class="form-control" value="{{ $kandang->kapasitas }}" readonly>
    </div>
    <div class="form-group">
        <label for="status_kandang">Status Kandang</label>
        <input type="text" name="status_kandang" class="form-control" value="{{ $kandang->status_kandang }}" readonly>
    </div>
    <div class="form-group">
        <label for="peternakan_id">Peternakan ID</label>
        <input type="number" name="peternakan_id" class="form-control" value="{{ $kandang->peternakan_id }}" readonly>
    </div>
    <a href="{{ route('kandang.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
