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

            <nav class="woocommerce-breadcrumb"><a href="{{ url('/')  }}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Profile</nav>
            <div class="content-area" id="primary">
                <main class="site-main" id="main">
                        <div class="entry-content" itemprop="mainContentOfPage">
                            <div class="woocommerce">
                                <div class="col-sm-12">
                                        @if(session()->has('flash_message_success'))
                                        <div class="alert alert-info">
                                            <span class="help-block">
                                                <small class="text-success">
                                                    <button type="button" class="close" data-dismiss="alert">×</button> 
                                                    <h6>{{session('flash_message_success')}}</h6>
                                                </small>
                                            </span>
                                        </div>
                                        @endif

                                    <div class="col-sm-8"><h1 class="page-title">Profile Info</h1>
                                    </div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Update Profile</button>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">Update</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">

                                                    <?php  $username = DB::table('users')
                                                               ->where('id' , Auth::user()->id)
                                                               ->get();
                                                    ?>

                                                <form  action="{{ url('/update_profile') }}"  method="post" >

                                                    {{ csrf_field() }}
                                                      
                                                    <div class="form-group">
                                                      <label for="recipient-name" class="col-form-label">UserName:</label>

                                                        @foreach($username as $us)
                                                    <input type="text" class="form-control"  name="username"  id="username" value="{{ $us->name }}">
                                                        @endforeach
                                                    </div>
                                                    <div class="form-group">
                                                      <label for="message-text" class="col-form-label">Password:</label>
                                                      <input type="password" class="form-control"  name="password"  id="password">
                                                    </div>
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>

                                                </form>

                                                </div>
                                             
                                              </div>
                                            </div>
                                          </div>
                                    
                                </div>


                            @foreach($UserData as $us)   
                                <table>
                                    <tr>
                                        <td> <p class="form-row form-row-first">
                                                <label for="username">UserName: </label>
                                                <span>  {{ $us->name }} </span>
                                            
                                            </p>
                                        </td>
                                        <td>
                                            <p class="form-row form-row-last">
                                                <label for="email">Email: </label>
                                                <span>  {{ $us->email }} </span>

                                            
                                            </p>
                                        </td>
                                    </tr>
                            @endforeach
                                    <tr>
                                        <td>
                                            <p class="form-row form-row-first">
                                                <label for="address">Orders Emails :  </label>
                                                    <span>
                                                        @foreach($op_email as $em)

                                                        <li style="list-style:none;" >{{ $em->email }} </li>

                                                        @endforeach
                                                         
                                                    </span>   
                                            </p>
                                        </td>

                                    </tr>

                                </table>
                                    <div class="clear"></div>
                                <div class="form-row">
                                        <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                                                <div itemprop="mainContentOfPage" class="entry-content">
                                                    <div class="table-responsive">

                                                       <!--?php    dd($user_orders)  ?-->
                                                       <h1 class="page-title">My Orders</h1>

                                                         
                                                        <table class="table table-compare compare-list">
                                                            <tbody>
                                                                <tr>
                                                                    <th>Order Code</th>
                                                                    <th>billing Email</th>
                                                                    <th>billing Phone</th>
                                                                    <th>Product Image</th>
                                                                   <th> Total Cost</th>                 
                                                                </tr>

                                                                @foreach($user_orders as $us_order)
                                                            
                                                                    <tr>
                                                                            <td>{{ $us_order->code }}</td>
                                                                            <td>{{ $us_order->email }}</td>
                                                                            <td>{{ $us_order->phone }}</td>

                                                                        <td>
                                                                            <a class="product" href="">
                                                                                <div class="product-image">
                                                                                    <div class="">
                                                                                            <img width="50" height="100" alt="1" class="wp-post-image" src="">
                                                                                        </div>
                                                                                </div>
                                    
                                                                            </a><!-- /.product -->
                                                                        </td>
                    
                                                                        <td>
                                                                            <div class="product-price price"><span class="electro-price"><span class="amount"> {{ $us_order->price }} </span></span></div>
                                                                        </td>

                                                     
                                                                                                                    
                                                                    </tr>
                                                                @endforeach
                                                            
                                                               
                                                            </tbody>
                                                        </table>       
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- .entry-content -->
                                            </article><!-- #post-## -->
                                </div>
                                <div class="clear"></div>

                                <div class="form-row">
                                        <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                                                <div itemprop="mainContentOfPage" class="entry-content">
                                                    <div class="table-responsive">

                                                       <!--?php    dd($user_orders)  ?-->
                                                       <h1 class="page-title">My Wishlists</h1>

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
                                                                        <a href="single_product/{{ $products->wishlist()->first()->id }}"><img width="180" height="180" alt="1" class="wp-post-image" src="{{url('public/upload/products/'.$products->wishlist()->first()->photo)}}"></a>
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

                                           
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- .entry-content -->
                                            </article><!-- #post-## -->
                                </div>


                                {{-- tickts result --}}

                                <div class="form-row">
                                        <article class="post-2917 page type-page status-publish hentry" id="post-2917">
                                                <div itemprop="mainContentOfPage" class="entry-content">
                                                    <div class="table-responsive">

                                                       <!--?php    dd($user_orders)  ?-->
                                                       <h1 class="page-title"> {{ trans('admin.Complains Tickets') }}  </h1>

                                                       <table class="table table-compare compare-list">
                                                            <tbody>
                                                                <tr>
                                                                        <th>{{ trans('admin.OrderCode')}}</th>
                                                                        <th>{{ trans('admin.Complain')}}</th>
                                                                        <th>{{ trans('admin.Complain Transaction')}}</th> 

                                                                </tr>

                                                                @foreach($tickets as $tick)
                                                            
                                                                    <tr>

                                                                        <td> {{ $tick->order_code }}  </td>

                                                                        <td>
                                                                            @if($tick->complain == 'late-Deliver')

                                                                                {{ trans('admin.Late-Deliver') }} 
                                            
                                                                            @elseif($tick->complain == 'Broken')
                                            
                                                                               {{ trans('admin.Broken') }}
                                            
                                                                            @elseif($tick->complain == 'Not-Deliver')
                                                                            
                                                                               {{ trans('admin.Not-Deliver') }}
                                            
                                                                            @endif
                                                                            
                                                                        </td>
                    
                                                                        <td>


                                                                            @if($tick->stauts == 'Customer-Contact')
                                                                               
                                                                            <label class="label label-default" style="font-size: 15px;">{{trans('admin.Customer-Contact')}} </label>
                                                                             
                                                
                                                                            @elseif($tick->stauts == 'Reship-Order')
                                                
                                                                            <label class="label label-success" style="font-size: 15px;"> {{ trans('admin.Reship-Order') }} </label>
                                                
                                                                            @elseif($tick->stauts == 'Return-Order')
                                                
                                                                            <label class="label label-info" style="font-size: 15px;"> {{ trans('admin.Return-Order') }} </label>
                                                
                                                                            @elseif($tick->stauts == 'Pinding')
                                                
                                                                            <label class="label label-warning" style="font-size: 15px;">  {{  trans('admin.Pinding')  }} </label>
                                                                            
                                                                            @elseif($tick->stauts == 'Unactive-Vendor')
                                                
                                                                            <label class="label label-primary" style="font-size: 15px;">  {{ trans('admin.Unactive-Vendor') }} </label>
                                                
                                                                            @else  
                                                
                                                                            <label class="label label-danger" style="font-size: 15px;"> {{ trans('admin.Order-Cancel') }} </label>
                                                
                                                
                                                                            @endif


                                                                        </td>

                                                     
                                                                                                                    
                                                                    </tr>
                                                                @endforeach
                                                            
                                                               
                                                            </tbody>
                                                        </table>   

                                               

                                           
                                                    </div><!-- /.table-responsive -->
                                                </div><!-- .entry-content -->
                                        </article><!-- #post-## -->
                                </div>
                        
                            </div>
                        </div><!-- .entry-content -->

       
                </main><!-- #main -->
            </div><!-- #primary -->
        </div><!-- .col-full -->
    </div>

@endsection