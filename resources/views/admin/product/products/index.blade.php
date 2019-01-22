@extends(app('at').'.index')
{{--@section('title')
    Products
@endsection--}}
@section('up')
    {{trans('admin.products')}}
@endsection
@section('content')


	
		   <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">{{$title}}</h5>
            	{!! Form::open(['url'=>app('aurl').'/products/import_products','id'=>'review-form','class'=>'smart-form','files'=>true]) !!}


      <div class="col-sm-12" style="margin-right: 300px">

          {!! Form::label('excel_file',trans('admin.excel_file')) !!}
          {{csrf_field()}}
          <p style="color: red">{{trans('admin.excel_file')}} must be same as a documentation you have</p>
          {!! Form::file('excel_file',['class'=>'form-control'],'multiple') !!}
          

 
         
          

           <div class="imageUpload col-sm-12 form-group">
          <div class="col-sm-1 pull-right" style="margin-top: 50px">
              <a class="btn btn-info btn-rounded  addInput">Add</a>
          </div>
          <div class="inputDiv">
              <div class="col-sm-10">
                      {!! Form::label('excel_photos',trans('admin.excel_photos')) !!}
                      <p style="color: red">{{trans('admin.excel_photos')}} must be same as a documentation you have</p>
                      {!! Form::file('excel_photos[]',['class'=>'form-control']) !!}
                     <p class="help-block">{{$errors->first('excel_file')}}</p>
              </div>
              <div class="col-sm-1 pull-right" style="margin-top: 50px">
                  <a class="btn btn-danger btn-rounded removeInput">Remove</a>
              </div>
          </div>
      </div>
          	<button type="submit" class="btn btn-primary" style="display: inline;">
									{{trans('admin.add')}}
								</button>
      </div>
			
						{!! Form::close() !!}
            <div class="heading-elements">
                <ul class="icons-list">
                	
                    <li><a href="{{url(app('aurl').'/products/create')}}"><span class="label border-left-primary label-striped">Add new one Product</span></a>
                    </li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>
	
						 <table class="table datatable-button-html5-columns">
						 	<thead>
		 					<tr>
		 						<td>{{ trans('admin.en_name') }}</td>
		 						<td>{{ trans('admin.ar_name') }}</td>
								<td>{{ trans('admin.department') }}</td>
								<td>{{ trans('admin.color') }}</td>
								<td>{{ trans('admin.size') }}</td>
								<td>{{ trans('admin.price') }}</td>
								<td>{{ trans('admin.photo') }}</td>
		 						<td>{{trans('admin.edit')}}</td>
		 						<td>{{trans('admin.delete')}}</td>
		 					</tr>	
		 					</thead>
		 					@foreach($allproducts as $products)
		 					<tr>
								<td>{{ $products->en_title }}</td>
								<td>{{ $products->ar_title }}</td>
								<?php $department = App\Model\DepartmentProducts::where('id','=',$products->dep_id)->pluck('en_name');?>
								<td>
									@foreach($department as $dep)
										{!!	$dep!!}
									@endforeach
								</td>
                          <td>{{ $products->color }}</td>
                          <td>{{ $products->size }}</td>
                          <td>{{ $products->price }}</td>
								<td><img src="{{url('public/upload/products/'.$products->photo)}}" style="width: 150px;height: 100px;" />
								</td>
								<td>
		 							<a href="{{url(app('aurl').'/products/'.$products->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
		 							{!! Form::open(['method'=>'delete','url'=>app('aurl').'/products/'.$products->id,'style'=>'display:inline','class'=>'form'.$products->id]) !!} 
		 						</td>
		 						<td>
									<a type="button" href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$products->id}}">
										{{trans('admin.delete')}}
									</a>

									<div class="modal modal-danger fade" id="modal-danger{{$products->id}}">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title">{{trans('admin.ask_to_delete')}}</h4>
												</div>
												<div class="modal-body">
													<p>{{trans('admin.ask_to_delete')}}&hellip;</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">{{trans('admin.no')}}</button>
													<button  href="{{url(app('aurl').'/products/'.$products->id)}}" type="submit" class="btn btn-outline">{{trans('admin.yes')}}</button>
												</div>
											</div>
											<!-- /.modal-content -->
										</div>
										<!-- /.modal-dialog -->
									</div>
									<!-- /.modal -->
									{!! Form::close() !!}

		 						</td>
		 					</tr>
		 					@endforeach
		 				</table>					
				{{--	 {!! str_replace('/?','?',$allproducts->render()) !!}--}}

		</div>
		<!-- end widget div -->


@endsection