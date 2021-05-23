@extends('layouts.index')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Users Management</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
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
        <th>Email</th>
        <th>Roles</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($data1 as $user1)
    <tr>
        <input type="hidden" id="ur" value="users/"/>
        <td>{{ ++$i }}</td>
        <td>{{ $user1->name }}</td>
        <td>{{ $user1->email }}</td>
        <td>
            @if(!empty($user1->getRoleNames()))
            @foreach($user1->getRoleNames() as $v)
            <label class="badge badge-success">{{ $v }}</label>
            @endforeach
            @endif
        </td>
        <td>
            <a class="btn btn-info" href="{{ route('users.show',['user'=>$user1->id]) }}">Show</a>
            @can('user-edit')
            <a class="btn btn-primary" href="{{ route('users.edit',['user'=>$user1->id]) }}">Edit</a>
            @endcan
            @can('user-delete')
            <a href="javascript:void(0);" class="ml-4 btn btn-danger" onclick="if (confirm('Are you sure?')) { $(this).find('form').submit();}">
                <form
                    action="{{ route('users.destroy',['user'=>$user1->id]) }}"
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
{!! $data1->render() !!}
@endsection