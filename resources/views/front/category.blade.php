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
            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>All Products</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">


                            <header class="page-header">
                                <h1 class="page-title">All Products</h1>
                                <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                            </header>

                        

                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">

                                    <ul class="products columns-3">
                                        @foreach($products as $product)
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                   @if(!empty($product->product_dep()->get()))
                                    @foreach($product->product_dep()->get() as $dep)
                                     <span class="loop-product-categories"><a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                        {!! $dep->en_name!!}
                                        </a></span>
                                    @endforeach
                                @endif
                                                    <a href="{{url('/single_product/'.$product->id)}}">
                                                        <h3>     @if(lang() == 'ar')
                                {{$product->ar_title}}
                                    @else
                                    {{$product->en_title}}
                                    @endif</h3>
                                                        <div class="product-thumbnail">

                                                            <img data-echo="{{url('public/upload/products/'.$product->photo)}}" src="{{url('public/upload/products/'.$product->photo)}}" alt="{{$product->en_title}}">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">{{$product->price}} LE</span></ins>
                                                             
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="{{route('product.addToCart' , ['id' => $product->id])}}" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                                 <div class="action-buttons">
<a href="{{route('product.wishlist' , ['id' => $product->id])}}" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                        @if( $product->stock >= 1)
                                                            <a class="add-to-compare-link">In Stock : {{ $product->stock }}</a>
                                                        @else
                                                            <a class="add-to-compare-link">Unavailable In Stock </a>
                                                        @endif
                                                    </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                  
                                   @endforeach
                                    </ul>
                                            <div class="shop-control-bar-bottom">
                                <nav class="woocommerce-pagination">
                                    <ul >
                                      
                                 
                         
                                    </ul>
                                </nav>
                            </div>
                                </div>
                          
                            </div>
                    

                        </main><!-- #main -->
                    </div><!-- #primary -->

                    <div id="sidebar" class="sidebar" role="complementary">
               
                      
                           
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <a href="#"><img src="assets/images/banner/ad-banner-sidebar.jpg" alt="Banner"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_products">
                            <h3 class="widget-title">Latest Products</h3>
                            <ul class="product_list_widget">
                                @foreach($widget as $pro)
                                <li>
                                    <a href="{{url('/single_product/'.$pro->id)}}" title="{{$pro->en_title}}">
                                        <img width="180" height="180" src="{{url('upload/products/'.$pro->photo)}}" class="wp-post-image" alt=""/><span class="product-title">{{$pro->en_title}}</span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount">{{$pro->price}} LE</span></ins> 
                                </li>
                               @endforeach
                      
                            </ul>
                        </aside>
                    </div>

                </div><!-- .container -->
            </div><!-- #content -->

     
           


@endsection