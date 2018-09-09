@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
 @include('front.layouts.catwidget')
    @include('front.layouts.menu')


    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>




        <div id="content" class="site-content" tabindex="-1">
            <div class="container">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="home-v2-slider" >
                            <!-- ========================================== SECTION – HERO : END========================================= -->

                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                                @foreach($allproducts as $slider)
                                    <div class="item" style="background-image: url({{url('upload/products/'.$slider->image)}});">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-5">
                                                    <div class="caption vertical-center text-left">
                                                        <div class="hero-1 fadeInDown-1">
                                                             @if( Lang() =='en' ) {{$slider->en_title}}@else{{$slider->ar_title}} @endif
                                                            
                                                        </div>

                                                        <div class="hero-subtitle fadeInDown-2">
                                                              @if( Lang() =='en' ) {{$slider->en_content}}@else{{$slider->ar_content}} @endif
                                                        </div>

                                                        <div class="hero-action-btn fadeInDown-4">
                                                            <a href="{{url('/allproducts')}}" class="big le-button ">{{trans('admin.start_buying')}}</a>
                                                        </div>
                                                    </div><!-- /.caption -->
                                                </div>
                                            </div>
                                        </div><!-- /.container -->
                                    </div><!-- /.item -->


                                @endforeach


                            </div><!-- /.owl-carousel -->

                            <!-- ========================================= SECTION – HERO : END ========================================= -->

                        </div><!-- /.home-v1-slider -->

                        <section class="products-carousel-tabs animate-in-view fadeIn animated" data-animation="fadeIn">
                            <h2 class="sr-only">Product Carousel Tabs</h2>
                            <ul class="nav nav-inline">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#tab-products-1" data-toggle="tab">{{trans('admin.featured')}}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-products-2" data-toggle="tab">{{trans('admin.on_sale')}}</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#tab-products-3" data-toggle="tab">{{trans('admin.top_rated')}}</a>
                                </li>
                            </ul><!-- /.nav -->

                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                                    <section class="section-products-carousel" >
                                        <div class="home-v2-owl-carousel-tabs">
                                            <div class="woocommerce columns-3">


                                                <div class="products owl-carousel home-v2-carousel-tabs products-carousel columns-3">



                                                    @foreach($featured as $fe )
                                                        <div class="product ">
                                                            <div class="product-outer">
                                                                <div class="product-inner">@if(!empty($fe->product_dep()->get()))
                                                                        @foreach($fe->product_dep()->get() as $dep)
                                                                            <span class="loop-product-categories"><a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                       
                                        @if( Lang() =='en' ) {{$dep->en_name}}@else{{$dep->ar_name}} @endif
                                    </a></span>@endforeach
                                                                    @endif
                                                                    <a href="{{url('/single_product/'.$fe->id)}}">
                                                                        <h3>
                                                                            @if( Lang() =='en' ) {{$fe->en_title}}@else{{$fe->ar_title}} @endif</h3>
                                                                        <div class="product-thumbnail">
                                                                            <img src="{{url('upload/products/'.$fe->photo)}}" data-echo="{{url('upload/products/'.$fe->photo)}}" class="img-responsive" alt="{{$fe->en_title}}">
                                                                        </div>
                                                                    </a>

                                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> {{$fe->price}} LE</span>
                                                                            </span>
                                                                        </span>
                                                                        <a rel="nofollow" href="{{route('product.addToCart' , ['id' => $fe->id])}}" class="button add_to_cart_button">{{trans('admin.add_to_cart')}}</a>
                                                                    </div><!-- /.price-add-to-cart -->

                                                                    <div class="hover-area">
                                                                        <div class="action-buttons">
                                                                  <a href="{{route('product.wishlist' , ['id' => $fe->id])}}" rel="nofollow" class="add_to_wishlist"> {{trans('admin.wishlist')}}</a>
                                                                <a class="add-to-compare-link">{{trans('admin.in_stock')}} : {{$fe->stock}} </a>
                                                            </div>
                                                                    </div>
                                                                </div><!-- /.product-inner -->
                                                            </div><!-- /.product-outer -->
                                                        </div><!-- /.product -->

                                                    @endforeach


                                                </div><!-- /.products -->
                                            </div>
                                        </div>
                                    </section>
                                </div><!-- /.tab-pane -->

                                <div class="tab-pane" id="tab-products-2" role="tabpanel">
                                    <section class="section-products-carousel">
                                        <div class="home-v2-owl-carousel-tabs">
                                            <div class="woocommerce columns-3">


                                                <div class="products owl-carousel home-v2-carousel-tabs products-carousel columns-3">

                                                    @foreach($onsale as $fe )
                                                        <div class="product ">
                                                            <div class="product-outer">
                                                                <div class="product-inner">
                                                                    @if(!empty($fe->product_dep()->get()))
                                                                        @foreach($fe->product_dep()->get() as $dep)
                                                                            <span class="loop-product-categories"><a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                      @if( Lang() =='en' ) {{$dep->en_name}}@else{{$dep->ar_name}} @endif
                                   </a></span> @endforeach
                                                                    @endif
                                                                    <a href="{{url('/single_product/'.$fe->id)}}">
                                                                        <h3> @if( Lang() =='en' ) {{$fe->en_title}}@else{{$fe->ar_title}} @endif</h3>
                                                                        <div class="product-thumbnail">
                                                                            <img src="{{url('upload/products/'.$fe->photo)}}" data-echo="{{url('upload/products/'.$fe->photo)}}" class="img-responsive" alt="{{$fe->en_title}}">
                                                                        </div>
                                                                    </a>

                                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> {{$fe->price}} LE</span>
                                                                            </span>
                                                                        </span>
                                                                        <a rel="nofollow" href="{{route('product.addToCart' , ['id' => $fe->id])}}" class="button add_to_cart_button">{{trans('admin.add_to_cart')}}</a>
                                                                    </div><!-- /.price-add-to-cart -->

                                                                    <div class="hover-area">
                                                                         <div class="action-buttons">
                                                                  <a href="{{route('product.wishlist' , ['id' => $fe->id])}}" rel="nofollow" class="add_to_wishlist"> {{trans('admin.wishlist')}}</a>
                                                                <a class="add-to-compare-link">{{trans('admin.in_stock')}} : {{$fe->stock}} </a>
                                                            </div>
                                                                    </div>
                                                                </div><!-- /.product-inner -->
                                                            </div><!-- /.product-outer -->
                                                        </div><!-- /.product -->

                                                    @endforeach




                                                </div><!-- /.products -->
                                            </div>
                                        </div>
                                    </section>
                                </div><!-- /.tab-pane -->

                                <div class="tab-pane" id="tab-products-3" role="tabpanel">
                                    <section class="section-products-carousel">
                                        <div class="home-v2-owl-carousel-tabs">
                                            <div class="woocommerce columns-3">


                                                <div class="products owl-carousel home-v2-carousel-tabs products-carousel columns-3">

                                                    @foreach($toprate as $fe )
                                                        <div class="product ">
                                                            <div class="product-outer">
                                                                <div class="product-inner">@if(!empty($fe->product_dep()->get()))
                                                                        @foreach($fe->product_dep()->get() as $dep)
                                                                            <span class="loop-product-categories"><a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                        @if( Lang() =='en' ) {{$dep->en_name}}@else{{$dep->ar_name}} @endif
                                   </a></span> @endforeach
                                                                    @endif
                                                                    <a href="{{url('/single_product/'.$fe->id)}}">
                                                                        <h3>@if( Lang() =='en' ) {{$fe->en_title}}@else{{$fe->ar_title}} @endif/h3>
                                                                        <div class="product-thumbnail">
                                                                            <img src="{{url('upload/products/'.$fe->photo)}}" data-echo="{{url('upload/products/'.$fe->photo)}}" class="img-responsive" alt="{{$fe->en_title}}">
                                                                        </div>
                                                                    </a>

                                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> {{$fe->price}} LE</span>
                                                                            </span>
                                                                        </span>
                                                                        <a rel="nofollow" href="{{route('product.addToCart' , ['id' => $fe->id])}}" class="button add_to_cart_button">{{trans('admin.add_to_cart')}}</a>
                                                                    </div><!-- /.price-add-to-cart -->

                                                                    <div class="hover-area">
                                                                        <div class="action-buttons">
                                                                  <a href="{{route('product.wishlist' , ['id' => $fe->id])}}" rel="nofollow" class="add_to_wishlist"> {{trans('admin.wishlist')}}</a>
                                                                <a class="add-to-compare-link">{{trans('admin.in_stock')}} : {{$fe->stock}} </a>
                                                            </div>
                                                                    </div>
                                                                </div><!-- /.product-inner -->
                                                            </div><!-- /.product-outer -->
                                                        </div><!-- /.product -->

                                                    @endforeach


                                                </div><!-- /.products -->
                                            </div>
                                        </div>
                                    </section>
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </section><!-- /.products-carousel-tabs -->

                        <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">

                            <header>

                                <h2 class="h1">Best Sellers</h2>

                                <ul class="nav nav-inline">

                                    <li class="nav-item active"><span class="nav-link">Top 20</span></li>
                                    @foreach($department as $fe )
                                        <li class="nav-item"><a class="nav-link" href="product-category.html">@if( Lang() =='en' ) {{$fe->en_name}}@else{{$fe->ar_name}} @endif</a></li>
                                    @endforeach
                                </ul>
                            </header>

                            <div id="home-v1-product-cards-careousel">
                                <div class="woocommerce columns-2 home-v1-product-cards-carousel product-cards-carousel owl-carousel">

                                    <ul class="products columns-2">
                                        @foreach($best as $fe )
                                            <li class="product product-card">

                                                <div class="product-outer">
                                                    <div class="media product-inner">

                                                        <a class="media-left" href="{{url('/single_product/'.$fe->id)}}" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="{{url('upload/products/'.$fe->photo)}}}" data-echo="{{url('upload/products/'.$fe->photo)}}" alt="">
                                                        </a>

                                                        <div class="media-body">
                                                            <span class="loop-product-categories">@if(!empty($fe->product_dep()->get()))
                                                                    @foreach($fe->product_dep()->get() as $dep)
                                                                        <a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                        @if( Lang() =='en' ) {{$dep->en_name}}@else{{$dep->ar_name}} @endif
                                  </a>  @endforeach
                                                                @endif
                                                            </span>

                                                            <a href="{{url('/single_product/'.$fe->id)}}">
                                                                <h3>@if( Lang() =='en' ) {{$fe->en_title}}@else{{$fe->ar_title}} @endif</h3>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> {{$fe->price}} LE</span></ins>

                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                                <a href="{{route('product.addToCart' , ['id' => $fe->id])}}" class="button add_to_cart_button">{{trans('admin.add_to_cart')}}</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                  <div class="action-buttons">
                                                                  <a href="{{route('product.wishlist' , ['id' => $fe->id])}}" rel="nofollow" class="add_to_wishlist"> {{trans('admin.wishlist')}}</a>
                                                                <a class="add-to-compare-link">{{trans('admin.in_stock')}} : {{$fe->stock}} </a>
                                                            </div>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->

                                            </li><!-- /.products -->
                                        @endforeach

                                    </ul>
                                    <ul class="products columns-2">
                                        @foreach($best as $fe )
                                            <li class="product product-card">

                                                <div class="product-outer">
                                                    <div class="media product-inner">

                                                        <a class="media-left" href="{{url('/single_product/'.$fe->id)}}" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="{{url('upload/products/'.$fe->photo)}}" data-echo="{{url('upload/products/'.$fe->photo)}}" alt="">
                                                        </a>

                                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                      @if(!empty($fe->product_dep()->get()))
                                                                    @foreach($fe->product_dep()->get() as $dep)
                                                                        <a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                         @if( Lang() =='en' ) {{$dep->en_name}}@else{{$dep->ar_name}} @endif
                                  </a>  @endforeach
                                                                @endif
                                                            </span>

                                                            <a href="{{url('/single_product/'.$fe->id)}}">
                                                                <h3>@if( Lang() =='en' ) {{$fe->en_title}}@else{{$fe->ar_title}} @endif</h3>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> {{$fe->price}} LE</span></ins>

                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                                <a href="{{route('product.addToCart' , ['id' => $fe->id])}}" class="button add_to_cart_button">{{trans('admin.add_to_cart')}}</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                  <a href="{{route('product.wishlist' , ['id' => $fe->id])}}" rel="nofollow" class="add_to_wishlist"> {{trans('admin.wishlist')}}</a>
                                                                <a class="add-to-compare-link">{{trans('admin.in_stock')}} : {{$fe->stock}} </a>
                                                            </div>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->

                                            </li><!-- /.products -->
                                        @endforeach
                                    </ul>
                                </div>
                            </div><!-- #home-v1-product-cards-careousel -->

                        </section>
                        <div class="home-v2-banner-block animate-in-view fadeIn animated" data-animation=" animated fadeIn">
                            <div class="home-v2-fullbanner-ad fullbanner-ad" style="margin-bottom: 70px">
                                <a href="{{url('/allproducts')}}">
                                    <img src="{{url("upload/products/11.png")}}" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <section class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation" data-animation="fadeIn">


                            <header>

                                <h2 class="h1">Laptops &amp; Computers</h2>

                                <div class="owl-nav">
                                    <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                </div>

                            </header>


                            <div id="products-carousel-57176fb2c4230">
                                <div class="woocommerce">
                                    <div class="products owl-carousel home-v2-categories-products products-carousel columns-6">


                                        @foreach($laptops as $fe )
                                            <div class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories">@if(!empty($fe->product_dep()->get()))
                                                                @foreach($fe->product_dep()->get() as $dep)
                                                                    <a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                        {!! $dep->en_name!!}
                                  </a>  @endforeach
                                                            @endif</span>
                                                        <a href="{{url('/single_product/'.$fe->id)}}">
                                                            <h3>@if( Lang() =='en' ) {{$fe->en_title}}@else{{$fe->ar_title}} @endif</h3>
                                                            <div class="product-thumbnail">
                                                                <img src="{{url('upload/products/'.$fe->photo)}}" data-echo="{{url('upload/products/'.$fe->photo)}}" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> {{$fe->price}} LE</span>
                                                                </span>
                                                            </span>
                                                            <a rel="nofollow" href="{{route('product.addToCart' , ['id' => $fe->id])}}" class="button add_to_cart_button">{{trans('admin.add_to_cart')}}</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">
                                                                  <a href="{{route('product.wishlist' , ['id' => $fe->id])}}" rel="nofollow" class="add_to_wishlist"> {{trans('admin.wishlist')}}</a>
                                                                <a class="add-to-compare-link">{{trans('admin.in_stock')}} : {{$fe->stock}} </a>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.products -->


                                        @endforeach



                                    </div>
                                </div>
                            </div>
                        </section>
                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="sidebar" class="sidebar" role="complementary" style="margin-top: 778px;">

                    <aside class="widget widget_products">
                        <h3 class="widget-title">Latest Products</h3>
                        <ul class="product_list_widget">
                            @foreach($widget as $pro)
                                <li>
                                    <a href="{{url('/single_product/'.$pro->id)}}" title="{{$pro->en_title}}">
                                        <img width="180" height="180" src="{{url('upload/products/'.$pro->photo)}}" class="wp-post-image" alt=""/><span class="product-title">@if( Lang() =='en' ) {{$pro->en_title}}@else{{$pro->ar_title}} @endif</span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount">{{$pro->price}} LE</span></ins>
                                </li>
                            @endforeach

                        </ul>
                    </aside>
                    <aside id="electro_features_block_widget-2" class="widget widget_electro_features_block_widget">
                        <div class="features-list columns-1">
                            <div class="feature">
                                <div class="media">
                                    <div class="media-left media-middle feature-icon">
                                        <i class="ec ec-transport"></i>
                                    </div>
                                    <div class="media-body media-middle feature-text">
                                        <strong>Free Delivery</strong> from $50
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <div class="media-left media-middle feature-icon">
                                        <i class="ec ec-customers"></i>
                                    </div>
                                    <div class="media-body media-middle feature-text">
                                        <strong>99% Positive</strong> Feedbacks
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <div class="media-left media-middle feature-icon">
                                        <i class="ec ec-returning"></i>
                                    </div>
                                    <div class="media-body media-middle feature-text">
                                        <strong>365 days</strong> for free return
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <div class="media-left media-middle feature-icon">
                                        <i class="ec ec-payment"></i>
                                    </div>
                                    <div class="media-body media-middle feature-text">
                                        <strong>Payment</strong> Secure System
                                    </div>
                                </div>
                            </div>
                            <div class="feature">
                                <div class="media">
                                    <div class="media-left media-middle feature-icon">
                                        <i class="ec ec-tag"></i>
                                    </div>
                                    <div class="media-body media-middle feature-text">
                                        <strong>Only Best</strong> Brands
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget widget_electro_products_carousel_widget">
                        <section class="section-products-carousel" >


                            <header>

                                <h1>Featured Products</h1>

                                <div class="owl-nav">
                                    <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2dc4a8" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="#products-carousel-next" data-target="#products-carousel-57176fb2dc4a8" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                </div>

                            </header>


                            <div id="products-carousel-57176fb2dc4a8">
                                <div class="products owl-carousel  products-carousel-widget columns-1">
                                    @foreach($featured as $fe )
                                        <div class="product-carousel-alt">
                                            <a href="{{url('/single_product/'.$fe->id)}}">
                                                <div class="product-thumbnail"><img width="250" height="232" src="{{url('upload/products/'.$fe->photo)}}" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Smartwatch2" /></div>
                                            </a>

                                            <span class="loop-product-categories">@if(!empty($fe->product_dep()->get()))
                                                    @foreach($fe->product_dep()->get() as $dep)
                                                        <a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                         @if( Lang() =='en' ) {{$dep->en_name}}@else{{$dep->ar_name}} @endif
                                  </a>  @endforeach
                                                @endif</span><a href="{{url('/single_product/'.$fe->id)}}"><h3>@if( Lang() =='en' ) {{$fe->en_title}}@else{{$fe->ar_title}} @endif</h3></a>
                                            <span class="price"><span class="electro-price"><span class="amount">{{$fe->price}} LE</span></span></span>
                                        </div>

                                    @endforeach
                                </div>
                            </div>
                        </section>
                    </aside>

                </div>

            </div><!-- .container -->
        </div><!-- #content -->

    





@endsection