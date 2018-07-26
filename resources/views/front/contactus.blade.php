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
                        <label class="" for="billing_postcode">Postcode <abbr title="required" class="required">*</abbr>
                        </label>
                        <input type="text" value="" placeholder="Postcode / Zip" id="billing_postcode" name="billing_postcode" class="input-text ">
                    </p>
                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label class="" for="billing_postcode">Postcode <abbr title="required" class="required">*</abbr>
                        </label>
                        <input type="text" value="" placeholder="Postcode / Zip" id="billing_postcode" name="billing_postcode" class="input-text ">
                    </p>
                    <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                        <label class="" for="billing_postcode">Postcode <abbr title="required" class="required">*</abbr>
                        </label>
                        <input type="text" value="" placeholder="Postcode / Zip" id="billing_postcode" name="billing_postcode" class="input-text ">
                    </p>

                </form>

            </div>
        </div>
    </div>
    @endsection
