@extends('layouts.index')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Role</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
            <strong>Permission:</strong>
            <br/> 
            <table class="table table-bordered table-hover" id="dataTables1">
                <thead>
                    <th>Chọn</th>
                    <th>Tên quyền</th>
                </thead>
                <tbody>
                    @foreach($permission as $value)
                        <tr> 
                            <td>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}</td>
                            <td>{{ $value->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <input type="hidden" name="arr" id="data" value="" />
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" id="check" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}


@endsection