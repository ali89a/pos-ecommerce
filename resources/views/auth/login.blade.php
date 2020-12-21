<!DOCTYPE html>
<html lang="bn-BD" class="login-registration">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>লগইন - ইনভেন্টরি ম্যানেজমেন্ট সিস্টেম</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/login/image/favicon.ico')}}">
    <link href="{{ URL::asset('assets/login/css/login.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/login/css/app.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/login/css/app-bangla.css')}}" type="text/css" rel="stylesheet" />

    <link href="../css/app-bangla.css" rel="stylesheet" type="text/css">
</head>

<body class="login-registration">
    <div class="behave-table">
        <div class="behave-table-cell text-center">
            <div class="form-holder">
                <div class="form-left text-center">
                    <h3>ইনভেন্টরি ম্যানেজমেন্ট সিস্টেম</h3>
                    <h2 class="site-description"> গাওয়াল</h2>
                    {{-- <h2 class="site-description"> এমএস কালেকশন</h2> --}}
                    <div class="footer-text">
                        {{--                    <p class="credit-line visible-desktop">ডিজাইন ও ডেভলপ করেছেন: <a href="http://technovista.com.bd?ref=kmsilo" target="_blank">টেকনোভিস্তা লিমিটেড</a></p>--}}
                    </div>

                    <div class="backdrop"></div>
                </div>
                <div class="form-right text-left">
                    <a href="{{ url('/login') }}">
                        <img src="{{url(asset('assets\login\image\gauwal.png'))}}" alt="master.page_title"
                            width="120">

                            {{-- <img src="{{url(asset('assets\login\image\logo-bfscd.png'))}}" alt="master.page_title" width="120"> --}}
                    </a>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        @csrf
                        {{--                <form method="POST" action="" >--}}

                        <h4 class="login-text">অফিস লগইন</h4>


                        <div class="form-group">
                            <label class="control-label" for="username">লগইন আইডি:</label>
                            {{--                        <input class="form-control" id="username" placeholder="লগইন আইডি" required="required" name="email" type="text">--}}
                            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                @if(old('email')) value="{{ old('email') }}" @endif id="username"
                                placeholder="লগইন আইডি" autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="password">পাসওয়ার্ড:</label>
                            <input type="password" name="password"
                                class="form-control  @error('password') is-invalid @enderror" id="userpassword"
                                value="12345678" placeholder="পাসওয়ার্ড">
                            @error('password')
                            <span class="invalid-feedback" role="alert" style="color: red;">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="form-group small">
                            <div class="row">
                                <div class="col-xs-6 checkbox">
                                    <label>
                                        <input class="styled" name="remember" type="checkbox" value="yes"> মনে রাখুন
                                    </label>
                                </div>
                                <div class="col-xs-6 text-right mt-10">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('পাসওয়ার্ড ভুলে গেছেন?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary text-uppercase">লগইন</button>
                    </form>

                    {{--                <p class="credit-line visible-mobile">ডিজাইন ও ডেভলপ করেছেন: <a href="http://technovista.com.bd?ref=kmsilo" target="_blank">টেকনোভিস্তা লিমিটেড</a></p>--}}
                </div>
            </div>
            <!-- /.form-holder -->

            <div class="clearfix"></div>
        </div>
        <!-- /.behave-table-cell -->
    </div>
    <!-- /.behave-table -->

</body>

</html>


{{-- @extends('layouts.app')

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
