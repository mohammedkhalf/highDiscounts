
@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
@include('front.layouts.menu')
    <style>
        .owl-carousel {
            display: block;
            position: static;
         
        }
        .navbar {
    position: static;
    padding: .5rem 1rem;
}
  .lightbox {
  /** Default lightbox to hidden */
  display: none;

  /** Position and style */
  position: fixed;
  z-index: 999;
  width: 100%;
  height: 100%;
  text-align: center;
  top: 0;
  left: 0;
  background: rgba(0,0,0,0.8);
}

/*.lightbox img {*/
  /*!** Pad the lightbox image *!*/
  /*max-width: 90%;*/
  /*max-height: 80%;*/
  /*margin-top: 2%;*/
/*}*/

.lightbox:target {
  /** Remove default browser outline */
  outline: none;

  /** Unhide lightbox **/
  display: block;
}


   @if(lang() == 'ar')
   .lightbox img {
  max-width: 93%;
  max-height: 85%;
  margin-top: 2%;
  margin-right: 30%;
  background-color: #fff;
  padding: 20px 20px;
}
@else
.lightbox img {
  max-width: 93%;
  max-height: 85%;
  margin-top: 2%;
  margin-left: 30%;
  background-color: #fff;
  padding: 20px 20px;
}
   @endif
    </style>
  <div id="content" class="site-content" tabindex="-1">
      
        <div class="container">

            <nav class="woocommerce-breadcrumb">
                <a href="home.html">Home</a>
             @if(!empty($product->product_dep_main()->get()))
                                                    @foreach($product->product_dep_main()->get() as $dep)
                                                       <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                <a href="#">
                                                        {!! $dep->en_name!!}</a>
                                                    @endforeach
                                                @endif
                <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                                                  @if(!empty($product->product_dep()->get()))
                                                    @foreach($product->product_dep()->get() as $dep) 
                                                     <a href="{{url('/single_dep/'.$dep->id)}}">
                                                        {!! $dep->en_name!!}
                                                     </a>
                                                    @endforeach
                                                @endif
                <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>{{$product->en_title}}
            </nav><!-- /.woocommerce-breadcrumb -->
      

            <div id="primary" class="content-area">
                 
                <main id="main" class="site-main">
    
                    <div class="product">

                        <div class="single-product-wrapper">
                            <div class="product-images-wrapper">
                                <span class="onsale">Sale!</span>
                                <div class="images electro-gallery">
                                    <div class="thumbnails-single owl-carousel">

                                        <a href="#img1{{$product->id}}">
                                            <img src="{{url('public/upload/products/'.$product->photo)}}" class="thumbnail">
                                        </a>
                                        <a href="#_" class="lightbox" id="img1{{$product->id}}">
                                            <img src="{{url('public/upload/products/'.$product->photo)}}">
                                        </a>

                                    </div><!-- .thumbnails-single -->

                                    <div class="thumbnails-all owl-carousel" style="padding-top: 30px; margin-left: 96px;" >

                                        @if(!empty($product->products_gallary()->get()))
                                            @foreach($product->products_gallary()->get() as $media)
                                            <div class="col-md-4">


                                                <a href="#img1{{$media->id}}"  title="" data-rel="prettyPhoto[product-gallery]">
                                                    <img src="{{url('public/upload/products/'.$media->media)}}">
                                                </a>
                                                <a href="#_" class="lightbox" id="img1{{$media->id}}">
                                                    <img src="{{url('public/upload/products/'.$media->media)}}">
                                                </a>
                                                          </div>
                                            @endforeach
                                        @endif
                                    </div><!-- .thumbnails-all -->
                                </div><!-- .electro-gallery -->
                            </div><!-- /.product-images-wrapper -->

                            <div class="summary entry-summary">

                                        <span class="loop-product-categories">
                                            @if(!empty($product->product_dep()->get()))
                                                    @foreach($product->product_dep()->get() as $dep)
                                                    <a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                                        {!! $dep->en_name!!}
                                                        </a>
                                                    @endforeach
                                                @endif
                                        </span><!-- /.loop-product-categories -->

                                <h1 itemprop="name" class="product_title entry-title">{{$product->en_title}}</h1>

                                <div class="woocommerce-product-rating">
                                    <div class="star-rating" title="Rated 4.33 out of 5">
                                                <span style="width:86.6%">
                                                    <strong itemprop="ratingValue" class="rating">4.33</strong>
                                                    out of <span itemprop="bestRating">5</span>				based on
                                                    <span itemprop="ratingCount" class="rating">3</span>
                                                    customer ratings.
                                                </span>
                                    </div>

                                    <p  class="woocommerce-review-link">(<span itemprop="reviewCount"
                                                                                              class="count">3</span>
                                        customer reviews)</p>
                                </div><!-- .woocommerce-product-rating -->

                                <div class="brand" style="width:150px;">


                                    
                                        @if(!empty($product->product_dep()->get()))
                                            @foreach($product->product_dep()->get() as $dep)
                                            <a href="{{url('/single_dep/'.$dep->id)}}">
                                                <img src="{{url('public/upload/products/'.$dep->image)}}"
                                                     alt="{{$dep->en_name}}"/>
                                             </a>
                                            @endforeach
                                        @endif                                
                                </div><!-- .brand -->

                                   @if( Lang() =='en' ) 
                                   <div class="availability in-stock">Availablity:
                                    <span>In stock</span> {{$product->stock}} Item(s)
                                </div>
                                   @else
                                   <div class="availability in-stock">التوفر:
                                    <span> في المخزن </span> {{$product->stock}}قطعة
                                </div>
                                   @endif
                              
                                <!-- .availability -->
                                <hr class="single-product-title-divider"/>
                    

                                <div itemprop="description">
                                      @if( Lang() =='en' ) 
                                        <p>{{$product->en_content}}</p>
                                        @else
                                          <p>{{$product->ar_content}}</p>>
                                        @endif
                                         
                                    
                                   
                                        @if( Lang() =='en' ) 
                                         <p style="font-size:17px"><strong>Product Price</strong>: {{$product->price}} LE</p>
                                        @else
                                          <p><strong style="font-size:17px"> سعر المنتج </strong>: {{$product->price}} جنيهات </p>
                                        @endif
                                         
                                         
                                        @if( $product->user_type =='admin' ) 
                                        <?php $owners=App\Admin::where('id','=',$product->user_id)->get(); ?> 
                                          <form  method="post" action="{{url('/owner')}}">
                                              {{ csrf_field() }}
                                              <input type="hidden"  name="user_id" value="{{$product->user_id}}" />
                                              <input type="hidden"  name="user_type" value="{{$product->user_type}}" />
                                         <p><strong>Product Owner</strong>: <button type="submit" style="background-color: transparent;border-color: transparent;" class="ff" ><strong style="font-size:17px">{{$owners->first()->name}}</strong></button> </p>
                                        </form>
                                        @else
                                        <?php $owners=App\User::where('id','=',$product->user_id)->get(); ?> 
                                         
                                            <form  method="post" action="{{url('/owner')}}">
                                              {{ csrf_field() }}
                                              <input type="hidden"  name="user_id" value="{{$product->user_id}}" />
                                              <input type="hidden"  name="user_type" value="{{$product->user_type}}" />
                                         <p><strong>Product Owner</strong>: <button type="submit" style="background-color: transparent;border-color: transparent;" class="ff" ><strong style="font-size:17px">{{$owners->first()->name}}</strong></button> </p>
                                        </form>
                                     
                                        
                                        @endif
                                       <style>.ff:hover {
    
    color: #FED700!important;
}</style>
                                </div><!-- .description -->

                     
                                <form class="variations_form cart" method="post">

                              


                                    <div class="single_variation_wrap">
                                        <div class="woocommerce-variation single_variation"></div>
                                        <div class="woocommerce-variation-add-to-cart variations_button">
                                            @if( $product->stock >= 1)
                                                @if( Lang() =='en' ) 
                                                 <a href="{{route('product.addToCart' , ['id' => $product->id])}}"
                                                   class="single_add_to_cart_button button"> Add to cart</a>
                                                @else
                                                 <a href="{{route('product.addToCart' , ['id' => $product->id])}}"
                                                   class="single_add_to_cart_button button"> أضف إلى السلة</a>
                                                @endif
                                               
                                            @endif
                                            @if( $product->stock >= 1)
                                                @if( Lang() =='en' ) 
                                                 <a href="{{route('product.wishlist' , ['id' => $product->id])}}"
                                                   class="add_to_wishlist button" style="color:green;"> Add to Wishlist</a>
                                                @else
                                                 <a href="{{route('product.wishlist' , ['id' => $product->id])}}"
                                                   class="add_to_wishlist button"> أضف إلى المفضلة</a>
                                                @endif
                                               
                                            @endif

                                            <iframe src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2Fhigh-discounts.net&layout=button_count&size=small&mobile_iframe=true&appId=300816603868739&width=69&height=20" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>

                                        </div>
                                    </div>


                                </form>




                            </div><!-- .summary -->
                        </div><!-- /.single-product-wrapper -->

                        <div class="related products">
                            <h2>{{trans('admin.similer_product')}}</h2>

                            <ul class="products columns-5">

                                @foreach($similarProduct as $similar)
                                    <a href="{{url('/single_product/'.$similar->id)}}">
                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                @if(!empty($similar->product_dep()->get()))
                                    @foreach($product->product_dep()->get() as $dep)
                                     <span class="loop-product-categories"><a href="{{url('/single_dep/'.$dep->id)}}" rel="tag">
                                        {!! $dep->en_name!!}
                                        </a></span>
                                    @endforeach
                                @endif
                                                    <a href="{{url('/single_product/'.$similar->id)}}">
                                                        <h3>
                                                            <a href="{{url('/single_product/'.$similar->id)}}">@if(lang() == 'ar') {{$similar->ar_title}} @else {{$similar->en_title}} @endif</a>
                                                        </h3>
                                                        <div class="product-thumbnail">
                                                            <img style="height: 100px; width: auto"
                                                                 src="{{url('public/upload/products/'.$similar->photo)}}"
                                                                 alt="{{$similar->en_title}}"/>
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">{{$similar->price}} LE</span></ins>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow"
                                                           href="{{route('product.addToCart' , ['id' => $similar->id])}}"
                                                           class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->


                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                    </a>
                                @endforeach

                            </ul><!-- /.products -->
                        </div><!-- /.related -->
                    </div><!-- /.product -->
 
                </main><!-- /.site-main -->
            </div><!-- /.content-area -->
                  <div id="sidebar" class="sidebar" role="complementary">
                      <aside id="text-2" class="widget widget_text">
                            <div class="textwidget">
                                @if(lang() == 'ar')
                                  <img src="{{url('public/upload/products/2.jpg')}}" alt="Banner">
                                @else
                                  <img src="{{url('public/upload/products/1.jpg')}}" alt="Banner">
                                @endif
                              
                                
                            </div><!-- .textwidget -->
                        </aside><!-- .widget -->
                        
                        
                            <aside class="widget widget_products">
                            <h3 class="widget-title">{{trans('admin.latest')}}</h3>
                            <ul class="product_list_widget">
                                @foreach($widget as $pro)
                                <li>
                                    <a href="{{url('/single_product/'.$pro->id)}}" title="{{$pro->en_title}}">
                                        <img width="180" height="180" src="{{url('public/upload/products/'.$pro->photo)}}" class="wp-post-image" alt=""/><span class="product-title">{{$pro->en_title}}</span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount">{{$pro->price}} LE</span></ins> 
                                </li>
                               @endforeach
                      
                            </ul>
                        </aside>
                        </div>
        </div><!-- /.container -->
    </div>




 



    </div><!-- #page -->


@endsection














