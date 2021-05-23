@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
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
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <input type="hidden" id="ur" value="roles/"/>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
            <a href="javascript:void(0);" class="ml-4 btn btn-danger" onclick="if (confirm('Are you sure?')) { $(this).find('form').submit();}">
                <form
                    action="{{ route('roles.destroy',['role'=>$role->id]) }}"
                    method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                </form>
                <i class="mdi mdi-delete-sweep text-danger"></i><span> delete </span>
            </a>
                <!-- <button class="btn btn-danger delper" data-toggle="tooltip" data-id="{{ $role->id }}" data-placement="top">Delete</button> -->
                <!-- {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!} -->
            @endcan
        </td>
    </tr>
    @endforeach
</table>


{!! $roles->render() !!}


@endsection