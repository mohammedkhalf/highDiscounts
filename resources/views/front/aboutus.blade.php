@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
 @include('front.layouts.menu') 
   <style>
        .owl-carousel {
            display: block;
        }
    </style>
   <div id="content" class="site-content" tabindex="-1">
        <div class="container">


            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <div class="product">

                        <div class="single-product-wrapper">
                            <div class="product-images-wrapper">
                               
                                <div class="images electro-gallery">
                                    <div class="thumbnails-single owl-carousel">
                                        <a href="{{url('/upload/products/'.$about->image)}}" class="zoom" title=""
                                           data-rel="prettyPhoto[product-gallery]">
                                            <img src="assets/images/blank.gif"
                                                 data-echo="{{url('/upload/products/'.$about->image)}}"
                                                 class="wp-post-image"
                                                 alt=""></a>

                                    </div><!-- .thumbnails-single -->



                                                 <div class="summary entry-summary">
                                <div itemprop="description">
                                    <p>      @if(lang() == 'ar')
                                <h2>{{$about->ar_content}}</h2>
                                @else
                                <h2>{{$about->en_content}}</h2>
                                @endif</p>
                                    
                                </div><!-- .description -->



                            </div><!-- .summary -->
                        </div><!-- /.single-product-wrapper -->

</div>
</div>
</div>

@endsection
