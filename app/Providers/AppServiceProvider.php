<?php

namespace App\Providers;

use App\Models\Post;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        view()->composer('includes.sidebar', function ($view){
            $view->with('archives', Post::archives());
    });

        Schema::defaultStringLength(191);
    }
}
