@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
 @include('front.layouts.menu')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">About Us</h2>
                        <div class="thubmnail-recent">
                            @if(lang() == 'ar')
                                <h2>{{$about->ar_content}}</h2>
                                @else
                                <h2>{{$about->en_content}}</h2>
                                @endif

                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <img  src="{{url('/upload/products/'.$about->image)}}">
                </div>
            </div>
        </div>
    </div>
@endsection
