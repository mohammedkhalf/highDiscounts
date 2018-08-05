@extends(app('at').'.index')
{{--@section('title')
  Single Order
@endsection--}}
@section('up')
    {{trans('admin.order_details')}}
@endsection
@section('content')

	<div class="box box-info">
		<div class="box-header">

			<div class="col-md-12 col-md-offset-6">
			
			</div>
		</div>
	</div>
	<section class="content"><div class="panel panel-white">
            <div class="panel-heading">
              <h6 class="panel-title">Order invoice<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
              <div class="heading-elements">
                
                <button type="button" onclick="myFunction()" class="btn btn-default btn-xs heading-btn"><i class="icon-printer position-left"></i> Print</button>
                      </div>
            </div>
                <script>
                function myFunction() {
                    window.print();
                }
                </script>
            <div class="panel-body no-padding-bottom">
              <div class="row">
            
                <div class="col-sm-6 content-group">
                  <div class="invoice-details">
                    <h5 class="text-uppercase text-semibold">Order : {{$order->code}}</h5>
                    <ul class="list-condensed list-unstyled">
                      <li>Date: <span class="text-semibold">{{$order->created_at}}</span></li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-lg-9 content-group">
                  <span class="text-muted">Order To:</span>
                  <ul class="list-condensed list-unstyled">
                    <li><h5>{{$order->name}}</h5></li>
                    <span class="text-muted">Address:</span>
                    <li><span class="text-semibold"><h5>{{$order->address}}</h5></span></li>
                     @if(!empty( $order->country()->get()))
                       @foreach($order->country()->get() as $country)
                            <li><h5>{{ $country->country_name_en}}</h5></li>
                           @endforeach
                       @endif
                    <li><h5>Egypt</h5></li>
                   <span class="text-muted">Email:</span>
                    <li><a href="#"><h5>{{$order->email}}</h5></a></li>
                  </ul>
                </div>

                <div class="col-md-6 col-lg-3 content-group">
                         <span class="text-muted">Order Details</span>
                  <ul class="list-condensed list-unstyled invoice-payment-details">
                    <li><h5>Order ID: <span class="text-right text-semibold">{{$order->id}}</span></h5></li>
                    <li><h5>Order Code: <span class="text-right text-semibold">{{$order->code}}</span></h5></li>
                   <li><h5>Order Status: <span class="text-right text-semibold">{{$order->level}}</span></h5></li>
                 
                  </ul>
                  <span class="text-muted">Payment Details:</span>
                  <ul class="list-condensed list-unstyled invoice-payment-details">
                    <li><h5>Total Due: <span class="text-right text-semibold">{{$order->price}} LE</span></h5></li>
                   
                 
                  </ul>

                </div>
              </div>
            </div>

            <div class="table-responsive">

                <table class="table table-lg">
                  
                    <thead>
                      <tr>
                          <h3 class="text-center">Order Items</h3>
                      </tr>
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

		<!-- end widget div -->

	</div>


@stop