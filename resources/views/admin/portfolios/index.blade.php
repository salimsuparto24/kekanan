@extends('layouts.admin')
@section('title', 'Daftar Portofolio')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Daftar Portofolio</h2>
    <a href="{{ route('admin.portfolios.create') }}" class="btn btn-primary">Tambah Portofolio</a>
</div>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($portfolios as $portfolio)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $portfolio->title }}</td>
            <td>{{ Str::limit($portfolio->description, 50) }}</td>
            <td>
                @if($portfolio->image)
                    <img src="{{ asset('storage/' . $portfolio->image) }}" width="80">
                @endif
            </td>
            <td>
                <a href="{{ route('admin.portfolios.edit', $portfolio->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('admin.portfolios.destroy', $portfolio->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" class="text-center">Belum ada data</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
