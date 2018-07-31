@extends('admin.index')

{{--@section('title')
    All Users
@endsection--}}
@section('up')
    {{trans('admin.orders')}}
@endsection
@section('content')


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">All {{trans('admin.orders')}}</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                  
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

    

         <div class="table-responsive">
                <table class="table table-lg">
                    <thead>
                        <tr>
                            <th class="col-sm-1">Image</th>
                            <th class="col-sm-1">Product Name</th>
                            <th class="col-sm-1">Price</th>
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($orderItem as $products)
                        <tr>
                       <td class="product-thumbnail">
                        <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{url('/upload/products/'.$products->shoppings()->first()->photo)}}">
                       </td>
                            <td>
                              <h6 class="no-margin">{{$products->shoppings()->first()->en_title}}</h6>
                             
                            </td>
                            <td>{{$products->item_price}} LE</td>
                       
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>



@endsection