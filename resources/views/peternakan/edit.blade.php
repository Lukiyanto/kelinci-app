@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Peternakan</h1>
    <form action="{{ route('peternakan.update', $peternakan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nama_peternakan">Nama Peternakan</label>
            <input type="text" name="nama_peternakan" class="form-control" value="{{ $peternakan->nama_peternakan }}" required>
        </div>
        <div class="form-group">
            <label for="alamat_peternakan">Alamat Peternakan</label>
            <input type="text" name="alamat_peternakan" class="form-control" value="{{ $peternakan->alamat_peternakan }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $peternakan->email }}" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ $peternakan->telepon }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection