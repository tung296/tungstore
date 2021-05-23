<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Cart;
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
            $data['user']=$auth;
            if($auth){
                $cart_all = Cart::where('user_id',$auth->id)->get();
                $total_all = 0;
                foreach($cart_all as $cart){
                    $cart->product->images = explode("||", $cart->product->images)[0];
                    $money =  $cart->qty * $cart->product->price;
                    $total_all+=$money;
                }
                $data['cart']=$cart_all;
                $data['total']=$total_all;
                // dd($data['cart'][0]->product);
                // $view->with('data', $data);
            }
            $view->with('data', $data);
        });
    }
}
