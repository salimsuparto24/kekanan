@extends('layouts.admin')
@section('title','Tambah Portofolio')
@section('content')

<h1>Tambah Portofolio</h1>
<a href="{{ route('admin.portfolios.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.portfolios.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Judul Portofolio</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
    </div>

    <div class="mb-3">
        <label>Gambar (opsional)</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
