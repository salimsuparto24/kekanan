@extends('layouts.admin')
@section('title','Manajemen Artikel')
@section('content')

<h1>Manajemen Artikel</h1>
<a href="{{ route('admin.articles.create') }}" class="btn btn-primary mb-3">+ Tambah Artikel</a>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>
    @foreach($articles as $index => $article)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $article->title }}</td>
        <td>
            @if($article->image)
                <img src="{{ asset('storage/'.$article->image) }}" width="80">
            @endif
        </td>
        <td>
            <a href="{{ route('admin.articles.edit', $article) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('admin.articles.destroy', $article) }}" method="POST" style="display:inline-block;">
                @csrf @method('DELETE')
                <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $articles->links() }}

@endsection
