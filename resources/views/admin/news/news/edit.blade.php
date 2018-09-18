@extends(app('at').'.index')
{{--@section('title')
  Edit Products
@endsection--}}
@section('up')
    {{trans('admin.products')}}
@endsection
@section('content')

	<div class="box box-info">
		<div class="box-header">

			<div class="col-md-12 col-md-offset-6">
			
			</div>
		</div>
	</div>
	<section class="content">
		<!-- widget content -->
		<div class="widget-body no-padding">
    {!! Form::open(['url'=>aurl('news/'.$posts->id),'method'=>'put','files'=>true,'enctype' =>'multipart/form-data' ]) !!}

      <div class="form-group col-sm-12">
        {!! Form::label('en_name',trans('admin.en_name')) !!}
        {!! Form::text('en_name',$posts->en_title,['class'=>'form-control']) !!}
         <p class="help-block">{{$errors->first('en_name')}}</p>
     </div>
      <div class="form-group col-sm-12">
          {!! Form::label('ar_name',trans('admin.ar_name')) !!}
          {!! Form::text('ar_name',$posts->ar_title,['class'=>'form-control']) !!}
          <p class="help-block">{{$errors->first('ar_name')}}</p>
      </div>
      <div class=" col-sm-12">

          <img src="{{url('/upload/products/'.$posts->photo)}}" style="width: 150px;height: 150px;" />

      </div>
      <div class="form-group col-sm-12">
          {!! Form::label('photo',trans('admin.photo')) !!}
          {!! Form::file('photo',['class'=>'form-control']) !!}
          <p class="help-block">{{$errors->first('photo')}}</p>
      </div>
 
  
      <div class="form-group col-sm-12">
          {!! Form::label('en_content',trans('admin.en_content')) !!}
          {!! Form::text('en_content',$posts->en_content,['class'=>'form-control']) !!}
          <p class="help-block">{{$errors->first('en_content')}}</p>
      </div>
      <div class="form-group col-sm-12">
          {!! Form::label('ar_content',trans('admin.ar_content')) !!}
          {!! Form::text('ar_content',$posts->ar_content,['class'=>'form-control']) !!}
          <p class="help-block">{{$errors->first('ar_content')}}</p>
      </div>
      <div class="form-group col-sm-12">
          {!! Form::label('dep',trans('admin.department')) !!}
          {!! Form::select('dep_id',$alldep,$posts->dep_id,['class'=>'form-control']) !!}
      </div>
      <div class="form-group col-sm-12">
     {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
      </div>
    {!! Form::close() !!}
  </div>
  <!-- /.box-body -->


		<!-- end widget div -->
	</section>
	</div>


@endsection