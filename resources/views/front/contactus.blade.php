@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <form  action="{{url('/insertcontactus')}}" class="checkout" method="POST" name="checkout">

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label class="" for="name">Name <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <input type="text"  id="name" name="name" class="input-text ">

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="email">Email <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <input type="email"  id="email" name="email" class="input-text ">

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="subject">Subject <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <input type="text"  id="subject" name="subject" class="input-text ">

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="message">Message <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <textarea  id="message" name="message" class="input-text "></textarea>

                    <div class="form-row place-order">
                        <input type="submit" data-value="send" value="Place order" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
                    </div>

                </form>

            </div>
        </div>
    </div>
    @endsection
