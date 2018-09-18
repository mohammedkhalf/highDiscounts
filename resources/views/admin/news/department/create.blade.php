@extends(app('at').'.index')
{{--@section('title')
   Add department
@endsection--}}
@section('up')
    {{trans('admin.department_news')}}
@endsection
@section('content')
	<section class="content">
					<!-- widget content -->
		<div class="widget-body no-padding">

			{!! Form::open(['url'=>app('aurl').'/department_news','id'=>'review-form','class'=>'smart-form','files'=>true]) !!}


		     <div class="form-group col-sm-12">
        {!! Form::label('en_name',trans('admin.en_name')) !!}
        {!! Form::text('en_name',old('en_name'),['class'=>'form-control']) !!}
          <p class="help-block">{{$errors->first('en_name')}}</p>
     </div>
     <div class="form-group col-sm-12">
        {!! Form::label('ar_name',trans('admin.ar_name')) !!}
        {!! Form::text('ar_name',old('ar_name'),['class'=>'form-control']) !!}
      <p class="help-block">{{$errors->first('ar_name')}}</p>
     </div>


			<footer>
				<button type="submit" class="btn btn-primary">
					{{trans('admin.add')}}
				</button>
			</footer>
			{!! Form::close() !!}

		</div>
		<!-- end widget div -->
	</section>
	</div>

@endsection