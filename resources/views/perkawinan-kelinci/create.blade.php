@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Perkawinan Kelinci</h1>
    <form action="{{ route('perkawinan-kelinci.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="induk_jantan_id">Induk Jantan ID</label>
            <input type="number" name="induk_jantan_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="induk_betina_id">Induk Betina ID</label>
            <input type="number" name="induk_betina_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_kawin">Tanggal Kawin</label>
            <input type="date" name="tanggal_kawin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <input type="text" name="status" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_anak">Jumlah Anak</label>
            <input type="number" name="jumlah_anak" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_anak_hidup">Jumlah Anak Hidup</label>
            <input type="number" name="jumlah_anak_hidup" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jumlah_anak_mati">Jumlah Anak Mati</label>
            <input type="number" name="jumlah_anak_mati" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea name="catatan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection