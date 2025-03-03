@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail User</h1>
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}" readonly>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" class="form-control" value="{{ $user->email }}" readonly>
    </div>
    <div class="form-group">
        <label for="role">Role</label>
        <input type="text" name="role" class="form-control" value="{{ $user->role }}" readonly>
    </div>
    <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection