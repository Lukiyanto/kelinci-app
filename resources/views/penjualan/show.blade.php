@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penjualan</h1>
    <div class="form-group">
        <label for="nomor_transaksi">Nomor Transaksi</label>
        <input type="text" name="nomor_transaksi" class="form-control" value="{{ $penjualan->nomor_transaksi }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_transaksi">Tanggal Transaksi</label>
        <input type="date" name="tanggal_transaksi" class="form-control" value="{{ $penjualan->tanggal_transaksi }}" readonly>
    </div>
    <div class="form-group">
        <label for="total_harga">Total Harga</label>
        <input type="number" name="total_harga" class="form-control" value="{{ $penjualan->total_harga }}" readonly>
    </div>
    <div class="form-group">
        <label for="nama_pembeli">Nama Pembeli</label>
        <input type="text" name="nama_pembeli" class="form-control" value="{{ $penjualan->nama_pembeli }}" readonly>
    </div>
    <div class="form-group">
        <label for="telepon_pembeli">Telepon Pembeli</label>
        <input type="text" name="telepon_pembeli" class="form-control" value="{{ $penjualan->telepon_pembeli }}" readonly>
    </div>
    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection