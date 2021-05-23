@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Banner Management</h2>
        </div>
        <div class="pull-right">
        @can('banner-create')
            <a class="btn btn-success" href="{{ route('banners.create') }}"> Create New Banner</a>
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
     <th>Link</th>
     <th width="280px">Action</th>
  </tr>
  @foreach ($banners as $key => $banner)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $banner->name }}</td>
        <td><img width="150px" src="{{URL::asset('storage/'.$banner->image)}}" alt="{{$banner->image}}"></td>
        <td>
            <input type="hidden" id="ur" value="banners/"/>
            <a class="btn btn-info" href="{{ route('banners.show',$banner->id) }}">Show</a>
            @can('banner-edit')
                <a class="btn btn-primary" href="{{ route('banners.edit',$banner->id) }}">Edit</a>
            @endcan
            @can('banner-delete')
            <a href="javascript:void(0);" class="ml-4 btn btn-danger" onclick="if (confirm('Are you sure?')) { $(this).find('form').submit();}">
                <form
                    action="{{ route('banners.destroy',['banner'=>$banner->id]) }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                </form>
                <i class="mdi mdi-delete-sweep text-danger"></i><span> delete </span>
            </a>
            <!-- <button class="btn btn-danger delper" data-toggle="tooltip" data-id="{{ $banner->id }}" data-placement="top">Delete</button> -->
            @endcan
        </td>
    </tr>
    @endforeach

</table>




@endsection