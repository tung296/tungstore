@extends('pages.layouts.index')
@section('content')

@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container">
		<div id="content">
			
			<form action="{{route('info')}}" method="post" class="beta-form-checkout">
                @csrf
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Tài khoản</h4>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" id="email" value="{{ $user->email }}" readonly>
                            @if($errors->has('email'))
                                <p class="text-danger mt-2">{{ $errors->first('email') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<label for="your_last_name">Name*</label>
							<input type="text" name="name" id="your_last_name" value="{{ $user->name }}">
                            @if($errors->has('name'))
                                <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" id="phone" value="{{ $user->phone }}">
                            @if($errors->has('phone'))
                                <p class="text-danger mt-2">{{ $errors->first('phone') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<label for="phone">New Password*</label>
							<input type="password" name="new_password" id="new_password" >
                            @if($errors->has('new_password'))
                                <p class="text-danger mt-2">{{ $errors->first('new_password') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<label for="phone">Old Password*</label>
							<input type="password" name="old_password" id="old_password" >
                            @if($errors->has('old_password'))
                                <p class="text-danger mt-2">{{ $errors->first('old_password') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Register</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection