@extends('front.index')

@section('title')
    LOGIN
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
 @include('front.layouts.menu') 







            

   <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                              <header class="entry-header">
                                    <h1 itemprop="name" class="entry-title">Login</h1>
                                    <p class="entry-subtitle">Welcome back! Sign in to your account</p>
                                  
                                </header><!-- .entry-header -->        @if(session()->has('success'))
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
                                                            <label for="password">Password<span class="required">*</span></label>
                                                            <input class="input-text" type="password" name="password" id="password">
                                                                   @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                                        </p>

                                                        <p class="form-row ">
                                                            <input class="button" type="submit" value="Login" name="login">
                                                            <label for="rememberme" class="inline"><input name="rememberme" type="checkbox" id="rememberme" value="forever" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
                                                        </p>

                                                       
                                                    </form>


                                                </div>
</div>




@endsection
