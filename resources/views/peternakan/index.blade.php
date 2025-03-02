@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Peternakan</h1>
    <a href="{{ route('peternakan.create') }}" class="btn btn-primary">Tambah Peternakan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama Peternakan</th>
                <th>Alamat Peternakan</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peternakans as $peternakan)
                <tr>
                    <td>{{ $peternakan->nama_peternakan }}</td>
                    <td>{{ $peternakan->alamat_peternakan }}</td>
                    <td>{{ $peternakan->email }}</td>
                    <td>{{ $peternakan->telepon }}</td>
                    <td>
                        <a href="{{ route('peternakan.show', $peternakan->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('peternakan.edit', $peternakan->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('peternakan.destroy', $peternakan->id) }}" method="POST" style="display:inline-block;">
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