<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use Auth;

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
        view()->composer('pages.layouts.header',function($view){
            $categories = Category::all();
            $view->with('categories',$categories);
        });

        view()->composer('*',function($view){
            $auth = Auth::guard('customer')->user();
            $view->with('user', $auth);
        });
    }
}
