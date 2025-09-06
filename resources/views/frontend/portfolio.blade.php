@extends('layouts/frontpage')
@section('title', 'Portofolio')

@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center mb-5">Portofolio Kami</h1>

    <div class="row">
        @forelse($portfolios as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    @if($item->image)
                        <img src="{{ asset('storage/'.$item->image) }}" class="card-img-top" alt="{{ $item->title }}">
                    @else
                        <div class="bg-light text-center py-5">Tidak ada gambar</div>
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->title }}</h5>
                        <p class="card-text text-muted">{{ $item->description }}</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-center">Belum ada portofolio.</p>
        @endforelse
    </div>
</div>
@endsection

