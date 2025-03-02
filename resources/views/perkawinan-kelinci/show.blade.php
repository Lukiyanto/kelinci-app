@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Perkawinan Kelinci</h1>
    <div class="form-group">
        <label for="induk_jantan_id">Induk Jantan ID</label>
        <input type="number" name="induk_jantan_id" class="form-control" value="{{ $perkawinanKelinci->induk_jantan_id }}" readonly>
    </div>
    <div class="form-group">
        <label for="induk_betina_id">Induk Betina ID</label>
        <input type="number" name="induk_betina_id" class="form-control" value="{{ $perkawinanKelinci->induk_betina_id }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_kawin">Tanggal Kawin</label>
        <input type="date" name="tanggal_kawin" class="form-control" value="{{ $perkawinanKelinci->tanggal_kawin }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" value="{{ $perkawinanKelinci->tanggal_lahir }}" readonly>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <input type="text" name="status" class="form-control" value="{{ $perkawinanKelinci->status }}" readonly>
    </div>
    <div class="form-group">
        <label for="jumlah_anak">Jumlah Anak</label>
        <input type="number" name="jumlah_anak" class="form-control" value="{{ $perkawinanKelinci->jumlah_anak }}" readonly>
    </div>
    <div class="form-group">
        <label for="jumlah_anak_hidup">Jumlah Anak Hidup</label>
        <input type="number" name="jumlah_anak_hidup" class="form-control" value="{{ $perkawinanKelinci->jumlah_anak_hidup }}" readonly>
    </div>
    <div class="form-group">
        <label for="jumlah_anak_mati">Jumlah Anak Mati</label>
        <input type="number" name="jumlah_anak_mati" class="form-control" value="{{ $perkawinanKelinci->jumlah_anak_mati }}" readonly>
    </div>
    <div class="form-group">
        <label for="catatan">Catatan</label>
        <textarea name="catatan" class="form-control" readonly>{{ $perkawinanKelinci->catatan }}</textarea>
    </div>
    <a href="{{ route('perkawinan-kelinci.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection