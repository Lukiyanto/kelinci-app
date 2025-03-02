@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Induk Kelinci</h1>
    <div class="form-group">
        <label for="kode_induk">Kode Induk</label>
        <input type="text" name="kode_induk" class="form-control" value="{{ $indukKelinci->kode_induk }}" readonly>
    </div>
    <div class="form-group">
        <label for="nama_induk">Nama Induk</label>
        <input type="text" name="nama_induk" class="form-control" value="{{ $indukKelinci->nama_induk }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $indukKelinci->tanggal_lahir }}" readonly>
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" value="{{ $indukKelinci->jenis_kelamin }}" readonly>
    </div>
    <div class="form-group">
        <label for="catatan">Catatan</label>
        <input type="text" name="catatan" class="form-control" value="{{ $indukKelinci->catatan }}" readonly>
    </div>
    <div class="form-group">
        <label for="jenis_ras_id">Jenis Ras ID</label>
        <input type="number" name="jenis_ras_id" class="form-control" value="{{ $indukKelinci->jenis_ras_id }}" readonly>
    </div>
    <div class="form-group">
        <label for="kandang_id">Kandang ID</label>
        <input type="number" name="kandang_id" class="form-control" value="{{ $indukKelinci->kandang_id }}" readonly>
    </div>
    <a href="{{ route('induk-kelinci.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection