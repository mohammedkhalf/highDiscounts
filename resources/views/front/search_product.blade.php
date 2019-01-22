@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
    @include('front.layouts.menu')


    <div id="content" class="site-content" tabindex="-1">
        <div class="container">

            <nav class="woocommerce-breadcrumb" ><a href="{{url('/')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>All Products</nav>

            <div id="primary" class="content-area">
                <main id="main" class="site-main">


                    <header class="page-header">
                        <h1 class="page-title">All Products</h1>
                        <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                    </header>

                    <div class="shop-control-bar">
                        <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li>
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
                            <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li>
                        </ul>
                        <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order"  selected='selected'>Default sorting</option>
                                <option value="popularity" >Sort by popularity</option>
                                <option value="rating" >Sort by average rating</option>
                                <option value="date" >Sort by newness</option>
                                <option value="price" >Sort by price: low to high</option>
                                <option value="price-desc" >Sort by price: high to low</option>
                            </select>
                        </form>
                        <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Show 15</option><option value="-1" >Show All</option></select></form>
                        <nav class="electro-advanced-pagination">
                        </nav>
                    </div>

                    <div class="tab-content">

                        <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">

                            <ul class="products columns-3">
                                @foreach($ProductName as $product)
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
                                    {{--  <ul >
  
                                          {!! str_replace('/?','?',$ProductName->render()) !!}
  
                                      </ul>--}}
                                </nav>
                            </div>
                        </div>

                    </div>


                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="sidebar" class="sidebar" role="complementary">
                <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                    <ul class="product-categories category-single">
                        <li class="product_cat">

                            <ul>
                                <li class="cat-item current-cat"><a href="product-category.html"> All Categories</a> <span class="count">({{count($departments)}})</span>
                                    <ul class='children'>
                                        @foreach($departments as $department)
                                        <li class="cat-item">
                                              <form  method="get" action="{{url('/search_product')}}">
                                         <input type="hidden"  name="product_cat" value="{{$department->id}}" />
                                            <button style="background-color: transparent;border-color: transparent;" class="ff" type="submit">@if( Lang() =='en' ) {{$department->en_name}}@else{{$department->ar_name}} @endif</button>
                                        </form>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </aside>
<style>.ff:hover {
    
    color: #FED700!important;
}</style>

                <aside class="widget widget_text">
                    <div class="textwidget">
                              @if(lang() == 'ar')
                                  <img src="{{url('public/upload/products/2.jpg')}}" alt="Banner">
                                @else
                                  <img src="{{url('public/upload/products/1.jpg')}}" alt="Banner">
                                @endif
                              
                    </div>
                </aside>
                <aside class="widget widget_products">
                    <h3 class="widget-title">Latest Products</h3>
                    <ul class="product_list_widget">
                        @foreach($widget as $pro)
                            <li>
                                <a href="{{url('/single_product/'.$pro->id)}}" title="{{$pro->en_title}}">
                                    <img width="180" height="180" src="{{url('public/upload/products/'.$pro->photo)}}" class="wp-post-image" alt=""/><span class="product-title">{{$pro->en_title}}</span>
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