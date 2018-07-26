@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')


    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{$title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">{{trans('admin.similer_product')}}</h2>
                        @foreach($similarProduct as $similar)
                            <a href="{{url('/single_product/'.$similar->id)}}">
                                <div class="thubmnail-recent">
                                    <img style="height: 100px; width: auto"
                                         src="{{url('/upload/products/'.$similar->photo)}}"
                                         alt="{{$similar->en_title}}"/>
                                    <h2>
                                        <a href="">@if(lang() == 'ar') {{$similar->ar_title}} @else {{$similar->en_title}} @endif</a>
                                    </h2>
                                    <div class="product-sidebar-price">
                                        <ins>{{$similar->price}}</ins>{{-- <del>$100.00</del>--}}
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>

                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            @foreach($lastPosted as $last)
                                @if(lang()== 'ar')
                                    <li><a href="{{url('/single_product/'.$last->id)}}">{{$last->ar_title}}</a></li>
                                @else
                                    <li><a href="{{url('/single_product/'.$last->id)}}">{{$last->en_title}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="{{url('/')}}">Home</a>
                            <a href="">@if(!empty($product->product_dep()->get()))
                                    @foreach($product->product_dep()->get() as $dep)
                                        {!! $dep->en_name!!}
                                    @endforeach
                                @endif  </a>
                            <a href="">{{$product->en_title}}</a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{url('/upload/products/'.$product->photo)}}"/>
                                    </div>

                                    <div class="product-gallery">

                                        @if(!empty($product->products_gallary()->get()))

                                            @foreach($product->products_gallary()->get() as $media)
                                                <img src="{{url('/upload/products/'.$media->media)}}"/>

                                                <!-- Modal -->
                                            @endforeach

                                        @endif

                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$product->en_title}}</h2>
                                    <div class="product-inner-price">
                                        <ins>{{$product->price}}</ins>
                                    </div>

                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty"
                                                   value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>

                                    <div class="product-inner-category">
                                        <p>Category: <a href="">@if(!empty($product->product_dep()->get()))
                                                    @foreach($product->product_dep()->get() as $dep)
                                                        {!! $dep->en_name!!}
                                                    @endforeach
                                                @endif

                                            </a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>,
                                            <a href="">shoes</a>. </p>
                                    </div>

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home"
                                                                                      role="tab" data-toggle="tab">Description</a>
                                            </li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile"
                                                                       role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>
                                                <p>{{$product->en_content}}</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text">
                                                    </p>
                                                    <p><label for="email">Email</label> <input name="email"
                                                                                               type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review"
                                                                                                         id="" cols="30"
                                                                                                         rows="10"></textarea>
                                                    </p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">

                                @foreach($ratedProduct as $rated)
                                    <div class="single-product">
                                        <div class="product-f-image">
                                            <img src="{{url('/upload/products/'.$rated->photo)}}"
                                                 alt="{{$rated->en_title}}"/>
                                            <div class="product-hover">
                                                <a href="{{url('/add-to-cart/'.$rated->id)}}"
                                                   class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to
                                                    cart</a>
                                                <a href="{{url('/single_product/'.$rated->id)}}"
                                                   class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>

                                        <h2>
                                            <a href="">@if(lang() == 'ar'){{$rated->ar_title}} @else {{$rated->en_title}} @endif</a>
                                        </h2>

                                        <div class="product-carousel-price">
                                            <ins>{{$rated->price}}</ins> {{--<del>$100.00</del>--}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection