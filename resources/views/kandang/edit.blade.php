@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Kandang</h1>
    <form action="{{ route('kandang.update', $kandang->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_kandang">Kode Kandang</label>
            <input type="text" name="kode_kandang" class="form-control" value="{{ $kandang->kode_kandang }}" required>
        </div>
        <div class="form-group">
            <label for="nama_kandang">Nama Kandang</label>
            <input type="text" name="nama_kandang" class="form-control" value="{{ $kandang->nama_kandang }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_kandang">Jenis Kandang</label>
            <input type="text" name="jenis_kandang" class="form-control" value="{{ $kandang->jenis_kandang }}" required>
        </div>
        <div class="form-group">
            <label for="lokasi">Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $kandang->lokasi }}">
        </div>
        <div class="form-group">
            <label for="kapasitas">Kapasitas</label>
            <input type="number" name="kapasitas" class="form-control" value="{{ $kandang->kapasitas }}">
        </div>
        <div class="form-group">
            <label for="status_kandang">Status Kandang</label>
            <input type="text" name="status_kandang" class="form-control" value="{{ $kandang->status_kandang }}">
        </div>
        <div class="form-group">
            <label for="peternakan_id">Peternakan ID</label>
            <input type="number" name="peternakan_id" class="form-control" value="{{ $kandang->peternakan_id }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection