@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Detail Penjualan</h1>
    <form action="{{ route('detail-penjualan.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="penjualan_id">Penjualan ID</label>
            <input type="number" name="penjualan_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="kelinci_id">Kelinci ID</label>
            <input type="number" name="kelinci_id" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="number" name="harga_jual" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="catatan">Catatan</label>
            <textarea name="catatan" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection