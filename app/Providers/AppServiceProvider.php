<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
{
    Paginator::useBootstrap();

    // Force HTTPS in production
    if (app()->environment('production')) {
        URL::forceScheme('https');
    }

    // Log all SQL queries
    \Illuminate\Support\Facades\DB::listen(function ($query) {
        \Illuminate\Support\Facades\Log::info("SQL: " . $query->sql);
        \Illuminate\Support\Facades\Log::info("Bindings: " . json_encode($query->bindings));
        \Illuminate\Support\Facades\Log::info("Time: " . $query->time . "ms");
    });
}
}
