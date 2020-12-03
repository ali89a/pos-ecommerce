<!-- display page title -->


<!DOCTYPE html>
<html lang="bn-BD" class="login-registration">

<head>

    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>পাসওয়ার্ড রিসেট - বাংলাদেশ ফায়ার সার্ভিস ও সিভিল ডিফেন্স</title>
    <link rel="shortcut icon" href="{{ URL::asset('assets/login/image/favicon.ico')}}">
    <!-- FontAwesome v4.6.3 -->
    <link href="http://efire.viewdemo.xyz/assets/css/icons/fontawesome/styles.min.css?ver=4.6.3" rel="stylesheet"
        type="text/css">
    <link rel="shortcut icon" href="{{ URL::asset('assets/login/image/favicon.ico')}}">
    <link href="{{ URL::asset('assets/login/css/login.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/login/css/app.css')}}" type="text/css" rel="stylesheet" />
    <link href="{{ URL::asset('assets/login/css/app-bangla.css')}}" type="text/css" rel="stylesheet" />

    <!-- jQuery v2.1.4 -->
    <script type="text/javascript" src="http://efire.viewdemo.xyz/assets/js/core/libraries/jquery.min.js?ver=2.1.4">
    </script>

</head>

<body class="login-registration">


    <div class="behave-table">
        <div class="behave-table-cell text-center">

            <div class="form-holder">
                <div class="form-left text-center">
                    <h3>Inventory Management System</h3>
                    <h2 class="site-description"> MS COLLECTION</h2>
                    <div class="footer-text">
                        {{--                    <p class="credit-line visible-desktop">ডিজাইন ও ডেভলপ করেছেন: <a href="http://technovista.com.bd?ref=kmsilo" target="_blank">টেকনোভিস্তা লিমিটেড</a></p>--}}
                    </div>

                    <div class="backdrop"></div>
                </div>
                <div class="form-right text-left">
                    <a href="">
                        <img src="{{url(asset('assets\login\image\logo-bfscd.png'))}}" alt="master.page_title"
                            width="120">
                    </a>


                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <h4 class="login-text">পাসওয়ার্ড রিসেট</h4>
                        <div class="form-group has-feedback has-feedback-left">
                            <label class="control-label" for="login">ব্যবহারকারী নাম/ ইমেইল</label>
                            <input class="form-control" placeholder="আপনার ব্যবহারকারী নাম কিংবা ইমেইল দিন"
                                required="required" id="login" name="email" type="text">
                            <div class="form-control-feedback"><i class="icon-mail5 text-muted"></i></div>
                        </div>

                        <input class="btn btn-primary text-uppercase" type="submit" value="রিসেট লিংক পাঠান">

                    </form>

                    <p class="credit-line visible-mobile">ডিজাইন ও ডেভলপ করেছেন: <a href="https://www.perkyrabbit.com/"
                            target="_blank">পারকি রাবিট কর্পোরেশন লিমিটেড</a></p>
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
                <div class="card-header">{{ __('Reset kk33333k Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
