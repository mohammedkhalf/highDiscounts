@extends(app('at').'.index')
{{--@section('title')
    Products
@endsection--}}
@section('up')
    {{trans('admin.products')}}
@endsection
@section('content')
	<div class="box box-info">
		<div class="box-header">
			<div class="col-md-2">
				<h3 class="box-title">
					<a href="{{url(app('aurl').'/products/create')}}" class="btn text-green btn-success btn-app">
						<i class="fa fa-plus"></i>	{{trans('admin.add')}}
					</a>
				</h3>
			</div>
			<div class="col-md-4 col-md-offset-2">
				<h3>
				
				</h3>
			</div>
		</div>
	</div>

	<section class="content">
		<!-- widget content -->
		<div class="widget-body no-padding">
						 	<table class="table table-striped table-bordered table-hovered">
		 					<tr>
		 						<td>{{ trans('admin.en_name') }}</td>
		 						<td>{{ trans('admin.ar_name') }}</td>
								<td>{{ trans('admin.department') }}</td>
								<td>{{ trans('admin.photo') }}</td>
		 						<td>{{trans('admin.action')}}</td>
		 					</tr>	
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

								<td><img src="{{url('/upload/products/'.$products->photo)}}" style="width: 150px;height: 100px;" /></td>
								<td>
		 							<a href="{{url(app('aurl').'/products/'.$products->id.'/edit')}}" class="btn btn-info">{{trans('admin.edit')}}</a>
		 							{!! Form::open(['method'=>'delete','url'=>app('aurl').'/products/'.$products->id,'style'=>'display:inline','class'=>'form'.$products->id]) !!}
									<a type="button" href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
										{{trans('admin.delete')}}
									</a>
									<div class="modal modal-danger fade" id="modal-danger">
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
													<button  href="{{url(app('aurl').'/department_product/'.$products->id)}}" type="submit" class="btn btn-outline">{{trans('admin.yes')}}</button>
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
					 {!! str_replace('/?','?',$allproducts->render()) !!}

		</div>
		<!-- end widget div -->
	</section>
	</div>
	<!-- end widget -->

@stop