@extends('layouts.admin')
@section('title','Edit Artikel')
@section('content')

<h1>Edit Artikel</h1>
<a href="{{ route('admin.articles.index') }}" class="btn btn-secondary mb-3">← Kembali</a>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('admin.articles.update', $article) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Judul Artikel</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $article->title) }}" required>
    </div>

    <div class="mb-3">
        <label>Gambar (opsional)</label><br>
        @if($article->image)
            <img src="{{ asset('storage/'.$article->image) }}" width="100" class="mb-2"><br>
        @endif
        <input type="file" name="image" class="form-control">
    </div>

    <div class="mb-3">
        <label>Konten Artikel</label>
        <textarea name="content" class="form-control" rows="6" required>{{ old('content', $article->content) }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection
