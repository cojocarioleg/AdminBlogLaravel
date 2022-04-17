<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;

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
        //paginate
        Paginator::useBootstrap();

        //cache



        //popular an category for posts for sidebar

        view()->composer('layouts.sidebar', function($view){

            if(Cache::has('cats')){
                $cats=Cache::get('cats');
            } else{
                $cats= Category::withCount('posts')->orderBy('posts_count', 'desc')->get();
                Cache::put('cats', $cats, 30);
            }

            $view->with('popular_posts', Post::orderBy('view', 'desc')->limit(3)->get());
            $view->with('cats', $cats);
        });


  //popular an category for posts for footer
        view()->composer('layouts.footer', function($view){

            if(Cache::has('cats')){
                $cats=Cache::get('cats');
            } else{
                $cats= Category::withCount('posts')->orderBy('posts_count', 'desc')->limit(3)->get();
                Cache::put('cats', $cats, 30);
            }

            $view->with('popular_posts', Post::orderBy('view', 'desc')->limit(3)->get());
            $view->with('recent_posts', Post::orderBy('id', 'desc')->limit(3)->get());
            $view->with('cats', $cats);
        });

    }
}
