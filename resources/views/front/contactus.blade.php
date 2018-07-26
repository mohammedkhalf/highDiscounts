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

                <form enctype="multipart/form-data" action="#" class="checkout" method="post" name="checkout">

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label class="" for="name">Name <abbr title="required" class="required">*</abbr>
                        </label>
                        <input type="text"  placeholder="name" id="name" name="name" class="input-text ">
                    </p>

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="email">Email <abbr title="required" class="required">*</abbr>
                        </label>
                        <input type="email"  placeholder="Email" id="email" name="email" class="input-text ">
                    </p>

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="subject">Subject <abbr title="required" class="required">*</abbr>
                        </label>
                        <input type="text"  placeholder="subject" id="subject" name="subject" class="input-text ">
                    </p>

                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label  for="message">Message <abbr title="required" class="required">*</abbr>
                        </label>

                    <textarea  placeholder="message" id="message" name="message" class="input-text "></textarea>
                    </p>

                </form>

            </div>
        </div>
    </div>
    @endsection
