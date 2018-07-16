<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.products')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="box box-info">
		<div class="box-header">
			<div class="col-md-2">
				<h3 class="box-title">
					<a href="<?php echo e(url(app('aurl').'/products/create')); ?>" class="btn text-green btn-success btn-app">
						<i class="fa fa-plus"></i>	<?php echo e(trans('admin.add')); ?>

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
		 						<td><?php echo e(trans('admin.en_name')); ?></td>
		 						<td><?php echo e(trans('admin.ar_name')); ?></td>
								<td><?php echo e(trans('admin.department')); ?></td>
								<td><?php echo e(trans('admin.photo')); ?></td>
		 						<td><?php echo e(trans('admin.action')); ?></td>
		 					</tr>	
		 					<?php $__currentLoopData = $allproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		 					<tr>
								<td><?php echo e($products->en_title); ?></td>
								<td><?php echo e($products->ar_title); ?></td>
								<?php $department = App\Model\DepartmentProducts::where('id','=',$products->dep_id)->pluck('en_name');?>
								<td>
									<?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										<?php echo $dep; ?>

									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</td>

								<td><img src="<?php echo e(url('/upload/products/'.$products->photo)); ?>" style="width: 150px;height: 100px;" /></td>
								<td>
		 							<a href="<?php echo e(url(app('aurl').'/products/'.$products->id.'/edit')); ?>" class="btn btn-info"><?php echo e(trans('admin.edit')); ?></a>
		 							<?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/products/'.$products->id,'style'=>'display:inline','class'=>'form'.$products->id]); ?>

									<a type="button" href="#" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
										<?php echo e(trans('admin.delete')); ?>

									</a>
									<div class="modal modal-danger fade" id="modal-danger">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span></button>
													<h4 class="modal-title"><?php echo e(trans('admin.ask_to_delete')); ?></h4>
												</div>
												<div class="modal-body">
													<p><?php echo e(trans('admin.ask_to_delete')); ?>&hellip;</p>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-outline pull-left" data-dismiss="modal"><?php echo e(trans('admin.no')); ?></button>
													<button  href="<?php echo e(url(app('aurl').'/department_product/'.$products->id)); ?>" type="submit" class="btn btn-outline"><?php echo e(trans('admin.yes')); ?></button>
												</div>
											</div>
											<!-- /.modal-content -->
										</div>
										<!-- /.modal-dialog -->
									</div>
									<!-- /.modal -->
									<?php echo Form::close(); ?>


		 						</td>
		 					</tr>
		 					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		 				</table>					
					 <?php echo str_replace('/?','?',$allproducts->render()); ?>


		</div>
		<!-- end widget div -->
	</section>
	</div>
	<!-- end widget -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>