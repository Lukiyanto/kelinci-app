@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Perkawinan Kelinci</h1>
    <a href="{{ route('perkawinan-kelinci.create') }}" class="btn btn-primary">Tambah Perkawinan Kelinci</a>
    <table class="table">
        <thead>
            <tr>
                <th>Induk Jantan ID</th>
                <th>Induk Betina ID</th>
                <th>Tanggal Kawin</th>
                <th>Tanggal Lahir</th>
                <th>Status</th>
                <th>Jumlah Anak</th>
                <th>Jumlah Anak Hidup</th>
                <th>Jumlah Anak Mati</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($perkawinanKelincis as $perkawinanKelinci)
                <tr>
                    <td>{{ $perkawinanKelinci->induk_jantan_id }}</td>
                    <td>{{ $perkawinanKelinci->induk_betina_id }}</td>
                    <td>{{ $perkawinanKelinci->tanggal_kawin }}</td>
                    <td>{{ $perkawinanKelinci->tanggal_lahir }}</td>
                    <td>{{ $perkawinanKelinci->status }}</td>
                    <td>{{ $perkawinanKelinci->jumlah_anak }}</td>
                    <td>{{ $perkawinanKelinci->jumlah_anak_hidup }}</td>
                    <td>{{ $perkawinanKelinci->jumlah_anak_mati }}</td>
                    <td>{{ $perkawinanKelinci->catatan }}</td>
                    <td>
                        <a href="{{ route('perkawinan-kelinci.show', $perkawinanKelinci->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('perkawinan-kelinci.edit', $perkawinanKelinci->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('perkawinan-kelinci.destroy', $perkawinanKelinci->id) }}" method="POST" style="display:inline-block;">
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