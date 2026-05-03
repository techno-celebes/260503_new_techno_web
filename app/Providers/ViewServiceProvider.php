<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Share latest posts to all views that use layouts.main
        View::composer('layouts.main', function ($view) {
            $view->with('posts', Post::with('user')->latest()->get());
        });
    }
}
