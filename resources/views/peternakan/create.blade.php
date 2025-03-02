@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Peternakan</h1>
    <form action="{{ route('peternakan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_peternakan">Nama Peternakan</label>
            <input type="text" name="nama_peternakan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="alamat_peternakan">Alamat Peternakan</label>
            <input type="text" name="alamat_peternakan" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection