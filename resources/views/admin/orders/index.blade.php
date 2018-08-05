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

    

        <table class="table datatable-button-html5-columns">
            <thead>
            <tr>
                
                 <th>{{trans('admin.code')}}</th>
                <th>{{trans('admin.name')}}</th>
                <th>{{trans('admin.city')}}</th>
                <th>{{trans('admin.phone')}}</th>
                <th>{{trans('admin.totalprice')}}</th>
               <th>{{trans('admin.status')}}</th>
                <th>{{trans('admin.apply')}}</th>
               <th>{{trans('admin.order_details')}}</th>

            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
           
                <tr>
                     
                    
                    <td>{{$order->code}}</td>
                   @if(!empty( $order->user()->get()))
                       @foreach($order->user()->get() as $user)
                       
                            <td>{{ $user->name}}</td>

                           @endforeach
                       @endif

                     @if(!empty( $order->country()->get()))
                       @foreach($order->country()->get() as $country)
                            <td>{{ $country->country_name_en}}</td>
                           @endforeach
                       @endif
                   
                   
                    <td>{{$order->phone}}</td>
                    <td>{{$order->price}}</td>
                    {!! Form::open(['url'=>app('aurl').'/orders/status/'.$order->id,'method'=>'post']) !!}
                        <td> <select style="width: 100px" class="form-control" name="level">
                          <option value="prepare" @if($order->level == 'prepare') selected @endif>Prepare</option>
                          <option value="ship" @if($order->level == 'ship') selected @endif>Shipping</option>
                          <option value="done" @if($order->level == 'done') selected @endif>Done</option>
                          <option value="reject" @if($order->level == 'reject') selected @endif>Reject</option>
                             </select></td>                  
                        <td><button type="submit"><i class="icon-basket"></i> <span>Apply</span></button></td>

                   {!! Form::close() !!}
                      <td><a href="{{aurl('orders/details/'.$order->id)}}"><i class="icon-eye"></i> <span>View</span></a>
                    </td>
                </tr>
              
            @endforeach
            </tbody>
        </table>
    </div>



@endsection