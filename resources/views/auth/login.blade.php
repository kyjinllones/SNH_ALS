@extends('layouts.app')

@section('content')

 <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="login">
                <div><h1>{{ __('Login') }}</h1></div>
                 
                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <input placeholder="E-Mail Address" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <input  placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                                <div class="form-check">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div style="float: right;"> @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif</div>
                                <input type="submit" value="Login" class="btn btn-primary">
                                   
                              
                            
                    </form>
            </div>
        <div class="shadow"></div>

        
        </div>
    </div>
</div>
@endsection
