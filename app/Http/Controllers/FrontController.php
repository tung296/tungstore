<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Product;
use App\User;
use Illuminate\Support\Facades\Validator;
use Auth;

class FrontController extends Controller
{
    public function home()
    {
        $banners = Banner::all();
        $new_products = Product::orderBy('id','DESC')->where('status',1)->paginate(8);
        foreach($new_products as $new_product){
            $new_product->images = explode("||", $new_product->images)[0];
        }
        $old_products = Product::orderBy('id','DESC')->where('status',2)->paginate(8);
        foreach($old_products as $old_product){
            $old_product->images = explode("||", $old_product->images)[0];
        }
        return view('pages.home.index',compact('banners','new_products','old_products'));
    }

    public function product_detail($id)
    {
        $product = Product::find($id);
        $product->images = explode("||", $product->images)[0];

        $new_products = Product::orderBy('id','DESC')->where('status',1)->get()->take(4);
        foreach($new_products as $new_product){
            $new_product->images = explode("||", $new_product->images)[0];
        }

        return view('pages.product.index',compact('product','new_products'));
    }

    public function category($id)
    {
        $products = Product::orderBy('id','DESC')->where('category_id',$id)->paginate(8);
        foreach($products as $product){
            $product->images = explode("||", $product->images)[0];
        }
        return view('pages.category.index',compact('products'));
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

    public function signup(Request $request)
    {
        if($request->getMethod() == 'GET') {
            if(Auth::guard('customer')->user()) {
                return redirect()->route('home');
            }
            return view('pages.auth.signup');
        } else {
            $validator = Validator::make($request->all(), [
                'name' => ['required', 'min:3', 'max:255'],
                'email' => ['required', 'min:6', 'max:255', 'email', 'unique:users'],
                'phone' => 'required',
                'password' => ['required', 'min:6', 'max:32'],
            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'password' => bcrypt($request->password),
                    'type' => 2
                ]);

                if($user){
                    return redirect()->route('login')->with('thongbao', 'Register successfully.');
                }
                return redirect()->back()->with('error','User created error');
            }
        }
    
    }

    public function login(Request $request)
    {
        if($request->getMethod() == 'GET') {
            if(Auth::guard('customer')->user()) {
                return redirect()->route('home');
            }
            return view('pages.auth.login');
        } else {
            $this -> validate($request, [
                'password' => 'required|min:6|max:30',
                'email' => 'required|email',
            ], [
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Email không đúng định dạng.',
                'email.min' => 'Mật khẩu từ 3 đến 255 kí tự',
                'email.max' => 'Mật Khẩu từ 3 đến 255 kí tự',
                'password.required' => 'Bạn chưa nhập mật khẩu',
                'password.min' => 'Mật khẩu từ 6 đến 30 kí tự',
                'password.max' => 'Mật Khẩu từ 6 đến 30 kí tự',
            ]);
            if(Auth::guard('customer')->attempt($request->only(['email', 'password']))){
                return redirect()->intended('/');
            } else return redirect()->route('login')->with('thongbao', 'Tài khoản mật khẩu không chính xác');
        }
    }

    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('login');
    }

    public function add_cart($productId)
    {
        if (!$product = Product::find($productId)) {
            abort(404);
        } else {
            dd('Ok');
        }

    }
}
