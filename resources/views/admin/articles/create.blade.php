@extends('layouts.admin')
@section('title','Tambah Artikel')
@section('content')

<h1>Tambah Artikel</h1>
<a href="{{ route('admin.articles.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label>Judul Artikel</label>
        <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
    </div>

    <div class="mb-3">
        <label>Gambar (opsional)</label>
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Konten Artikel</label>
        <textarea name="content" class="form-control" rows="6" required>{{ old('content') }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

@endsection
