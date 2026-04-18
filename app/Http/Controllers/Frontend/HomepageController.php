<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        // Category 23 (Top 3)
        $cat23 = Article::with(['category', 'author'])
            ->where('category', 23)
            ->where('status', 'approved')
            ->latest()
            ->take(3)
            ->get();

        // Category 38 (Top 2)
        $cat38 = Article::with(['category', 'author'])
            ->where('category', 38)
            ->where('status', 'approved')
            ->latest()
            ->take(2)
            ->get();

        // Latest from multiple categories (1 each)
        $categories = [18, 22, 21, 36, 27, 26, 35];
        $multiCategory = Article::with(['category', 'author'])
            ->whereIn('category', $categories)
            ->where('status', 'approved')
            ->latest()
            ->get()
            ->groupBy('category')
            ->map(fn($group) => $group->first());

        // Sidebar (category 20)
        $sidebarArticles = Article::where('category', 20)
            ->where('status', 'approved')
            ->latest()
            ->take(5)
            ->get();

        $data = Cache::remember('homepage_data', 600, function () {

            // Latest publications (one per category)
            $categories = [18, 21, 22, 23];

            $latestPublications = Article::with(['category', 'author'])
                ->whereIn('category', $categories)
                ->where('status', 'approved')
                ->latest()
                ->get()
                ->groupBy('category')
                ->map(fn($group) => $group->first())
                ->values();

            return [
                'latestPublications' => $latestPublications,
            ];
        });

        return view('frontend.home', compact('cat23', 'cat38', 'multiCategory', 'sidebarArticles', 'data'));
    }
}
