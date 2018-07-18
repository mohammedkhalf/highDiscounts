@extends('front.index')

@section('title')
    Create Product
@endsection
@section('up')
    {{trans('front.createp')}}
@endsection
@section('content')
   

    
    
    
      
        <div class="container">
            <div class="row">
                    {!! Form::open(['url'=>app('fe').'/vendorp','id'=>'review-form','class'=>'smart-form','files'=>true]) !!}

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

      <div class="imageUpload col-sm-12 form-group">
          <div class="col-sm-1 pull-right" style="margin-top: 25px">
              <a class="btn btn-info btn-rounded  addInput">Add</a>
          </div>
          <div class="inputDiv">
              <div class="col-sm-10">
                      {!! Form::label('media[]',trans('admin.media')) !!}
                      {!! Form::file('media[]',['class'=>'form-control']) !!}
                      <p class="help-block">{{$errors->first('media')}}</p>
              </div>
              <div class="col-sm-1 pull-right" style="margin-top: 25px">
                  <a class="btn btn-danger btn-rounded removeInput">Remove</a>
              </div>
          </div>
      </div>
   <div class="form-group col-sm-12">
        {!! Form::label('color',trans('admin.color')) !!}
        {!! Form::text('color',old('color'),['class'=>'form-control']) !!}
         <p class="help-block">{{$errors->first('color')}}</p>
     </div>

      <div class="colorUpload col-sm-12 form-group ">
          <div class="col-sm-1 pull-right" style="margin-top: 25px">
              <a class="btn btn-info btn-rounded addcolor">Add</a>
          </div>
          <div class="colorDiv">
              <div class="col-sm-10">
         
                            {!! Form::label('colorx[]',trans('admin.colorx')) !!}
        {!! Form::text('colorx[]',old('colorx'),['class'=>'form-control']) !!}
         <p class="help-block">{{$errors->first('colorx')}}</p>
              </div>
              <div class="col-sm-1 pull-right" style="margin-top: 25px">
                  <a class="btn btn-danger btn-rounded removecolor">Remove</a>
              </div>
          </div>
      </div>

   <div class="form-group col-sm-12">
        {!! Form::label('size',trans('admin.size')) !!}
        {!! Form::text('size',old('size'),['class'=>'form-control']) !!}
         <p class="help-block">{{$errors->first('size')}}</p>
     </div>
    <div class="sizeUpload col-sm-12 form-group ">
          <div class="col-sm-1 pull-right" style="margin-top: 25px">
              <a class="btn btn-info btn-rounded addsize">Add</a>
          </div>
          <div class="sizeDiv">
              <div class="col-sm-10">
               {!! Form::label('sizex[]',trans('admin.sizex')) !!}
        {!! Form::text('sizex[]',old('sizex'),['class'=>'form-control']) !!}
         <p class="help-block">{{$errors->first('sizex')}}</p>
              </div>
              <div class="col-sm-1 pull-right" style="margin-top: 25px">
                  <a class="btn btn-danger btn-rounded removesize ">Remove</a>
              </div>
          </div>
      </div>



<div class="form-group col-sm-12">
        {!! Form::label('price',trans('admin.price')) !!}
        {!! Form::text('price',old('price'),['class'=>'form-control']) !!}
         <p class="help-block">{{$errors->first('price')}}</p>
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

            @if(count($department) > 0)
                <script type="text/javascript">
                    $(document).on('change','.checkparent',function(){
                        var parent = $('option:selected',this).val();
                        var master = $('option:selected',this).attr('master');

                        if(parent == '' || parent == null || master == 'master')
                        {
                            $('.result').empty();
                        }else{

                            $.ajax({
                                url:'{{url(app('aurl').'/department_product/check/parent')}}',
                                type:'post',
                                dataType:'json',
                                data:{parent:parent,'_token':'{!! csrf_token() !!}'},
                                beforeSend: function()
                                {
                                    $('.spin_dep').removeClass('hidden');
                                },success: function(data)
                                {
                                    if(data != 'false')
                                    {
                                        $('.result').append(data);
                                    }
                                    $('.spin_dep').addClass('hidden');
                                },error: function()
                                {
                                    $('.spin_dep').addClass('hidden');
                                }
                            });
                        }

                    });
                </script>
                <fieldset>
                    <label>{{trans('admin.sub_to')}}</label>
                    {!! Form::select('parent',$department,old('parent'),['class'=>'form-control checkparent','placeholder'=>trans('admin.master_department')]) !!}
                </fieldset>
            @endif
        </div>
            <div class="result">

            </div>
            <p><i class="fa fa-spinner fa-spin fa-2x hidden spin_dep"></i></p>

                <footer>
                                <button type="submit" class="btn btn-primary" style="margin-top: 20px">
                                    {{trans('admin.add')}}
                                </button>
                            </footer>
                        {!! Form::close() !!}
                    </div>
                </div>
            
            
           
        
    



   
@endsection