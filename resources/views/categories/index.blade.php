@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Category Management</h2>
        </div>
        <div class="pull-right">
        @can('category-create')
            <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Permission</a>
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
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
  <?php $i=0;?>
    @foreach ($categories as $key => $category)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $category['name'] }}</td>
        <td>
            <input type="hidden" id="ur" value="{{ route('categories.destroy',['category'=>$category['id']])}}"/>
            <a class="btn btn-info" href="{{ route('categories.show',$category['id']) }}">Show</a>
            @can('category-edit')
                <a class="btn btn-primary" href="{{ route('categories.edit',$category['id']) }}">Edit</a>
            @endcan
            @can('category-delete')
            <a href="javascript:void(0);" class="ml-4 btn btn-danger" onclick="if (confirm('Are you sure?')) { $(this).find('form').submit();}">
                <form
                    action="{{ route('categories.destroy',['category'=>$category['id']]) }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                </form>
                <i class="mdi mdi-delete-sweep text-danger"></i><span> delete </span>
            </a>
            <!-- <button class="btn btn-danger delper" data-toggle="tooltip" data-id="{{ $category['id'] }}" data-placement="top">Delete</button> -->
            @endcan
        </td>
    </tr>
    @endforeach
</table>




@endsection