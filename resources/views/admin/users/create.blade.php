@extends('layouts.admin')
@section('title','Tambah User')
@section('content')

<div class="container mt-5" style="max-width: 500px;">
    <h1 class="text-center mb-4">Tambah User</h1>

    <form action="{{ route('admin.users.store') }}" method="POST" class="bg-white p-4 shadow rounded">
        @csrf

        <!-- Nama -->
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Masukkan nama" required>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
        </div>

        <!-- Tombol Simpan -->
        <button type="submit" class="btn btn-primary w-100 mb-3">Simpan</button>
    </form>
</div>

@endsection
