
@extends('layouts.frontend.app')
@section('title','Log In')

@section('content')
<div>
<div>
<br>
<br>
<br>
<br>
<br>
    <section class="team-area section-gap">
		<div class="container">
		    <div class="row d-flex justify-content-center">
		        <div class="menu-content pb-70 col-lg-7">
		            <div class="title text-center">
		            <h1 class="mb-10">
                    <a href="http://localhost:8000/"><img src="{{asset('assets/frontend/img/logo.png')}}" style="width:95px"></a>
                    Login</h1>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="section-heading text-center">
                        
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </div>

                        <div class="section-heading text-center">
                        
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="background-color:skyblue">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <br/>
                                <br/>
                            <p>Dont have an account..?  <a href="http://localhost:8000/register"><u>Register Now!</u></a></p>
                        </div>
                            
                            
                            
                        
                    </form>

		    </div>
		    </div>
		</div>
	</div>
	</section>
</div>
@endsection

