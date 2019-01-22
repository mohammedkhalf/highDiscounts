@extends(app('at').'.index')
{{--@section('title')
  Single Order
@endsection--}}
@section('up')
    {{trans('admin.Complain')}}
@endsection
@section('content')


        <form action="{{ aurl('saveSocial') }}"  method="post">

            {{ csrf_field() }}

            <div class="panel panel-body login-form">
                
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-gear"></i>
                    </div>
                    <h5 class="content-group">{{trans('admin.addSocialMedia')}}
                    </h5>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label>{{trans('admin.facebook')}}</label>
                    <input type="text" name="facebook"
                        value=""
                        class="form-control" required
                        >
                    <div class="form-control-feedback">
                        <i class="icon-facebook text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label>{{trans('admin.twitter')}}</label>
                    <input type="text" name="twitter"
                        value=""
                        class="form-control" required
                        >
                    <div class="form-control-feedback">
                        <i class="icon-twitter text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label>{{trans('admin.youtube')}}</label>
                    <input type="text" name="youtube"
                        value=""
                        class="form-control" required
                        >
                    <div class="form-control-feedback">
                        <i class="icon-youtube text-muted"></i>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-blue btn-block"> {{ trans('admin.submit') }}  <i
                    class="icon-arrow-right14 position-right"></i></button>
                </div>


            </div>
        </form>


@endsection 