@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Detail Penjualan</h1>
    <form action="{{ route('detail-penjualan.update', $detailPenjualan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="penjualan_id">Penjualan ID</label>
            <input type="number" name="penjualan_id" class="form-control" value="{{ $detailPenjualan->penjualan_id }}" required>
        </div>
        <div class="form-group">
            <label for="kelinci_id">Kelinci ID</label>
            <input type="number" name="kelinci_id" class="form-control" value="{{ $detailPenjualan->kelinci_id }}" required>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" value="{{ $detailPenjualan->harga_jual }}" required>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea name="catatan" class="form-control">{{ $detailPenjualan->catatan }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection