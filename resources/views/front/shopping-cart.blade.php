@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
@include('front.layouts.menu')
     @if ( $product != null)
   <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Cart</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry">
                                <header class="entry-header"><h1 itemprop="name" class="entry-title">Cart</h1></header><!-- .entry-header -->

                                    
                                    @if(session()->has('success'))
                                    <div class="alert alert-info">
                                        <span class="help-block">
                                            <small class="text-success">
                                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                                <h6>{{session('success')}}</h6>
                                            </small>
                                        </span>
                                    </div>
                                    @endif

                    
     
                                    <table class="shop_table shop_table_responsive cart">
                                        <thead> 
                                            <tr>
                                                <th class="product-remove">Remove</th>
                                                <th class="product-thumbnail">Image</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price">Price</th>
                                                <th class="product-price">Add To Wishlist</th>

                                                
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
    @foreach($product as $products)
                                            <tr class="cart_item">

                                                <td class="product-remove">
                                                    {!! Form::open(['method'=>'delete','url'=>'/destroy_item/'.$products->id]) !!} 
                                                    <button class="remove" type="submit" href="{{url('/destroy_item/'.$products->id)}}">×</button>
                                                     {!! Form::close() !!}
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="single_product/{{ $products->shoppings()->first()->id }}"><img width="180" height="180" src="{{url('public/upload/products/'.$products->shoppings()->first()->photo)}}" alt=""></a>
                                                </td>

                                                <td data-title="Product" class="product-name">
                                                    <a href="single_product/{{ $products->shoppings()->first()->id }}">{{$products->shoppings()->first()->en_title}}</a>
                                                </td>

                                                <td data-title="Price" class="product-price">
                                                    <span class="amount">{{$products->price}} LE</span>
                                                </td>

                                                <td data-title="add_to_wishlist" class="product-price">

                                                    {!! Form::open(['method'=>'post','url'=>'/add_to_wishlist_from_card/'.$products->shoppings()->first()->id]) !!} 
                                                    <button class="add_to_wishlist" type="submit" href="{{url('/add_to_wishlist_from_card/'.$products->shoppings()->first()->id)}}">+</button>
                                                    {!! Form::close() !!}

                                                        {{-- <a href="{{url('/add_to_wishlist_from_card/'.$products->id)}}" rel="nofollow" class="add_to_wishlist"> {{trans('admin.wishlist')}}</a> --}}

                                                </td>


                                            </tr>
                                         @endforeach
                                            <tr>
                                                <td class="actions" colspan="6">

                                                    <div class="coupon">

                                                 

                                                    </div>

                                                    <div class="wc-proceed-to-checkout">

                                                        <a class="checkout-button button alt wc-forward" href="{{url('/checkout')}}">Proceed to Checkout</a>
                                                    </div>

                                           

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                         
                                <div class="cart-collaterals">

                                    <div class="cart_totals ">

                                        <h2>Cart Totals</h2>

                                        <table class="shop_table shop_table_responsive">

                                            <tbody>
                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td data-title="Subtotal"><span class="amount">{{$total}} LE</span></td>
                                                </tr>
                                                <tr class="shipping">
                                                    <th>Cart Weight</th>
                                                 <td data-title="Subtotal"><span class="amount">{{$totalweight}} KG</span></td>
                                                </tr>

                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                 <td data-title="Subtotal"><span class="amount">Depending On Your City And Cart Weight</span></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td data-title="Total"><strong><span class="amount">{{$total}} LE</span></strong> </td>
                                                </tr>
                                        
                                            </tbody>
                                        </table>

                                  
                                    </div>
                                </div>
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->

@else 
<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <h2>Now Items In The Cart!</h2>
                </div>
            </div>
        </div>
@endif
   @endsection