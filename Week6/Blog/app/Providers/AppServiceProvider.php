<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Categories;
use App\Posts;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        view()->composer('header', function ($valueResult)
        {
           $arrayCategory = Categories::all();
           $valueResult->with('arrayCategory', $arrayCategory); 
        });

        view()->composer('pages.layout', function ($valueResult)
        {
           $arrayViewPost = Posts::all()->sortByDesc('post_view')->take(4);
           $valueResult->with('arrayViewPost', $arrayViewPost); 
        });

        view()->composer('footer', function ($valueResult)
        {
           $arrayCategory = Categories::all();
           $valueResult->with('arrayCategory', $arrayCategory); 
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
