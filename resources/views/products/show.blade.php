@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            {{ $product->image }}
            <br>
            @foreach($product->images as $img)
            <img style="width: inherit;height: 150px;" src="{{URL::asset('storage/'.$img)}}" alt="{{$img}}">
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Category:</strong>
            {{ $product->category->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 des">
            <strong>Des:</strong>
            {!!$product->des!!}
        </div>
</div>
@endsection