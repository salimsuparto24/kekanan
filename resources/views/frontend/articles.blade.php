@extends('layouts.frontpage')
@section('title','Artikel')

@section('content')
<div class="container py-5">
    {{-- Heading --}}
    <div class="text-center mb-5">
        <h1 class="fw-bold">Artikel</h1>
        <p class="text-muted">Temukan informasi, berita, dan wawasan terbaru</p>
    </div>

    {{-- Grid Artikel --}}
    <div class="row g-4">
        @foreach($articles as $article)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card h-100 shadow-sm border-0 hover-shadow">
                    {{-- Gambar --}}
                    @if($article->image)
                        <img src="{{ asset('storage/'.$article->image) }}" 
                             class="card-img-top" 
                             alt="{{ $article->title }}" 
                             style="height:220px; object-fit:cover;">
                    @else
                        <img src="https://via.placeholder.com/400x220?text=No+Image" 
                             class="card-img-top" 
                             alt="No Image">
                    @endif

                    {{-- Konten --}}
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">
                            {{ Str::limit($article->title, 60) }}
                        </h5>
                        <p class="card-text text-muted">
                            {{ Str::limit(strip_tags($article->content), 100) }}
                        </p>
                        <div class="mt-auto">
                            <a href="{{ url('/artikel/'.$article->slug) }}" 
                               class="btn btn-outline-primary btn-sm">
                                Baca Selengkapnya
                            </a>
                        </div>
                    </div>

                    {{-- Footer Info --}}
                    <div class="card-footer bg-white text-muted small">
                        <i class="bi bi-calendar-event"></i> {{ $article->created_at->format('d M Y') }}
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-5">
        {{ $articles->links() }}
    </div>
</div>

{{-- CSS tambahan untuk efek hover --}}
<style>
    .hover-shadow:hover {
        transform: translateY(-5px);
        transition: 0.3s;
        box-shadow: 0 10px 20px rgba(0,0,0,0.15) !important;
    }
</style>
@endsection
