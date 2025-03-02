@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Penjualan</h1>
    <a href="{{ route('penjualan.create') }}" class="btn btn-primary">Tambah Penjualan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nomor Transaksi</th>
                <th>Tanggal Transaksi</th>
                <th>Total Harga</th>
                <th>Nama Pembeli</th>
                <th>Telepon Pembeli</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penjualans as $penjualan)
                <tr>
                    <td>{{ $penjualan->nomor_transaksi }}</td>
                    <td>{{ $penjualan->tanggal_transaksi }}</td>
                    <td>{{ $penjualan->total_harga }}</td>
                    <td>{{ $penjualan->nama_pembeli }}</td>
                    <td>{{ $penjualan->telepon_pembeli }}</td>
                    <td>
                        <a href="{{ route('penjualan.show', $penjualan->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" style="display:inline-block;">
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