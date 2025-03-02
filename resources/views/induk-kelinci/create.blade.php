@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Induk Kelinci</h1>
    <form action="{{ route('induk-kelinci.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="kode_induk">Kode Induk</label>
            <input type="text" name="kode_induk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_induk">Nama Induk</label>
            <input type="text" name="nama_induk" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <input type="text" name="catatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="jenis_ras_id">Jenis Ras ID</label>
            <input type="number" name="jenis_ras_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kandang_id">Kandang ID</label>
            <input type="number" name="kandang_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection