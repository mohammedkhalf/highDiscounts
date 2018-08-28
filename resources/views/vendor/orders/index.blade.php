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
                            <th class="col-sm-1">Order Code</th>
                            <th class="col-sm-1">Image</th>
                            <th class="col-sm-1">Product Name</th>
                            <th class="col-sm-1">Price</th>
                            <th class="col-sm-1">status</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach($orderItem as $products)
                        <tr>
                            <td>{{$products->order_dd()->first()->code}}</td>
                       <td class="product-thumbnail">
                        <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{url('/upload/products/'.$products->shoppings()->first()->photo)}}">
                       </td>
                            <td>
                              <h6 class="no-margin">{{$products->shoppings()->first()->en_title}}</h6>
                             
                            </td>
                            <td>{{$products->item_price}} LE</td>
                            
                     
                     {!! Form::open(['url'=>app('aurl').'/orders/status/'.$products->id,'method'=>'post']) !!}
                        <td> <select style="width: 100px" class="form-control" name="level">
                          <option value="prepare" @if($products->level == 'prepare') selected @endif>Prepare</option>
                          <option value="ship" @if($products->level == 'ship') selected @endif>Shipping</option>
                          <option value="done" @if($products->level == 'done') selected @endif>Done</option>
                          <option value="reject" @if($products->level == 'reject') selected @endif>Reject</option>
                             </select></td>                  
                        <td><button type="submit"><i class="icon-basket"></i> <span>Apply</span></button></td>

                   {!! Form::close() !!} 
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>



@endsection