@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Peternakan</h1>
    <div class="form-group">
        <label for="nama_peternakan">Nama Peternakan</label>
        <input type="text" name="nama_peternakan" class="form-control" value="{{ $peternakan->nama_peternakan }}" readonly>
    </div>
    <div class="form-group">
        <label for="alamat_peternakan">Alamat Peternakan</label>
        <input type="text" name="alamat_peternakan" class="form-control" value="{{ $peternakan->alamat_peternakan }}" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $peternakan->email }}" readonly>
    </div>
    <div class="form-group">
        <label for="telepon">Telepon</label>
        <input type="text" name="telepon" class="form-control" value="{{ $peternakan->telepon }}" readonly>
    </div>
    <a href="{{ route('peternakan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection