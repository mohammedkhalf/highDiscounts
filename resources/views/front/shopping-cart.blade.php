@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
     @if ( $product != null)
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">

                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                             <th class="product-remove">&nbsp;{{trans('admin.delete')}}</th>
                                            <th class="product-thumbnail">{{trans('admin.image')}}</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>

                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($product as $products)
               
                                        <tr class="cart_item">
                                           {!! Form::open(['method'=>'delete','url'=>'/destroy_item/'.$products->id]) !!} 
                                            <td class="product-remove">  
                                            <button type="submit" class="btn btn-danger btn-rounded"  href="{{url('/destroy_item/'.$products->id)}}">delete</button> 
                                            </td>
                                             {!! Form::close() !!}
                                           <td class="product-thumbnail">
                                                <a href="single_product/{{ $products->shoppings()->first()->id }}"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{url('/upload/products/'.$products->shoppings()->first()->photo)}}"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single_product/{{ $products->shoppings()->first()->id }}">{{$products->shoppings()->first()->en_title}}</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{$products->price}}</span>
                                            </td>


                                        </tr>

                                         @endforeach
                                        <tr>
                                            <td class="actions" colspan="3">
                                          <a type=""  class="btn btn-primary btn-rounded" href="{{url('/checkout')}}" >CHECKOUT</button>
                                            </a>

                                            <td class="product-subtotal">
                                                <label for="coupon_code">Total:</label>
                                                <span class="amount">{{$total}}</span> 
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>You may be interested in...</h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>

                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-4.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">{{$total}}</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">{{$total}}</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
@else 
<div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <h2>Now Items In The Cart!</h2>
                </div>
            </div>
        </div>
@endif
   @endsection