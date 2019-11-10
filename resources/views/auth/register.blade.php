
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
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-login">
                                <div class="row">
                                    <div class="content-form">
                                        <div class="col-md-6">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">name
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control label-input">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">email
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control label-input">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">password
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="password" name="password" class="form-control label-input">
                                                
                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">confirm password
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="password" name="password_confirmation" class="form-control label-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="contact-submit">
                                        <button type="submit" data-hover="SEND NOW" class="btn btn-slide">
                                            <span class="text">create account</span>
                                            <span class="icons fa fa-long-arrow-right"></span>
                                        </button>
                                    </div>
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
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
