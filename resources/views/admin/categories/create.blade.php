@extends('admin.index')

@section('title')
    Add Countries
@endsection
@section('up')
    {{trans('admin.addcategories')}}
@endsection
@section('content')


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Categories</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="{{aurl('categories')}}"><span
                                    class="label border-left-primary label-striped">All categories</span></a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form enctype="multipart/form-data" @if(isset($CategoryId)) action="{{aurl('categories/update/'.$CategoryId->id)}}"
              @else action="{{aurl('categories')}}"
              @endif method="post">

            {!! csrf_field() !!}
            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                    </div>
                    <h5 class="content-group">Add New categories
                        <small class="display-block">To Your System</small>
                    </h5>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="category_ar_name"
                           @if(isset($CategoryId))
                           value="{{$CategoryId->category_ar_name}}"
                           @else
                           value="{{old('category_ar_name')}}"
                           @endif

                           class="form-control"
                           placeholder="{{trans('admin.category_ar_name')}}">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="category_en_name"
                           @if(isset($CategoryId))
                           value="{{$CategoryId->category_en_name}}"
                           @else
                           value="{{old('category_en_name')}}"
                           @endif

                           class="form-control"
                           placeholder="{{trans('admin.category_en_name')}}">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="file" name="logo"
                           @if(isset($CategoryId))
                           value="{{$CategoryId->logo}}"
                           @else
                           value="{{old('logo')}}"
                           @endif

                           class="form-control"
                           placeholder="{{trans('admin.logo')}}">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <select name="parent" class="form-control">
                        <option value="">Main Country</option>
                     @foreach($categoryAll as $category)
                            <option value="{{$category->id}}">{{$category->category_ar_name}}</option>
                        @endforeach
                    </select>
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-blue btn-block">Login <i
                                class="icon-arrow-right14 position-right"></i></button>
                </div>

            </div>
        </form>

    </div>
    <!-- /column selectors -->



@endsection