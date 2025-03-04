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
            @foreach ($jenisKelincis as $jenisKelinci)
                <tr>
                    <td>{{ $jenisKelinci->nama_ras }}</td>
                    <td>{{ $jenisKelinci->deskripsi }}</td>
                    <td>{{ $jenisKelinci->harga_jual }}</td>
                    <td>
                        <a href="{{ route('jenis-ras.show', $jenisKelinci->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('jenis-ras.edit', $jenisKelinci->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jenis-ras.destroy', $jenisKelinci->id) }}" method="POST" style="display:inline-block;">
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