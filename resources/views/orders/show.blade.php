@extends('layouts.index')
@section('content')
<div class="row">
   <div class="col-lg-12 margin-tb">
      <div class="pull-left">
         <h2>Show Order</h2>
      </div>
      <div class="pull-right">
         <a class="btn btn-primary" href="{{ route('orders.index') }}"> Back</a>
      </div>
   </div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
   <strong>Whoops!</strong> There were some problems with your input.<br><br>
   <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
   </ul>
</div>
@endif
<div class="row">
   <div class="col-xs-4 col-sm-4 col-md-4">
      <h3 class="text-center pt-2 pb-2">Thông tin đơn hàng</h3>
      <table class="table">
         <tbody>
            <tr>
               <td>Name</td>
               <td>{{ $order->name }}</td>
            </tr>
            <tr>
               <td>Phone</td>
               <td>{{ $order->phone }}</td>
            </tr>
            <tr>
               <td>Adress</td>
               <td>{{ $order->adress }}</td>
            </tr>
            <tr>
               <td>Total Money</td>
               <td>{{ number_format($order->total_money) }}</td>
            </tr>
            <tr>
               <td>Payment</td>
               <td>
                  @if($order->payment==1)
                  <p><span href="#" class="text-white bg-info p-1 pr-3 pl-3 rounded">COD</span></p>
                  @elseif($order->payment==2)
                  <p><span href="#" class="text-dark bg-light p-1 pr-3 pl-3 rounded">ATM</span></p>
                  @endif
               </td>
            </tr>
            <tr>
               <td>Status</td>
               <td>
                  @if($order->status==1)
                  <p ><span href="#" class="bg-secondary text-white p-1 pr-3 pl-3 rounded">Chưa xử lý</span></p>
                  @elseif($order->status==2)
                  <p ><span href="#" class="bg-primary text-white p-1 pr-3 pl-3 rounded">Đang giao hàng</span></p>
                  @else
                  <p ><span href="#" class="bg-success text-white p-1 pr-3 pl-3 rounded">Thành công</span></p>
                  @endif
               </td>
            </tr>
         </tbody>
      </table>
   </div>
   <div class="col-xs-1 col-sm-1 col-md-1"></div>
   <div class="col-xs-7 col-sm-7 col-md-7">
      <h3 class="text-center pt-2 pb-2">Chi tiết đơn hàng</h3>
      <table class="table">
         <thead class="thead-dark">
            <tr>
               <th scope="col">#</th>
               <th scope="col">Image</th>
               <th scope="col">Name</th>
               <th scope="col">Price</th>
               <th scope="col">Amount</th>
            </tr>
         </thead>
         <tbody>
            @foreach($order->order_detail as $item)
            @if(isset($item->product))
               <tr>
                  <th scope="row">1</th>
                  <td><img width="25%" src="{{ URL::asset('storage/'.$item->product->images) }}" alt="" class="pull-left"></td>
                  <td>{{ $item->product->name }}</td>
                  <td>{{ $item->product->price }}</td>
                  <td>{{ $item->qty }}</td>
               </tr>
            @endif
            @endforeach
         </tbody>
      </table>
   </div>
</div>
@endsection