<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Portfolio;

class FrontendController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->take(3)->get();
        $portfolios = Portfolio::latest()->take(6)->get();
        return view('frontend.home', compact('articles', 'portfolios'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function articles()
    {
        $articles = Article::latest()->paginate(6);
        return view('frontend.articles', compact('articles'));
    }

    public function articleDetail($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('frontend.article-detail', compact('article'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::latest()->paginate(9);
        return view('frontend.portfolio', compact('portfolios'));
    }
    public function layanan()
    {
        return view('frontend.layanan');
    }
    public function kontak()
    {
        return view('frontend.kontak');
    }
}
