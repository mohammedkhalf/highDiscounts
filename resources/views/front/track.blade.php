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
                                  <div class="entry-content" itemprop="mainContentOfPage">
                                    <div class="woocommerce">
                                        <form action="{{url('/store_track')}}" method="post" class="track_order">
                                        {{ csrf_field() }}
                                            <p>To track your order please enter your Order Code in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>

                                            <p class="form-row form-row-first">
                                                <label for="orderid">Order Code</label>
                                                <input class="input-text" type="text" name="code" id="orderid" placeholder="Found in your order confirmation email." />
                                                <p class="help-block">{{$errors->first('code')}}</p>
                                            </p>

                                            <p class="form-row form-row-last">
                                                <label for="order_email">Billing Email</label>
                                                <input class="input-text" type="text" name="email" id="order_email" placeholder="Email you used during checkout." />
                                                {{-- <p class="help-block">{{$errors->first('email')}}</p> --}}
                                            </p>

                                            <div class="clear"></div>

                                            <p class="form-row">
                                                <input type="submit" class="button" name="track" value="Track" />
                                            </p>
                                        </form>
                                    </div>
                                </div><!-- .entry-content -->

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
                                               <tr>
                                                   <td>
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
                            <div class="wc-proceed-to-checkout">

                                <a class="checkout-button button alt wc-forward" href="{{url('/allproducts')}}">Continue Shopping</a>

                            </div>
                        @endif

                            

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>

@endsection