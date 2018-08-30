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

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Checkout</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry">
                                <header class="entry-header"><h1 itemprop="name" class="entry-title">Checkout</h1></header><!-- .entry-header -->
<form enctype="multipart/form-data" action="{{url('/place')}}" class="checkout" method="post" name="checkout">
    {!! csrf_field() !!}
                                    <div id="customer_details" class="col2-set">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">

                                                <h3>Billing Details</h3>

                                                <p id="billing_first_name_field" class="form-row form-row form-row-first validate-required"><label class="" for="billing_first_name">Name <abbr title="required" class="required">*</abbr></label>  <input type="text" value="{{Auth::user()->name}}" placeholder="" id="billing_first_name" name="name" class="input-text "></p>
                                             <p class="help-block">{{$errors->first('name')}}</p>
                                         <div class="clear"></div>

                                            

                                                <p id="billing_email_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr></label> <input type="text" value="{{Auth::user()->email}}" placeholder="" id="billing_email" name="email" class="input-text ">
                                            </p>
                                            <p class="help-block">{{$errors->first('email')}}</p>
<div class="clear"></div>
                                                <p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone"><label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr></label>    <input type="text" value="" placeholder="" id="billing_phone" name="phone" class="input-text ">
                                            </p>
                                            <p class="help-block">{{$errors->first('phone')}}</p><div class="clear"></div>
<div class="clear"></div>
                                                 <p id="calc_shipping_country_field" class="form-row form-row-wide">  
                                                  <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="city"> 
                                                    <option value="">Select a City…</option>
                                                   @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->country_name_en}}</option>
                                                   @endforeach
                                                </select></p><div class="clear"></div>

                                                                        <p id="billing_email_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_email">Adress <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Street address" id="billing_address_1" name="address" class="input-text ">
                                            </p>
                                            <p class="help-block">{{$errors->first('address')}}</p>
<div class="clear"></div>

                                            </div>
                                        </div>

                               
                                    </div>

                                    <h3 id="order_review_heading">Your order</h3>

                                    <div class="woocommerce-checkout-review-order" id="order_review">
                                        <table class="shop_table woocommerce-checkout-review-order-table">
                                            <thead>
                                                <tr>
                                                     <th class="product-thumbnail">&nbsp;</th>
                                                    <th class="product-name">Product</th>
                                                    <th class="product-total">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                         @foreach($product as $products)
                                            <tr class="cart_item">
                                                 <td class="product-thumbnail">
                                                <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{url('/upload/products/'.$products->shoppings()->first()->photo)}}">
                                                 </td>
                                                <td class="product-name">
                                                   {{$products->shoppings()->first()->en_title}}</td>
                                                <td class="product-total">
                                                    <span class="amount">{{$products->price}} LE</span> </td>
                                            </tr>
                                              @endforeach
                                       
                                            </tbody>
                                            <tfoot>

                                                <tr class="cart-subtotal">
                                                    <th>Subtotal</th>
                                                    <td><span class="amount">{{$total}} LE</span></td>
                                                </tr>

                                                <tr class="shipping">
                                                    <th>Shipping</th>
                                                    <td data-title="Shipping"> <span class="amount">  Free Shipping</span> <input type="hidden" class="shipping_method" value="international_delivery" id="shipping_method_0" data-index="0" name="shipping_method[0]"></td>
                                                </tr>

                                                <tr class="order-total">
                                                    <th>Total</th>
                                                    <td><strong><span class="amount">{{$total}} LE</span></strong> </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <div class="woocommerce-checkout-payment" id="payment">
                                        
                                            <div class="form-row place-order">


                                                <input type="submit" data-value="Place order" value="Place order" class="button alt">
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
                @if(session()->has('success'))
    <div class="alert alert-info">
        <span class="help-block">
            <small class="text-success">
                <h4>{{session('success')}}</h4>
            </small>
        </span>
    </div>
      @endif
                <h2>Now Items In The Cart!</h2>
                </div>
            </div>
        </div>
@endif
   @endsection