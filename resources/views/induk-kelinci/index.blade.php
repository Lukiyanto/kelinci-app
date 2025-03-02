@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Induk Kelinci</h1>
    <a href="{{ route('induk-kelinci.create') }}" class="btn btn-primary">Tambah Induk Kelinci</a>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Induk</th>
                <th>Nama Induk</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Catatan</th>
                <th>Jenis Ras ID</th>
                <th>Kandang ID</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($indukKelincis as $indukKelinci)
                <tr>
                    <td>{{ $indukKelinci->kode_induk }}</td>
                    <td>{{ $indukKelinci->nama_induk }}</td>
                    <td>{{ $indukKelinci->tanggal_lahir }}</td>
                    <td>{{ $indukKelinci->jenis_kelamin }}</td>
                    <td>{{ $indukKelinci->catatan }}</td>
                    <td>{{ $indukKelinci->jenis_ras_id }}</td>
                    <td>{{ $indukKelinci->kandang_id }}</td>
                    <td>
                        <a href="{{ route('induk-kelinci.show', $indukKelinci->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('induk-kelinci.edit', $indukKelinci->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('induk-kelinci.destroy', $indukKelinci->id) }}" method="POST" style="display:inline-block;">
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