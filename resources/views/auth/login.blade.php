@extends('layouts.sources')
@section('body')
<div id="loading">
    <div id="loading-center">
    </div>
 </div>
 <section class="sign-in-page">
    <div class="container p-0" id="sign-in-page-box">
    
          <div class="bg-white form-container sign-in-container">
              <div class="sign-in-page-data">
                <div class="sign-in-from w-100 m-auto">
                    <h1 class="mb-3 text-center">Sign in</h1>
                    <p class="text-center text-dark">Enter your email address and password to access admin panel.</p>
                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors -> all() as $err)
                                {{$err}}
                            @endforeach
                        </div>
                    @endif
                    <form class="mt-4" method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email address</label>
                            <input type="email" name="email" class="form-control mb-0" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Password</label>
                            <a href="#" class="float-right">Forgot password?</a>
                            <input type="password" name="password" class="form-control mb-0" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <div class="d-inline-block w-100">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label" for="customCheck1">Remember Me</label>
                            </div>
                        </div>
                        <div class="sign-info">
                            <button type="submit" class="btn btn-primary mb-2">Sign in</button>
                            <span class="text-dark dark-color d-block line-height-2">Don't have an account? <a href="#">Sign up</a></span>
                        </div>
                    </form>
                </div>
            </div>
          </div>
          <div class="overlay-container">
              <div class="overlay">
                  <div class="overlay-panel overlay-left">
                      <a class="sign-in-logo mb-5" href="#"><img src="images/logo-full.png" class="img-fluid" alt="logo"></a>
                      <p>To Keep connected with us please login with your personal info</p>
                      <button class="btn iq-border-primary mt-2" id="signIn">Sign In</button>
                  </div>
                  <div class="overlay-panel overlay-right">
                      <a class="sign-in-logo mb-5" href="#"><img src="images/logo-full.png" class="img-fluid" alt="logo"></a>
                      <p>Enter your personal details and start journey with us</p>
                      <button class="btn iq-border-primary mt-2" id="signUp">Sign Up</button>
                  </div>
              </div>
          </div>
      </div>
  </section>
 @endsection
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf
                        
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

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
