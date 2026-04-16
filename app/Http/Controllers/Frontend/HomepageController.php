<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;

class HomepageController extends Controller
{
    public function index()
    {
        // Hero slider category 23
        $sliderPrimary = Article::with('category')
            ->where('category', 23)
            ->where('status', 'approved')
            ->latest()
            ->take(3)
            ->get();

        // Secondary slider category 38
        $sliderSecondary = Article::with('category')
            ->where('category', 38)
            ->where('status', 'approved')
            ->latest()
            ->take(2)
            ->get();

        // Mixed categories single latest each
        $mixedCategories = [18, 22, 21, 36, 27, 26, 35];

        $mixedSlides = collect();

        foreach ($mixedCategories as $catId) {
            $article = Article::with('category')
                ->where('category', $catId)
                ->where('status', 'approved')
                ->latest()
                ->first();

            if ($article) {
                $mixedSlides->push($article);
            }
        }

        // Latest publications section
        $publicationCategories = [18, 21, 22, 23];

        $latestPublications = collect();

        foreach ($publicationCategories as $catId) {
            $article = Article::with('category')
                ->where('category', $catId)
                ->where('status', 'approved')
                ->latest()
                ->first();

            if ($article) {
                $latestPublications->push($article);
            }
        }

        return view('frontend.home', compact(
            'sliderPrimary',
            'sliderSecondary',
            'mixedSlides',
            'latestPublications'
        ));
    }
}
