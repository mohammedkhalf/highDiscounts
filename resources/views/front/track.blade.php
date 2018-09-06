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


            <div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Compare</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                             <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div class="table-responsive">
                                         @foreach($order as $orders)
                                        <table class="table table-compare compare-list">
                                            <tbody>
                                                <tr>
                                                    <th>Product</th>
                                                                                                        

                                                                                                       <th>Price</th>

                                                    
                                                </tr>
 <?php
 $orderItem  = App\Model\OrderItem::where('order_id','=',$orders->id)->get();
?>
 @foreach($orderItem as $items)
                                                <tr>
                                                    <td>
                                                        <a class="product" href="#">
                                                           <div class="product-image">
                                                                <div class="">
                                                                  
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <h3 class="product-title">{{$items->shoppings()->first()->en_title}}</h3>

                                                            </div>
                                                        </a><!-- /.product -->
                                                    </td>

                                                    <td>
                                                        <div class="product-price price"><span class="electro-price"><span class="amount">$248.99</span></span></div>
                                                    </td>
                                                                                                 
                                                </tr>
                        @endforeach
                                            </tbody>
                                        </table>
                                            @endforeach
                                    </div><!-- /.table-responsive -->
                                </div><!-- .entry-content -->
                            </article><!-- #post-## -->
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>

@endsection