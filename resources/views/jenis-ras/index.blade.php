@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Jenis Ras</h1>
    <a href="{{ route('jenis-ras.create') }}" class="btn btn-primary">Tambah Jenis Ras</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Ras</th>
                <th>Deskripsi</th>
                <th>Harga Jual</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jenisRas as $ras)
                <tr>
                    <td>{{ $ras->nama_ras }}</td>
                    <td>{{ $ras->deskripsi }}</td>
                    <td>{{ $ras->harga_jual }}</td>
                    <td>
                        <a href="{{ route('jenis-ras.show', $ras->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('jenis-ras.edit', $ras->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jenis-ras.destroy', $ras->id) }}" method="POST" style="display:inline-block;">
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