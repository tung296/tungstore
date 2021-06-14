@extends('pages.layouts.index')
@section('content')

<div class="container">
		<div id="content">
			
			<form action="{{ route('forgot_password') }}" method="post" class="beta-form-checkout">
                @csrf
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Quên mật khẩu</h4>
						<div class="space20">&nbsp;</div>

                        @if(session('thongbao'))
                            <p class="text-success text-center">
                                {{session('thongbao')}}
                            </p>
                        @endif
                        @if(session('error'))
                            <p class="text-danger text-center">
                                {{session('error')}}
                            </p>
                        @endif
				
						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Nhap email cua ban">
                            @if($errors->has('email'))
                                <p class="text-danger mt-2">{{ $errors->first('email') }}</p>
                            @endif
						</div>
						<!-- <div class="form-block">
							<label for="password">Password*</label>
							<input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Nhap mat khau cua ban">
                            @if($errors->has('email'))
                                <p class="text-danger mt-2">{{ $errors->first('email') }}</p>
                            @endif
						</div> -->
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Send</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
