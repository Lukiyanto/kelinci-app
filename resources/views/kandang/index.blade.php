@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Kandang</h1>
    <a href="{{ route('kandang.create') }}" class="btn btn-primary">Tambah Kandang</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Kandang</th>
                <th>Nama Kandang</th>
                <th>Jenis Kandang</th>
                <th>Lokasi</th>
                <th>Kapasitas</th>
                <th>Status Kandang</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kandangs as $kandang)
                <tr>
                    <td>{{ $kandang->kode_kandang }}</td>
                    <td>{{ $kandang->nama_kandang }}</td>
                    <td>{{ $kandang->jenis_kandang }}</td>
                    <td>{{ $kandang->lokasi }}</td>
                    <td>{{ $kandang->kapasitas }}</td>
                    <td>{{ $kandang->status_kandang }}</td>
                    <td>
                        <a href="{{ route('kandang.show', $kandang->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('kandang.edit', $kandang->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kandang.destroy', $kandang->id) }}" method="POST" style="display:inline-block;">
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