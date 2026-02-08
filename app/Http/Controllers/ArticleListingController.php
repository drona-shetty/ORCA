<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleListingController extends Controller
{
    /**
     * Display a listing of articles.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Fetch articles with related tags, authors, and category
        $articles = Article::with(['tags', 'authors', 'category'])
            ->paginate(10); // Paginate for better performance

        return view('frontend.article.listing', compact('articles'));
    }
}
