@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
<style>
    .product-upper {
        height: 100%;
        overflow: hidden;
    }
    .product-upper img{
        min-height: 195px;
        overflow: hidden;
    }
</style>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">


        <div class="row">

            @foreach($products as $product)

                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{url('upload/products/'.$product->photo)}}" alt="">
                        </div>
                        <h2><a href="{{url('/single_product/'.$product->id)}}">
                                @if(lang() == 'ar')
                                {{$product->ar_title}}
                                    @else
                                    {{$product->en_title}}
                                    @endif
                            </a></h2>
                        <div class="product-carousel-price">
                            <ins>{{$product->price}}</ins>
                        </div>

                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>
                    </div>
                </div>

            @endforeach


        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-pagination text-center">
                    <nav>
                        <ul class="pagination">

                            {!! str_replace('/?','?',$products->render()) !!}

                        </ul>
                    </nav>
                </div>
            </div>
        </div>



    </div>
</div>


@endsection