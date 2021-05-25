<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $month = date('m');
        $orders = Order::whereMonth('created_at', $month)->orderBy('id','DESC')->get();
        $orders1 = Order::whereMonth('created_at', $month)->where('status',1)->orderBy('id','DESC')->get();
        $orders3 = Order::whereMonth('created_at', $month)->where('status',2)->orderBy('id','DESC')->get();
        $interest = 0;
        foreach($orders3 as $order3){
            foreach($order3->order_detail as $order_details){
                // dd((int)$order_details->qty *((float)$order_details->product->price - (float)$order_details->product->import_price));
                $interest += (int)$order_details->qty *((float)$order_details->product->price - (float)$order_details->product->import_price);
            }
        }

        // dd($interest);
        return view('dashboard.index',compact('orders','orders1','orders3','interest'));
    }
}
