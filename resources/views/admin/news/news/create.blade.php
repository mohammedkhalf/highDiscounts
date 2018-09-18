@extends(app('at').'.index')
{{--@section('title')
   Add Products
@endsection--}}
@section('up')
    {{trans('admin.products')}}
@endsection
@section('content')

	<section class="content">
		<!-- widget content -->
		<div class="widget-body no-padding">
  <!-- /.box-header -->
  <div class="box-body">
    {!! Form::open(['url'=>aurl('news'),'files'=>true,'enctype' =>'multipart/form-data']) !!}
      {!! csrf_field() !!}

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

      <div class="form-group col-sm-12">
          {!! Form::label('photo',trans('admin.photo')) !!}
          {!! Form::file('photo',['class'=>'form-control'],'multiple') !!}
          <p class="help-block">{{$errors->first('photo')}}</p>
      </div>



      <div class="form-group col-sm-12">
          {!! Form::label('en_content',trans('admin.en_content')) !!}
          {!! Form::text('en_content',old('en_content'),['class'=>'form-control']) !!}
          <p class="help-block">{{$errors->first('en_content')}}</p>
      </div>

      <div class="form-group col-sm-12">
          {!! Form::label('ar_content',trans('admin.ar_content')) !!}
          {!! Form::text('ar_content',old('ar_content'),['class'=>'form-control']) !!}
          <p class="help-block">{{$errors->first('ar_content')}}</p>
      </div>

      <div class="form-group col-sm-12">
          {!! Form::label('dep',trans('admin.department')) !!}
          {!! Form::select('dep_id',$alldep,old('dep_id'),['class'=>'form-control']) !!}
      </div>


      <div class="form-group col-sm-12">
     {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
          </div>

    {!! Form::close() !!}

 		</div>
		<!-- end widget div -->
	</section>
	</div>
			<!-- end widget -->	
	

@endsection