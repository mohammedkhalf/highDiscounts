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
     @if ( $product != null)


            <div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Wishlist</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <article class="page type-page status-publish hentry">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div id="yith-wcwl-messages"></div>
                                    

                                        <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                                        <!-- TITLE -->
                                        <div class="wishlist-title ">
                                            <h2>My wishlist on Electro</h2>
                                        </div>

                                        <!-- WISHLIST TABLE -->
                                        <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">

                                            <thead>
                                                <tr>

                                                    <th class="product-remove"></th>

                                                    <th class="product-thumbnail"></th>

                                                    <th class="product-name">
                                                        <span class="nobr">Product Name</span>
                                                    </th>

                                                    <th class="product-price">
                                                        <span class="nobr">Unit Price</span>
                                                    </th>
                                                    <th class="product-stock-stauts">
                                                        <span class="nobr">Stock Status</span>
                                                    </th>

                                                    <th class="product-add-to-cart"></th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($product as $products)
                                                <tr>
                                                    <td class="product-remove">
                                                        <div>
                                                                {!! Form::open(['method'=>'delete','url'=>'/destroy_item_from_wishlist/'.$products->id]) !!} 
                                                    <button class="remove" type="submit" href="{{url('/destroy_item_from_wishlist/'.$products->id)}}">×</button>
                                                     {!! Form::close() !!}
                                                      
                                                        </div>
                                                    </td>

                                                    <td class="product-thumbnail">
                                                        <a href="single_product/{{ $products->wishlist()->first()->id }}"><img width="180" height="180" alt="1" class="wp-post-image" src="{{url('/upload/products/'.$products->wishlist()->first()->photo)}}"></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="single_product/{{ $products->wishlist()->first()->id }}">{{$products->wishlist()->first()->en_title}}</a>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="electro-price"><span class="amount">{{$products->wishlist()->first()->price}} LE</span></span>
                                                    </td>

                                                    <td class="product-stock-status">
                                                        <span class="in-stock">IN Stock : {{$products->wishlist()->first()->stock}}</span>
                                                    </td>

                                                    <td class="product-add-to-cart">
                                                        <!-- Date added -->

                                                        <!-- Add to cart button -->
                                                        <a href="{{route('product.addToCart' , ['id' => $products->product_id])}}" class="button"> Add to Cart</a>
                                                        <!-- Change wishlist -->

                                                        <!-- Remove from wishlist -->
                                                    </td>
                                                </tr>
                                               @endforeach
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="6"></td>
                                                </tr>
                                            </tfoot>

                                        </table>

                                        <input type="hidden" value="85fe311a9d" name="yith_wcwl_edit_wishlist" id="yith_wcwl_edit_wishlist"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">


                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>

          
@else 
<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <h2>Now Items In The Wishlist!</h2>
                </div>
            </div>
        </div>
@endif
   @endsection
