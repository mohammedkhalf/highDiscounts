<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.depatments')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


	<!-- Small boxes (Stat box) -->

	<div class="box box-info">
		<div class="box-header">
			<div class="col-md-2">
				<h3 class="box-title">
					<a href="<?php echo e(url(app('aurl').'/department_product/create')); ?>" class="btn  btn-success btn-app">
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
					<td><?php echo e(trans('admin.country_name_en')); ?></td>
						<td><?php echo e(trans('admin.country_name_ar')); ?></td>
					
					<td><?php echo e(trans('admin.action')); ?></td>
				</tr>
				<?php $__currentLoopData = $alldep; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
							<td>
								<?php if(App\Model\DepartmentProducts::where('parent','=',$dep->id)->count() > 0): ?>
									<a href="<?php echo e(url(app('aurl').'/department_product?department='.$dep->id)); ?>"><?php echo e($dep->en_name); ?></a>
								<?php else: ?>
									<?php echo e($dep->en_name); ?>

								<?php endif; ?>
							</td>
							<td>
								<?php if(App\Model\DepartmentProducts::where('parent','=',$dep->id)->count() > 0): ?>
									<a href="<?php echo e(url(app('aurl').'/department_product?department='.$dep->id)); ?>"><?php echo e($dep->ar_name); ?></a>
								<?php else: ?>
									<?php echo e($dep->en_name); ?>

								<?php endif; ?>
							</td>
						
						<td>
						<a href="<?php echo e(url(app('aurl').'/department_product/'.$dep->id.'/edit')); ?>" class="btn btn-info"><?php echo e(trans('admin.edit')); ?></a>

												<?php echo Form::open(['method'=>'delete','url'=>app('aurl').'/department_product/'.$dep->id,'style'=>'display:inline','class'=>'form'.$dep->id]); ?>


						
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
											<button  href="<?php echo e(url(app('aurl').'/department_product/'.$dep->id)); ?>" type="submit" class="btn btn-outline"><?php echo e(trans('admin.yes')); ?></button>
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


			<!-- end widget content -->

		</div>
		<!-- end widget div -->
	</section>
	</div>
	<!-- end widget -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>