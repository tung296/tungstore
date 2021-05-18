@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Permissions Management</h2>
        </div>
        <div class="pull-right">
        @can('permission-create')
            <a class="btn btn-success" href="{{ route('permissions.create') }}"> Create New Permission</a>
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
    @foreach ($permissions as $key => $permission)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $permission->name }}</td>
        <td>
            <input type="hidden" id="ur" value="permissions/"/>
            <a class="btn btn-info" href="{{ route('permissions.show',$permission->id) }}">Show</a>
            @can('permission-edit')
                <a class="btn btn-primary" href="{{ route('permissions.edit',$permission->id) }}">Edit</a>
            @endcan
            @can('permission-delete')
            <button class="btn btn-danger delper" data-toggle="tooltip" data-id="{{ $permission->id }}" data-placement="top">Delete</button>
                <!-- {!! Form::open(['method' => 'DELETE','route' => ['permissions.destroy', $permission->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
                {!! Form::close() !!} -->
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $permissions->render() !!}


@endsection