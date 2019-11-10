
@extends('Frontend.layouts.auth')

@section('content')

<section class="page-login">
    <div class="container wrapper-login">
        <div class="content-login">
            <div class="main-login">
                <div class="logo-login">
                    <a href="index-2.html" class="logo-black">
                        <img src="assets/images/logo/logo-black-color-1.png" alt="" class="img img-reponsive">
                    </a>
                </div>
                <div class="login-title">login in!</div>
                    <div class="login-form">
                    <div class="row">
                        <div class="col-md-12">
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-login">
                                <div class="input-login">
                                    <label class="label-login">email
                                        <i class="form-icon fa fa-asterisk"></i>
                                    </label>
                                    <input type="email" name="email" class="form-control label-input">
                                </div>
                                <div class="input-login">
                                    <label class="label-login">password
                                        <i class="form-icon fa fa-asterisk"></i>
                                    </label>
                                    <input type="password"  name="password" class="form-control label-input">
                                </div>
                                <div class="contact-submit">
                                    <button type="submit" data-hover="SEND NOW" class="btn btn-slide">
                                        <span class="text">sign in</span>
                                        <span class="icons fa fa-long-arrow-right"></span>
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection






{{-- 



@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

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
