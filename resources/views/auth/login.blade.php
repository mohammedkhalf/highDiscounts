@extends('front.index')

@section('title')
    LOGIN
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
    @include('front.layouts.menu')






    <script>
        window.fbAsyncInit = function () {
            FB.init({
                appId: '260020104655754',
                cookie: true,
                xfbml: true,
                version: 'v3.1'
            });

            FB.AppEvents.logPageView();

        };

        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {
                return;
            }
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>



    <div id="content" class="site-content" tabindex="-1">
        <div class="container">

            <header class="entry-header">
                <h1 itemprop="name" class="entry-title">Login</h1>
                <p class="entry-subtitle">Welcome back! Sign in to your account</p>

            </header><!-- .entry-header --> @if(session()->has('success'))
                <div class="col-md-6 col-xs-12 col-md-offset-3">
                    <div class="alert alert-success text-center">
                        {{ session()->get('success') }}
                    </div>
                </div>
            @endif
            @if(session()->has('fail'))
                <div class="col-md-6 col-xs-12 col-md-offset-3">
                    <div class="alert alert-danger text-center">
                        {{ session()->get('fail') }}
                    </div>
                </div>
            @endif
            <div class="col-md-6 col-xs-12 col-md-offset-3">
                @if(session()->has('loginerror'))
                    <strong class="text-danger text-center">
                        {{ session()->get('loginerror') }}
                    </strong>
                @endif
            </div>


            <form class="form-horizontal" method="POST" action="{{url('/sessionstore')}}">
                {{ csrf_field() }}
                <p class="form-row form-row-wide {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email"> Email address<span class="required">*</span></label>
                    <input type="text" class="input-text" name="email" id="email" value="{{ old('email') }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </p>

                <p class="form-row form-row-wide {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" >Password*
                            @if(lang() == 'ar')
                            <span  style="color:red" > ( لا يقل عن 6 حروف )</span>
                            @else  
                            <span  style="color:red"> (Not Less 6 character) </span>
                            @endif
                    </label>
                    <input class="input-text" type="password" name="password" id="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </p>

                <p class="form-row ">
                    <input class="button" type="submit" value="Login" name="login">
                   <a href="{{ url('/auth/facebook') }}" style="background-color: #4267b2;color: white" class="btn btn-facebook"><i class="fa fa-facebook"></i>  <span> Login With Facebook</span>  </a>
                   
                        <a href="{{ url('/register') }}" class="btn btn-facebook"> Create New Account</a>
                </p>


            </form>


        </div>
    </div>




@endsection
