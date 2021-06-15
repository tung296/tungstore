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
use Illuminate\Support\Str;
use Mail;
use Hash;


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
                'email' => 'required|email|min:0|max:100',
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

    public function info(Request $request)
    {
        if($request->getMethod() == 'GET') {
            if($user = Auth::guard('customer')->user()) {
                return view('pages.auth.info',compact('user'));
            }
            return view('pages.auth.login');
        } else {
            
            $this -> validate($request, [
                'old_password' => 'required|min:6|max:30',
                'email' => 'required|email|min:0|max:100',
                'phone' => 'required',
            ], [
                'email.required' => 'Bạn chưa nhập email',
                'phone.required' => 'Bạn chưa nhập số điện thoại',
                'email.email' => 'Email không đúng định dạng.',
                'email.min' => 'Mật khẩu từ 0 đến 100 kí tự',
                'email.max' => 'Mật Khẩu từ 0 đến 100 kí tự',
                'old_password.required' => 'Bạn chưa nhập mật khẩu',
                'old_password.min' => 'Mật khẩu từ 6 đến 30 kí tự',
                'old_password.max' => 'Mật Khẩu từ 6 đến 30 kí tự',
            ]);
            $fi = User::where("email", $request->email)->where("type", 2)->first();
            if(!$fi) {
                return back()->with('error', 'Email không tồn tại');
            }
            if (!Hash::check($request->old_password, $fi->password)) {
                return back()->with('error', 'Mật khẩu không chính xác');
            }
            $password = $fi->password;
            if($request->new_password){
                $this -> validate($request, [
                    'new_password' => 'min:6|max:30',
                ],
                [
                    'new_password.min' => 'Mật khẩu từ 6 đến 30 kí tự',
                    'new_password.max' => 'Mật Khẩu từ 6 đến 30 kí tự',
                ]);
                $password = bcrypt($request->new_password);
            }

                $fi->password = $password;
                $fi->name = $request->name;
                $fi->phone = $request->phone;
                $fi->save();
                return redirect()->route('home')->with('success', 'Thay đổi thành công');
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
        $user = Auth::user();
        // dd($user);
        if (!$product = Product::find($productId)) {
            abort(404);
        } else {
            // dd(Cart::where('product_id',$productId));
            if($cart = Cart::where('product_id',$productId)->where('user_id',$user->id)->first()){
                $cart->update([
                    'qty'=> $cart->qty+1,
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
            $this -> validate($request, [
                'adress' => 'required|min:1|max:255',
                'phone' => 'required|min:9|max:10',
                'payment' => 'required|in:1,2',
                'cart' => ['required'],
                'qty' => 'numeric|min:0|max:1000'
            ],[
                // 'payment.in' => 'Chức năng thanh toán online đang phát triển',
            ]);

            if($request->payment==1){
                $order = Order::create([
                    'user_id'=>$request->id,
                    'payment'=>$request->payment,
                    'status'=>1,
                    'name'=>$request->name,
                    'phone'=>$request->phone,
                    'adress'=>$request->adress,
                    // 'note'=>$request->note,
                    'total_money'=>$request->total_money,
                ]);
                foreach($request->cart as $item){
                    $order_deteil = Oder_detail::create([
                        'order_id'=>$order->id,
                        'product_id'=>Cart::find($item)->product->id,
                        'qty'=>Cart::find($item)->qty,
                        Cart::find($item)->delete()
                    ]);
                }
                return view('pages.complete.index');
            }
            if($request->payment==2){
                session_start();
                $_SESSION['order'] = $request->all();
                $total_money=$request->total_money;
                return view('pages.vnpay.index',compact('total_money'));
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


    public function createPayment(Request $request)
    {

        // dd($request->toArray());
        $vnp_TxnRef = $random = Str::random(10);
        $vnp_OrderInfo = $request->order_desc;
        $vnp_OrderType = 'billpaymentphonetungstore';
        $vnp_Amount = (int)str_replace(',', '', $request->amount) * 100;
        $vnp_Locale = 'vn';
        $vnp_BankCode = $request->bank_code;
        $vnp_IpAddr = request()->ip();

        $inputData = array(
            "vnp_Version" => "2.0.0",
            "vnp_TmnCode" => env('VNP_TMN_CODE'),
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => route('vnpay.return'),
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . $key . "=" . $value;
            } else {
                $hashdata .= $key . "=" . $value;
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = env('VNP_URL') . "?" . $query;
        if (env('VNP_HASH_SECRET')) {
        // $vnpSecureHash = md5($vnp_HashSecret . $hashdata);
            $vnpSecureHash = hash('sha256', env('VNP_HASH_SECRET') . $hashdata);
            $vnp_Url .= 'vnp_SecureHashType=SHA256&vnp_SecureHash=' . $vnpSecureHash;
        }
        
        return redirect($vnp_Url);

    }

    public function returnPayment(Request $request)
    {
        session_start();
        if(isset($_SESSION['order'])){
            $session_order = json_decode(json_encode($_SESSION['order']));
            if($request->vnp_ResponseCode==00){
                $order = Order::create([
                    'user_id'=>$session_order->id,
                    'payment'=>$session_order->payment,
                    'status'=>1,
                    'name'=>$session_order->name,
                    'phone'=>$session_order->phone,
                    'adress'=>$session_order->adress,
                    // 'note'=>$session_order->note,
                    'total_money'=>$session_order->total_money,
                    ]);
                    foreach($session_order->cart as $item){
                        // dd(Cart::find($item));
                        // dd($item);
                        // dd(Cart::find($item)->product->qty);
                        $order_deteil = Oder_detail::create([
                            'order_id'=>$order->id,
                            'product_id'=>Cart::find($item)->product->id,
                            'qty'=>Cart::find($item)->qty,
                            Cart::find($item)->delete()
                            ]);
                            unset($_SESSION['order']);
                        }
                    return view('pages.complete.index');
            }else{
                return redirect()->route('home')
                    ->with('error','Thanh toán thất bại');
            }
        }
        return redirect()->route('home')
                    ->with('error','Đặt hàng thất bại');
    }

    public function forgot_password(Request $request)
    {
        if($request->getMethod() == 'GET') {
            return view('pages.auth.forgot_password');
        } else {
            $fi = User::where("email", $request->email)->where("type", 2)->first();
            if(!$fi) {
                return back()->with('error', 'Email không tồn tại');
            }
            $rand = RAND();
            Mail::send('mail_laymk', compact('rand'), function($message) use ($request) {
                $message->to($request->email, 'Member')->subject('Lấy mật khẩu');
                $message->from('DTC165D4802010266@ictu.edu.vn','Admin');
            });
            $fi->password = bcrypt($rand);
            $fi->save();
            return back()->with('thongbao', 'Gửi thành công, vui lòng check mail');
        }
    }
}
