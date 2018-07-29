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
                    {{ csrf_field() }}
                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label class="" for="name">Name <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input type="text"  id="name" name="name" class="input-text ">
                        @if ($errors->has('name'))
                            <span class="help-block">
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            </span>
                        @endif
                    </div>

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="email">Email <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input type="email"  id="email" name="email" class="input-text ">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            </span>
                        @endif
                    </div>

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="subject">Subject <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                    <input type="text"  id="subject" name="subject" class="input-text ">
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <small class="text-danger">{{ $errors->first('subject') }}</small>
                            </span>
                        @endif
                    </div>

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="message">Message <abbr title="required" class="required">*</abbr>
                        </label>
                    </p>
                    <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                    <textarea  id="message" name="message" class="input-text "></textarea>
                        @if ($errors->has('message'))
                            <span class="help-block">
                                <small class="text-danger">{{ $errors->first('message') }}</small>
                            </span>
                        @endif
                    </div>

                    <div class="form-row place-order">
                        <button type="submit" data-value="send" value="send" id="place_order" name="woocommerce_checkout_place_order" class="button alt">send</button>
                    </div>

                </form>

            </div>
        </div>
    </div>
    @endsection
