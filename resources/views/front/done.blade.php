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


            <div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Compare</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                    

                     @if ( isset($order))

                             <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div class="table-responsive">
                                         
                                        <table class="table table-compare compare-list">
                                            <tbody>
                                                <tr>
                                                    <th>Order Products</th>
                                                   <th>Price</th>                 
                                                </tr>
                                                 @if ( isset($orderItem))
                                             @foreach($orderItem as $products)
                                                <tr>
                                                    <td>
                                                        <a class="product" href="{{url('/single_product/'.$products->shoppings()->first()->id)}}">
                                                            <div class="product-image">
                                                                <div class="">
                                                                    <img width="50" height="100" alt="1" class="wp-post-image" src="{{url('/upload/products/'.$products->shoppings()->first()->photo)}}">
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title">{{$products->shoppings()->first()->en_title}}</h3>

                                                            </div>
                                                        </a><!-- /.product -->
                                                    </td>

                                                    <td>
                                                        <div class="product-price price"><span class="electro-price"><span class="amount">{{$products->item_price}} LE</span></span></div>
                                                    </td>
                                                                                                 
                                                </tr>
                                            @endforeach
                                            @endif
                                               <tr>
                                                   <td>
                                                        <h2>Order Code : {{$order->code}}</h2>
                                                    <h2>Total Due : {{$order->price}} LE</h2>   
                                                    <h2>Ordered at : {{$order->created_at}}</h2> 
                                                    @if($order->level == 'reject') 
                                                    <h2 style="color: red">Order Status : We Are Sorry Your Order Has Been Rejected.</h2> 
                                                    @endif
                                                      @if($order->level == 'prepare') 
                                                    <h2 style="color: blue">Order Status : We Are Preparing Your Order.</h2> 
                                                    @endif
                                                      @if($order->level == 'ship') 
                                                    <h2 style="color: #ffc700">Order Status : We Are Shipping Your Order Now. </h2> 
                                                    @endif
                                                          @if($order->level == 'done') 
                                                    <h2 style="color: green">Order Status : Your Order Done! </h2> 
                                                    @endif
                                                   </td>
                                                </tr>
                                            </tbody>
                                        </table>       
                                    </div><!-- /.table-responsive -->
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                            @endif
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>

@endsection