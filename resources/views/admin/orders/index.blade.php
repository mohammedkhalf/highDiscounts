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
                    <li><a href="{{aurl('countries/create')}}"><span class="label border-left-primary label-striped">Add Country</span></a>
                    </li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            {{-- All of the data export buttons have a <code>exportOptions</code> option which can be used to specify
             information about what data should be exported and how. In this example the copy button will export column
             index 0 and all visible columns, the Excel button will export only the visible columns and the PDF button
             will export column indexes 0, 1, 2 and 5 only. Column visibility controls are also included so you can
             change the columns easily.--}}
        </div>

        <table class="table datatable-button-html5-columns">
            <thead>
            <tr>
                <th>ID</th>
                <th>{{trans('admin.name')}}</th>
                <th>{{trans('admin.order_status_code')}}</th>
                <th>{{trans('admin.order_details')}}</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                   @if(!empty( $order->user()->get()))
                       @foreach($order->user()->get() as $user)
                            <td>{{ $user->name}}</td>
                           @endforeach
                       @endif

                    <td>{{$order->order_details}}</td>
                    <td>{{$order->order_status_code}}</td>
                    {{--<td><a href="{{'countries/cities/'.$order->id}}">--}}
                            {{--<i class="icon-pen6"></i> <span>{{trans('admin.all_city')}}</span></a></td>--}}
                    <td><a href="{{'countries/edit/'.$order->id}}"><i class="icon-pen6"></i> <span>edit</span></a>
                    </td>
                    <td><a href><i class="icon-trash"></i> <span>delete</span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection