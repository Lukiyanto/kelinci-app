// filepath: /d:/Lukii/Project/kelinci-app/resources/views/penjualan/create.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Penjualan</h1>
    <form action="{{ route('penjualan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nomor_transaksi">Nomor Transaksi</label>
            <input type="text" name="nomor_transaksi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="tanggal_transaksi">Tanggal Transaksi</label>
            <input type="date" name="tanggal_transaksi" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="total_harga">Total Harga</label>
            <input type="number" name="total_harga" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nama_pembeli">Nama Pembeli</label>
            <input type="text" name="nama_pembeli" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="telepon_pembeli">Telepon Pembeli</label>
            <input type="text" name="telepon_pembeli" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection