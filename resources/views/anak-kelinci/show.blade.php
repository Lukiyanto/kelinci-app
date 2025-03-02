// filepath: /d:/Lukii/Project/kelinci-app/resources/views/anak-kelinci/show.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Anak Kelinci</h1>
    <div class="form-group">
        <label for="kode_anak">Kode Anak</label>
        <input type="text" name="kode_anak" class="form-control" value="{{ $anakKelinci->kode_anak }}" readonly>
    </div>
    <div class="form-group">
        <label for="nama_anak">Nama Anak</label>
        <input type="text" name="nama_anak" class="form-control" value="{{ $anakKelinci->nama_anak }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $anakKelinci->tanggal_lahir }}" readonly>
    </div>
    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control" value="{{ $anakKelinci->jenis_kelamin }}" readonly>
    </div>
    <div class="form-group">
        <label for="status_anak">Status Anak</label>
        <input type="text" name="status_anak" class="form-control" value="{{ $anakKelinci->status_anak }}" readonly>
    </div>
    <div class="form-group">
        <label for="perkawinan_id">Perkawinan ID</label>
        <input type="number" name="perkawinan_id" class="form-control" value="{{ $anakKelinci->perkawinan_id }}" readonly>
    </div>
    <div class="form-group">
        <label for="jenis_ras_id">Jenis Ras ID</label>
        <input type="number" name="jenis_ras_id" class="form-control" value="{{ $anakKelinci->jenis_ras_id }}" readonly>
    </div>
    <a href="{{ route('anak-kelinci.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection