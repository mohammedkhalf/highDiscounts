@extends('admin.index')

@section('title')
    Add Countries
@endsection
@section('up')
    {{trans('admin.addcountries')}}
@endsection
@section('content')


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Countries</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="{{aurl('countries')}}"><span
                                    class="label border-left-primary label-striped">All Countries</span></a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form enctype="multipart/form-data" @if(isset($countryId)) action="{{aurl('countries/update/'.$countryId->id)}}"
              @else action="{{aurl('countries')}}"
              @endif method="post">

            {!! csrf_field() !!}
            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                    </div>
                    <h5 class="content-group">Add New Countries
                        <small class="display-block">To Your System</small>
                    </h5>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="country_name_ar"
                           @if(isset($countryId))
                           value="{{$countryId->country_name_ar}}"
                           @else
                           value="{{old('country_name_ar')}}"
                           @endif

                           class="form-control"
                           placeholder="{{trans('admin.country_name_ar')}}">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="country_name_en"
                           @if(isset($countryId))
                           value="{{$countryId->country_name_en}}"
                           @else
                           value="{{old('country_name_en')}}"
                           @endif

                           class="form-control"
                           placeholder="{{trans('admin.country_name_en')}}">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="mob"
                           @if(isset($countryId))
                           value="{{$countryId->mob}}"
                           @else
                           value="{{old('mob')}}"
                           @endif

                           class="form-control"
                           placeholder="{{trans('admin.country_mob')}}">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="code"
                           @if(isset($countryId))
                           value="{{$countryId->code}}"
                           @else
                           value="{{old('code')}}"
                           @endif

                           class="form-control"
                           placeholder="{{trans('admin.country_code')}}">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="file" name="logo"
                           @if(isset($countryId))
                           value="{{$countryId->logo}}"
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
                        @foreach($countryAll as $allcountry)
                            <option value="{{$allcountry->id}}">{{$allcountry->code}}</option>
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