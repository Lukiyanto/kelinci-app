@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Induk Kelinci</h1>
    <form action="{{ route('induk-kelinci.update', $indukKelinci->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="kode_induk">Kode Induk</label>
            <input type="text" name="kode_induk" class="form-control" value="{{ $indukKelinci->kode_induk }}" required>
        </div>
        <div class="form-group">
            <label for="nama_induk">Nama Induk</label>
            <input type="text" name="nama_induk" class="form-control" value="{{ $indukKelinci->nama_induk }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $indukKelinci->tanggal_lahir }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" name="jenis_kelamin" class="form-control" value="{{ $indukKelinci->jenis_kelamin }}" required>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <input type="text" name="catatan" class="form-control" value="{{ $indukKelinci->catatan }}" required>
        </div>
        <div class="form-group">
            <label for="jenis_ras_id">Jenis Ras ID</label>
            <input type="number" name="jenis_ras_id" class="form-control" value="{{ $indukKelinci->jenis_ras_id }}" required>
        </div>
        <div class="form-group">
            <label for="kandang_id">Kandang ID</label>
            <input type="number" name="kandang_id" class="form-control" value="{{ $indukKelinci->kandang_id }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection