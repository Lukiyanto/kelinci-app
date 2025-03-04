@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Jenis Ras</h1>
    <div class="form-group">
        <label for="nama_ras">Nama Ras</label>
        <input type="text" name="nama_ras" class="form-control" value="{{ $jenisKelinci->nama_jenis }}" readonly>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" readonly>{{ $jenisKelinci->deskripsi }}</textarea>
    </div>
    <div class="form-group">
        <label for="harga_jual">Harga Jual</label>
        <input type="number" name="harga_jual" class="form-control" value="{{ $jenisKelinci->harga_jual }}" readonly>
    </div>
    <a href="{{ route('jenis-ras.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection