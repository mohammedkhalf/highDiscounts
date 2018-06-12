@extends('admin.index')

{{--@section('title')
    All Users
@endsection--}}
@section('up')
    {{trans('admin.all_city')}}
@endsection
@section('content')


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">{{trans('admin.all_city')}}</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="{{aurl('countries/create')}}"><span class="label border-left-primary label-striped">Add Cities</span></a>
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
                <th>{{trans('admin.city_name_ar')}}</th>
                <th>{{trans('admin.city_name_en')}}</th>
                <th>{{trans('admin.city_mob')}}</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cities as $city)
                <tr>
                    <td>{{$city->id}}</td>
                    <td>{{$city->country_name_ar}}</td>
                    <td>{{$city->country_name_en}}</td>
                    <td>{{$city->mob}}</td>
                    <td><a href="{{aurl('countries/edit/'.$city->id)}}"><i class="icon-pen6"></i> <span>edit</span></a>
                    </td>
                    <td><a href><i class="icon-trash"></i> <span>delete</span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection