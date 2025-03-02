@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Anak Kelinci</h1>
    <a href="{{ route('anak-kelinci.create') }}" class="btn btn-primary">Tambah Anak Kelinci</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Anak</th>
                <th>Nama Anak</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status Anak</th>
                <th>Perkawinan ID</th>
                <th>Jenis Ras ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($anakKelincis as $anakKelinci)
                <tr>
                    <td>{{ $anakKelinci->kode_anak }}</td>
                    <td>{{ $anakKelinci->nama_anak }}</td>
                    <td>{{ $anakKelinci->tanggal_lahir }}</td>
                    <td>{{ $anakKelinci->jenis_kelamin }}</td>
                    <td>{{ $anakKelinci->status_anak }}</td>
                    <td>{{ $anakKelinci->perkawinan_id }}</td>
                    <td>{{ $anakKelinci->jenis_ras_id }}</td>
                    <td>
                        <a href="{{ route('anak-kelinci.show', $anakKelinci->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('anak-kelinci.edit', $anakKelinci->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('anak-kelinci.destroy', $anakKelinci->id) }}" method="POST" style="display:inline-block;">
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