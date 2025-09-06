@extends('layouts.frontpage')
@section('title', $article->title)

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">

            {{-- Judul --}}
            <h1 class="fw-bold mb-3">{{ $article->title }}</h1>
            <p class="text-muted mb-4">
                <i class="bi bi-calendar-event"></i>
                Dipublikasikan pada {{ $article->created_at->format('d M Y') }}
            </p>

            {{-- Gambar --}}
            @if($article->image)
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/'.$article->image) }}"
                         class="img-fluid rounded shadow-sm"
                         alt="{{ $article->title }}">
                </div>
            @endif

            {{-- Konten --}}
            <div class="article-content mb-5">
                {!! $article->content !!}
            </div>

            {{-- Tombol kembali --}}
            <div class="d-flex">
                <a href="{{ route('articles') }}" class="btn btn-outline-secondary">
                    ← Kembali ke Artikel
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Tambahan CSS agar artikel nyaman dibaca --}}
<style>
    .article-content p {
        line-height: 1.8;
        margin-bottom: 1rem;
        font-size: 1.05rem;
        color: #333;
    }
    .article-content img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
        border-radius: 0.5rem;
    }
    .article-content h2, .article-content h3 {
        margin-top: 1.5rem;
        margin-bottom: 1rem;
        font-weight: bold;
    }
</style>
@endsection
