// filepath: /d:/Lukii/Project/kelinci-app/resources/views/detail-penjualan/index.blade.php
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Detail Penjualan</h1>
    <a href="{{ route('detail-penjualan.create') }}" class="btn btn-primary">Tambah Detail Penjualan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Penjualan ID</th>
                <th>Kelinci ID</th>
                <th>Harga Jual</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detailPenjualans as $detailPenjualan)
                <tr>
                    <td>{{ $detailPenjualan->penjualan_id }}</td>
                    <td>{{ $detailPenjualan->kelinci_id }}</td>
                    <td>{{ $detailPenjualan->harga_jual }}</td>
                    <td>{{ $detailPenjualan->catatan }}</td>
                    <td>
                        <a href="{{ route('detail-penjualan.show', $detailPenjualan->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('detail-penjualan.edit', $detailPenjualan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('detail-penjualan.destroy', $detailPenjualan->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection