@extends('admin.index')

{{--@section('title')
    All Users
@endsection--}}
@section('up')
    {{trans('admin.allCategories')}}
@endsection
@section('content')


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">All Categories</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="{{aurl('Categories/create')}}"><span class="label border-left-primary label-striped">Add Country</span></a>
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
                <th>{{trans('admin.country_name_ar')}}</th>
                <th>{{trans('admin.country_name_en')}}</th>
                <th>{{trans('admin.country_logo')}}</th>
                <th>{{trans('admin.country_city')}}</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->category_ar_name}}</td>
                    <td>{{$category->category_en_name}}</td>
                    <td><img src="{{Storage::url($category->logo)}}"></td>
                    <td>
                        <a href="{{'countries/cities/'.$category->id}}">
                            <i class="icon-pen6"></i> <span>{{trans('admin.all_city')}}</span>
                        </a>
                    </td>
                    <td><a href="{{'categories/edit/'.$category->id}}"><i class="icon-pen6"></i> <span>edit</span></a>
                    </td>
                    <td><a href><i class="icon-trash"></i> <span>delete</span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>



@endsection