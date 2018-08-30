
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

            <nav class="woocommerce-breadcrumb">
                <a href="home.html">Home</a>
             @if(!empty($product->product_dep_main()->get()))
                                                    @foreach($product->product_dep_main()->get() as $dep)
                                                       <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                <a href="#">
                                                        {!! $dep->en_name!!}</a>
                                                    @endforeach
                                                @endif
                <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                                                  @if(!empty($product->product_dep()->get()))
                                                    @foreach($product->product_dep()->get() as $dep) 
                                                     <a href="{{url('/single_dep/'.$dep->id)}}">
                                                        {!! $dep->en_name!!}
                                                     </a>
                                                    @endforeach
                                                @endif
                <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>{{$product->en_title}}
            </nav><!-- /.woocommerce-breadcrumb -->

            <div id="primary" class="content-area">
                <main id="main" class="site-main">

                    <div class="product">

                        <div class="single-product-wrapper">
                            <div class="product-images-wrapper">
                                <span class="onsale">Sale!</span>
                                <div class="images electro-gallery">
                                    <div class="thumbnails-single owl-carousel">
                                        <a href="{{url('/upload/products/'.$product->photo)}}" class="zoom" title=""
                                           data-rel="prettyPhoto[product-gallery]">
                                            <img src="assets/images/blank.gif"
                                                 data-echo="{{url('/upload/products/'.$product->photo)}}"
                                                 class="wp-post-image"
                                                 alt=""></a>

                                    </div><!-- .thumbnails-single -->

                                    <div class="thumbnails-all columns-5 owl-carousel">

                                        @if(!empty($product->products_gallary()->get()))

                                            @foreach($product->products_gallary()->get() as $media)
                                                <a href="{{url('/upload/products/'.$media->media)}}" class="zoom"
                                                   title="" data-rel="prettyPhoto[product-gallery]">
                                                    <img src="assets/images/blank.gif"
                                                         data-echo="{{url('/upload/products/'.$media->media)}}"
                                                         class="wp-post-image" alt=""></a>
                                            @endforeach
                                        @endif
                                    </div><!-- .thumbnails-all -->
                                </div><!-- .electro-gallery -->
                            </div><!-- /.product-images-wrapper -->

                            <div class="summary entry-summary">

                                        <span class="loop-product-categories">
                                            @if(!empty($product->product_dep()->get()))
                                                    @foreach($product->product_dep()->get() as $dep)
                                                    <a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                                        {!! $dep->en_name!!}
                                                        </a>
                                                    @endforeach
                                                @endif
                                        </span><!-- /.loop-product-categories -->

                                <h1 itemprop="name" class="product_title entry-title">{{$product->en_title}}</h1>

                                <div class="woocommerce-product-rating">
                                    <div class="star-rating" title="Rated 4.33 out of 5">
                                                <span style="width:86.6%">
                                                    <strong itemprop="ratingValue" class="rating">4.33</strong>
                                                    out of <span itemprop="bestRating">5</span>				based on
                                                    <span itemprop="ratingCount" class="rating">3</span>
                                                    customer ratings
                                                </span>
                                    </div>

                                    <a href="#reviews" class="woocommerce-review-link">(<span itemprop="reviewCount"
                                                                                              class="count">3</span>
                                        customer reviews)</a>
                                </div><!-- .woocommerce-product-rating -->

                                <div class="brand">

                                    
                                        @if(!empty($product->product_dep()->get()))
                                            @foreach($product->product_dep()->get() as $dep)
                                            <a href="{{url('/single_dep/'.$dep->id)}}">
                                                <img src="{{url('/upload/products/'.$dep->image)}}"
                                                     alt="{{$dep->en_name}}"/>
                                             </a>
                                            @endforeach
                                        @endif                                
                                </div><!-- .brand -->


                                <div class="availability in-stock">Availablity:
                                    <span>In stock</span> {{$product->stock}} Item(s)
                                </div>
                                <!-- .availability -->
                                <hr class="single-product-title-divider"/>
                                <div class="action-buttons">
                                    <a href="{{route('product.wishlist' , ['id' => $product->id])}}"
                                       class="add_to_wishlist">
                                        Wishlist
                                    </a>
                                </div><!-- .action-buttons -->

                                <div itemprop="description">
                                    <p>{{$product->en_content}}>
                                    <p><strong>Product Price</strong>: {{$product->price}} LE</p>
                                </div><!-- .description -->

                      
                                <form class="variations_form cart" method="post">

                              


                                    <div class="single_variation_wrap">
                                        <div class="woocommerce-variation single_variation"></div>
                                        <div class="woocommerce-variation-add-to-cart variations_button">
                                            @if( $product->stock >= 1)
                                                <a href="{{route('product.addToCart' , ['id' => $product->id])}}"
                                                   class="single_add_to_cart_button button"> Add to cart</a>
                                            @endif

                                        </div>
                                    </div>
                                </form>


                            </div><!-- .summary -->
                        </div><!-- /.single-product-wrapper -->

                        <div class="related products">
                            <h2>{{trans('admin.similer_product')}}</h2>

                            <ul class="products columns-5">

                                @foreach($similarProduct as $similar)
                                    <a href="{{url('/single_product/'.$similar->id)}}">
                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a
                                                                href="product-category.html"
                                                                rel="tag">Smartphones</a></span>
                                                    <a href="{{url('/single_product/'.$similar->id)}}">
                                                        <h3>
                                                            <a href="{{url('/single_product/'.$similar->id)}}">@if(lang() == 'ar') {{$similar->ar_title}} @else {{$similar->en_title}} @endif</a>
                                                        </h3>
                                                        <div class="product-thumbnail">
                                                            <img style="height: 100px; width: auto"
                                                                 src="{{url('/upload/products/'.$similar->photo)}}"
                                                                 alt="{{$similar->en_title}}"/>
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;{{$similar->price}}</span></ins>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow"
                                                           href="{{route('product.addToCart' , ['id' => $similar->id])}}"
                                                           class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->


                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                    </a>
                                @endforeach

                            </ul><!-- /.products -->
                        </div><!-- /.related -->
                    </div><!-- /.product -->

                </main><!-- /.site-main -->
            </div><!-- /.content-area -->
        </div><!-- /.container -->
    </div>




 



    </div><!-- #page -->


@endsection














