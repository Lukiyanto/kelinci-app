@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Penjualan</h1>
    <div class="form-group">
        <label for="penjualan_id">Penjualan ID</label>
        <input type="number" name="penjualan_id" class="form-control" value="{{ $detailPenjualan->penjualan_id }}" readonly>
    </div>
    <div class="form-group">
        <label for="kelinci_id">Kelinci ID</label>
        <input type="number" name="kelinci_id" class="form-control" value="{{ $detailPenjualan->kelinci_id }}" readonly>
    </div>
    <div class="form-group">
        <label for="harga_jual">Harga Jual</label>
        <input type="number" name="harga_jual" class="form-control" value="{{ $detailPenjualan->harga_jual }}" readonly>
    </div>
    <div class="form-group">
        <label for="catatan">Catatan</label>
        <textarea name="catatan" class="form-control" readonly>{{ $detailPenjualan->catatan }}</textarea>
    </div>
    <a href="{{ route('detail-penjualan.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection