@extends('front.master')
@section('style') @endsection

<link href="{{asset('css/login.css')}}" rel="stylesheet">


@section('content')

<section class="sec-login">
<div class="container">

    <div class="row justify-content-center">
        <div class="col-xs-10  col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group head row">
                            <div class="col-xs-12 col-md-8">
                                <h4 class="alert"> Login Form </h4>
                            </div>
                        </div>

                            <div class="form-group row">
                            <div class="col-xs-12 col-md-8">
                                <input id="email" type="email" class="form-control 
                                @error('email') is-invalid @enderror" name="email" 
                                value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Enter Your Mail">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12 col-md-8">
                                <input id="password" type="password" class="form-control 
                                @error('password') is-invalid @enderror" name="password" 
                                required autocomplete="current-password"
                                placeholder="Enter Password: ">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-xs-12 col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" 
                                    name="remember" id="remember" 
                                    {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                       <h2 class="alert alert-info"> {{ __('Remember Me') }}<h2>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-xs-12 col-md-8 foot">
                                <button type="submit" class="btn">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                    <a class="btn btn-link" style="background-color: rgb(106, 88, 155)" 
                                       href="{{route('sign.create')}}"> {{ __('Dont have Account ? ') }}
                                    </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection