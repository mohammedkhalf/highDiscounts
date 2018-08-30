       
                    <form class="navbar-search" method="get" action="{{url('/search_product')}}">
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="nameSearch" placeholder="Search for products" />
                            <div class="input-group-addon search-categories">
                                <select name='product_cat' id='product_cat' class='postform resizeselect' >
                                    <option value='0' selected='selected'>All Categories</option>
                                    <?php
                                    $departments= App\Model\DepartmentProducts::where('parent',0)->get();
                                    ?>
                                    @foreach($departments as $department)
                                    <option value='{{$department->id}}'>@if( Lang() =='en' ) {{$department->en_name}}@else{{$department->ar_name}} @endif</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="input-group-btn">
                                <input type="hidden" id="search-param" name="post_type" value="product" />
                                <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                            </div>
                        </div>
                    </form>
                                      <?php if (Auth::user()) {
                # code...
             $product = App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
        $total =  App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');  ?>

                    <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">

                        <li class="nav-item dropdown">
                            <a href="{{url('/shopping-cart')}}" class="nav-link" data-toggle="dropdown">
                                <i class="ec ec-shopping-bag"></i>
                                  @if ( $product != null)
                                <span class="cart-items-count count">{{ count ($product)}}</span>
                              
                                <span class="cart-items-total-price total-price"><span class="amount">{{$total}} LE</span></span>
                                  @endif
                            </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget_shopping_cart_content">

                                        <ul class="cart_list product_list_widget ">
                                            @foreach($product as $products)

                                            <li class="mini_cart_item">
                                                 {!! Form::open(['method'=>'delete','url'=>'/destroy_item/'.$products->id]) !!} 
                                                <button title="Remove this item" type="submit" class="remove" href="{{url('/destroy_item/'.$products->id)}}">×</button>
                                                 {!! Form::close() !!}
                                                <a href="single_product/{{ $products->shoppings()->first()->id }}">
                                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="{{url('/upload/products/'.$products->shoppings()->first()->photo)}}" alt="">{{$products->shoppings()->first()->en_title}}
                                                </a>

                                                <span class="quantity"> <span class="amount"></span></span>
                                            </li>

 @endforeach
                                      


                                        </ul><!-- end product list -->


                                        <p class="total"><strong>Total:</strong> <span class="amount">{{$total}} LE</span></p>


                                        <p class="buttons">
                                            <a class="button wc-forward" href="{{url('/shopping-cart')}}">View Cart</a>
                                            <a class="button checkout wc-forward" href="{{url('/checkout')}}">Checkout</a>
                                        </p>


                                    </div>
                                </li>
                            </ul>

                        </li>

                    </ul>
                                 
            <?php } ?>
                    <ul class="navbar-wishlist nav navbar-nav pull-right flip">
                        <li class="nav-item">
                            <a href="{{url('/wishlist')}}" class="nav-link"><i class="ec ec-favorites"></i></a>
                        </li>
                    </ul>
                  
              
                </div>
            </nav>




