@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Order Management</h2>
        </div>
        <div class="pull-right">
            <!-- @can('banner-create')
                <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Banner</a>
            @endcan -->
        </div>
    </div>
</div>


@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table class="table table-bordered">
  <tr>
     <th>STT</th>
     <th>Name</th>
     <th>Phone</th>
     <th>Total Money</th>
     <th>Status</th>
     <th>Payment</th>
     <!-- <th>Link</th> -->
     <th width="280px">Action</th>
  </tr>
  @foreach ($orders as $key => $order)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $order->name }}</td>
        <td>{{ $order->phone }}</td>
        <td>{{ $order->total_money }}</td>
        <td class="text-center align-middle">
            @if($order->status==1)
            <p class="text-center"><span href="#" class="bg-secondary text-white p-1 pr-3 pl-3 rounded">Chưa xử lý</span></p>
            @elseif($order->status==2)
            <p class="text-center"><span href="#" class="bg-primary text-white p-1 pr-3 pl-3 rounded">Đang giao hàng</span></p>

            @else
            <p class="text-center"><span href="#" class="bg-success text-white p-1 pr-3 pl-3 rounded">Thành công</span></p>
            @endif
        <td class="text-center align-middle">
            @if($order->payment==1)
                <p class="text-center"><span href="#" class="text-white bg-info p-1 pr-3 pl-3 rounded">COD</span></p>
            @else
                <p class="text-center"><span href="#" class="text-dark bg-light p-1 pr-3 pl-3 rounded">ATM</span></p>
            @endif    
        </td>
        <td class="text-center">
            <!-- <input type="hidden" id="ur" value="orders/"/> -->
            @can('order-list')
            <a class="btn btn-info" href="{{ route('orders.show',$order->id) }}">Show</a>
            @endcan
            @can('order-edit')
                <a class="btn btn-primary" href="{{ route('orders.edit',$order->id) }}">Edit</a>
            @endcan
            <!-- @can('order-delete')
            <a href="javascript:void(0);" class="ml-4 btn btn-danger" onclick="if (confirm('Are you sure?')) { $(this).find('form').submit();}">
                <form
                    action="{{ route('orders.destroy',['order'=>$order->id]) }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                </form>
                <i class="mdi mdi-delete-sweep text-danger"></i><span> delete </span>
            </a>
            @endcan -->
        </td>
    </tr>
    @endforeach

</table>

{{ $orders->links() }}




@endsection