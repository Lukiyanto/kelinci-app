@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Jenis Ras</h1>
    <form action="{{ route('jenis-ras.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_ras">Nama Ras</label>
            <input type="text" name="nama_ras" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection