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
                <th>ID</th>
                <th>{{trans('admin.name')}}</th>
                <th>{{trans('admin.city')}}</th>
                <th>{{trans('admin.address')}}</th>
                <th>{{trans('admin.email')}}</th>
                <th>{{trans('admin.phone')}}</th>
                <th>{{trans('admin.totalprice')}}</th>
             
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
           
                <tr>
                     
                    <td>{{$order->id}}</td>
                   @if(!empty( $order->user()->get()))
                       @foreach($order->user()->get() as $user)
                       
                            <td><a href="{{aurl('orders/details/'.$order->id)}}">{{ $user->name}}</a></td>

                           @endforeach
                       @endif

                     @if(!empty( $order->country()->get()))
                       @foreach($order->country()->get() as $country)
                            <td>{{ $country->country_name_en}}</td>
                           @endforeach
                       @endif
                    <td>{{$order->address}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->price}}</td>
                   
                   
                    <td><a href><i class="icon-trash"></i> <span>reject</span></a></td>
                   
                </tr>
                
            @endforeach
            </tbody>
        </table>
    </div>



@endsection