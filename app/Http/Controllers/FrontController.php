<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Product;

class FrontController extends Controller
{
    public function home()
    {
        $banners = Banner::all();
        $new_products = Product::orderBy('id','DESC')->where('status',1)->get()->take(8);
        foreach($new_products as $new_product){
            $new_product->images = explode("||", $new_product->images)[0];
        }
        return view('pages.home.index',compact('banners','new_products'));
    }

    public function product_type()
    {
        return view('pages.product_type.index');
    }

    public function product()
    {
        return view('pages.product.index');
    }

    public function contact()
    {
        return view('pages.contacts.index');
    }

    public function about()
    {
        return view('pages.about.index');
    }
}
