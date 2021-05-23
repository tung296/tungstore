<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Product;
use App\User;
use App\Category;
use App\Cart;
use App\Order;
use App\Oder_detail;
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
        $category = Category::find($id)->name;
        $products = Product::orderBy('id','DESC')->where('category_id',$id)->paginate(8);
        foreach($products as $product){
            $product->images = explode("||", $product->images)[0];
        }
        return view('pages.category.index',compact('products','category'));
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

    public function search(Request $request)
    {
        $category = $request->key;
        $products = Product::where('name','like','%'.$request->key.'%')->paginate(8);
        foreach($products as $product){
            $product->images = explode("||", $product->images)[0];
        }
        return view('pages.category.index',compact('products','category'));
    }

    public function add_cart($productId)
    {
        if (!$product = Product::find($productId)) {
            abort(404);
        } else {
            // dd(Cart::where('product_id',$productId));
            if($cart = Cart::where('product_id',$productId)->first()){
                $old_cart = Cart::where('product_id',$productId)->first();
                $qty = $old_cart->qty+1;
                $cart->update([
                    'qty'=> $qty,
                ]);
                return redirect()->route('home')
                        ->with('success','Update Cart successfully');
            }else{
                $user_id = Auth::guard('customer')->user()->id;
                $cart = Cart::create([
                    'user_id'=>$user_id,
                    'product_id'=>$productId,
                    'qty'=>1
                ]);
                return redirect()->route('home')
                        ->with('success','Add Cart successfully');
            }
        }

    }

    public function order(Request $request)
    {
        if($request->getMethod() == 'GET') {
            $user = Auth::guard('customer')->user();
            $carts = Cart::where('user_id',$user->id)->get();
            $total = 0;
            foreach($carts as $cart){
                $cart->product->images = explode("||", $cart->product->images)[0];
                $money =  $cart->qty * $cart->product->price;
                $total+=$money;
            }
            $data['cart']=$carts;
            $data['total']=$total;
            return view('pages.order.index',compact('user','data'));
        } else {
            // dd($request->all());
            $this -> validate($request, [
                'adress' => 'required|min:1|max:255',
                'phone' => 'required|min:9|max:10',
                'payment' => 'required|in:1',
                'cart' => ['required'],
                'qty' => 'numeric|min:0|max:1000'
            ],[
                'payment.in' => 'Chức năng thanh toán online đang phát triển',
            ]);

            if($request->payment==1){
                $order = Order::create([
                    'user_id'=>$request->id,
                    'payment'=>$request->payment,
                    'status'=>1,
                    'name'=>$request->name,
                    'phone'=>$request->phone,
                    'adress'=>$request->adress,
                    'note'=>$request->note,
                    'total_money'=>$request->total_money,
                ]);
                foreach($request->cart as $item){
                    $order_deteil = Oder_detail::create([
                        'order_id'=>$order->id,
                        'product_id'=>Cart::find($item)->product->id,
                        'qty'=>Cart::find($item)->product->qty,
                        Cart::find($item)->delete()
                    ]);
                }
                return redirect()->route('home')
                        ->with('success','Đặt hàng thành công');
            }else{
                return redirect()->route('home')
                        ->with('success','Đặt hàng thành công');
            }
        }
    }

    public function delcart($id)
    {
        Cart::find($id)->delete();
        return redirect()->route('home')
                        ->with('success','Xoá thành công');
    }
    public function changeqty($id,$qty)
    {
        if($qty>0){
            $cart = Cart::find($id);
            $cart->qty = $qty;
            $cart->save();
        }else{
            $cart = Cart::find($id)->delete();
        }
        echo "ok";
        // return redirect()->route('home')
        //                 ->with('success','Update thành công');
    }
    public function list()
    {
        $orders = Auth::guard('customer')->user()->order;
        return view('pages.order.list',compact('orders'));
    }
}
