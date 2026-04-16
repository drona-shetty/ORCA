<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;

class WebLayoutComposer
{
    public function compose(View $view)
    {
        $categoryIds = [23, 20, 18];
        
        $articles = Article::whereIn('category', $categoryIds)
            ->where('status', 'approved')
            ->orderBy('created_at', 'desc')
            ->get([
                'id',
                'author_id',
                'category',
                'read_time',
                'title',
                'slug',
                'subtitle',
                'title_image',
                'created_at'
            ])
            ->groupBy('category')
            ->map(function ($group) {
                return $group->first(); // latest per category
            })
            ->values();

        /*
        |--------------------------------------------------------------------------
        | Load related categories (single query)
        |--------------------------------------------------------------------------
        */
        $categoryIdsUsed = $articles->pluck('category')->unique();

        $categories = Category::whereIn('id', $categoryIdsUsed)
            ->get()
            ->keyBy('id');

        /*
        |--------------------------------------------------------------------------
        | Load authors (single query)
        |--------------------------------------------------------------------------
        */
        $authorIds = $articles->map(function ($article) {
            return unserialize($article->author_id);
        })->flatten()->unique();

        $authors = User::whereIn('id', $authorIds)
            ->get()
            ->keyBy('id');

        /*
        |--------------------------------------------------------------------------
        | Attach category + author to article (manual eager loading)
        |--------------------------------------------------------------------------
        */
        $articles->transform(function ($article) use ($categories, $authors) {

            $article->categoryData = $categories[$article->category] ?? null;

            $authorId = unserialize($article->author_id)[0] ?? null;
            $article->authorData = $authors[$authorId] ?? null;

            return $article;
        });

        $events = Article::select('id', 'slug', 'title', 'created_at')
            ->where('category', 31)
            ->latest()
            ->take(3)
            ->get();

        $view->with([
            'layout_latest_articles' => $articles,
            'events' => $events
        ]);
    }
}