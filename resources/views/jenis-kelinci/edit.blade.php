@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Jenis Kelinci</h1>
    <form action="{{ route('jenis-kelinci.update', $jenisKelinci->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_kelinci">Nama Jenis</label>
            <input type="text" name="nama_kelinci" class="form-control" value="{{ $jenisKelinci->nama_jenis }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $jenisKelinci->deskripsi }}</textarea>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" value="{{ $jenisKelinci->harga_jual }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection