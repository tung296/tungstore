@extends('pages.layouts.index')
@section('content')

@if ($message = Session::get('error'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<div class="container">
		<div id="content">
			
			<form action="{{route('signup')}}" method="post" class="beta-form-checkout">
                @csrf
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng kí</h4>
						<div class="space20">&nbsp;</div>
						<div class="form-block">
							<label for="email">Email address*</label>
							<input type="email" name="email" id="email">
                            @if($errors->has('email'))
                                <p class="text-danger mt-2">{{ $errors->first('email') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<label for="your_last_name">Name*</label>
							<input type="text" name="name" id="your_last_name" >
                            @if($errors->has('name'))
                                <p class="text-danger mt-2">{{ $errors->first('name') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<label for="phone">Phone*</label>
							<input type="text" name="phone" id="phone" >
                            @if($errors->has('phone'))
                                <p class="text-danger mt-2">{{ $errors->first('phone') }}</p>
                            @endif
						</div>
						<div class="form-block">
							<label for="phone">Password*</label>
							<input type="password" name="password" id="password" >
                            @if($errors->has('password'))
                                <p class="text-danger mt-2">{{ $errors->first('password') }}</p>
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