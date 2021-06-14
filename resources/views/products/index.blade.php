@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Product Management</h2>
        </div>
        <div class="pull-right">
        @can('product-create')
            <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            @endcan
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
     <th>Sku</th>
     <th>Price</th>
     <th>Amount</th>
     <th>Image</th>
     <!-- <th>Link</th> -->
     <th width="280px">Action</th>
  </tr>
  @foreach ($products as $key => $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->sku }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->amount }}</td>
        <td style="max-width: 150px;"><img width="150px" src="{{URL::asset('storage/'.$product->images)}}" alt="{{$product->image}}"></td>
        <td>
            <input type="hidden" id="ur" value="products/"/>
            <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
            @can('product-edit')
                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
            @endcan
            @can('product-delete')
            <a href="javascript:void(0);" class="ml-4 btn btn-danger" onclick="if (confirm('Are you sure?')) { $(this).find('form').submit();}">
                <form
                    action="{{ route('products.destroy',['product'=>$product->id]) }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                </form>
                <i class="mdi mdi-delete-sweep text-danger"></i><span> delete </span>
            </a>
            @endcan
        </td>
    </tr>
    @endforeach

</table>




@endsection