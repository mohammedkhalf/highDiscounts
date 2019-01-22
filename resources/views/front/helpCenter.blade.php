@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
 @include('front.layouts.menu')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                        @if(lang() == 'ar')

                        <h2 class="page-title"  style="text-align:center;margin-top:20px">
                            في حالة وجود مشكلة...يرجي ارسال شكواك من هنا
                        </h2>


                        @else 

                        <h2 class="page-title"  style="text-align:center;margin-top:20px">
                            For Any Problems , Please Send your Complain in this form
                        </h2>

                        @endif


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


            </div>  <!-- row -->


            <div  class="row">

                    <form  action="{{ url ('/send-complain') }}"  method="POST" >

                        {{ csrf_field() }}

                        <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                                <label  for="code"> {{ trans('admin.OrderCode') }}   <abbr title="required" class="required">*</abbr>
                                </label>
                        </p>
                        <div class="form-group {{ $errors->has('code') ? ' has-error' : '' }}">
                            <input type="text"  id="code" name="code" class="input-text ">
                                @if ($errors->has('code'))
                                    <span class="help-block">
                                        <small class="text-danger">{{ $errors->first('code') }}</small>
                                    </span>
                                @endif
                        </div>


                        {{-- <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                            <label class="" for="vendor_name"> {{ trans('admin.VendorName') }}    <abbr title="required" class="required">*</abbr>
                            </label>
                        </p>

                        <div class="form-group {{ $errors->has('vendor_name') ? ' has-error' : '' }}">
                                <select  class="form-control" id="vendor_name" name="vendor_name">
                                    <option value=""> {{ trans('admin.SelectVendorName') }}    </option>

                                    @foreach($allVendor as $vendor)

                                        <option  value="{{  $vendor->id  }}"> {{ $vendor->name }} </option>

                                    @endforeach
                                
                                </select>
    
                                @if ($errors->has('complain'))
                                    <span class="help-block">
                                        <small class="text-danger">{{ $errors->first('complain') }}</small>
                                    </span>
                                @endif
                        </div> --}}
                   

                        <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                            <label  for="complain"> {{ trans('admin.Complain') }}     <abbr title="required" class="required">*</abbr>
                            </label>
                        </p>
                        <div class="form-group {{ $errors->has('complain') ? ' has-error' : '' }}">
                            <select  class="form-control" id="complain" name="complain">
                                <option value="">  {{ trans('admin.SelectTypeOfComplain') }}      </option>
                                <option  value="not-Deliver"> {{ trans('admin.Not-Deliver') }}   </option>
                                <option  value="late-Deliver"> {{ trans('admin.Late-Deliver') }}  </option>
                                <option  value="broken"> {{ trans('admin.Broken') }}  </option>
                            </select>

                            @if ($errors->has('complain'))
                                <span class="help-block">
                                    <small class="text-danger">{{ $errors->first('complain') }}</small>
                                </span>
                            @endif
                        </div>
    


                        <p id="billing_postcode_field" class="form-row form-row-last address-field validate-required validate-postcode" data-o_class="form-row form-row-last address-field validate-required validate-postcode">
                            <label  for="message">  {{ trans('admin.message') }}   <abbr title="required" class="required">*</abbr>
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
    
                            <button type="submit" data-value="send" value="send" id="place_order" name="woocommerce_checkout_place_order" class="button alt">  {{ trans('admin.send') }}  </button>
    
                    </form>
    

            </div>
        </div>      <!-- container -->
    </div>   <!-- single-product-area -->
    @endsection
