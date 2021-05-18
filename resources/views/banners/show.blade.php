@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Post</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('banners.index') }}"> Back</a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $banner->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Image:</strong>
            {{ $banner->image }}
            <br>
            <img src="{{URL::asset('storage/'.$banner->image)}}" alt="{{$banner->image}}">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Link:</strong>
            {{ $banner->link }}
        </div>
    </div>
</div>
@endsection