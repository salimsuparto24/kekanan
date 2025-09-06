@extends('layouts.admin')
@section('title','Edit Portofolio')
@section('content')

<h1>Edit Portofolio</h1>
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

<form action="{{ route('admin.portfolios.update', $portfolio) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul Portofolio</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $portfolio->title) }}" required>
    </div>

    <div class="mb-3">
        <label>Gambar (opsional)</label><br>
        @if($portfolio->image)
            <img src="{{ asset('storage/'.$portfolio->image) }}" width="100" class="mb-2"><br>
        @endif
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="description" class="form-control" rows="5">{{ old('description', $portfolio->description) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
