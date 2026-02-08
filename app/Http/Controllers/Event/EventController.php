<?php

namespace App\Http\Controllers\Event;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::select('id', 'author_id', 'category', 'read_time', 'title', 'slug', 'subtitle', 'title_image', 'created_at')
            ->whereIn('category', ['31'])
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        if ($request->ajax()) {
            return view('frontend.events.partial', compact('articles'))->render();
        }

        return view('frontend.events.list', compact('articles'));
    }
}
