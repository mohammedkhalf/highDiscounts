<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.products')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="box box-info">
		<div class="box-header">

			<div class="col-md-12 col-md-offset-6">
			
			</div>
		</div>
	</div>
	<section class="content">
		<!-- widget content -->
		<div class="widget-body no-padding">
						
					<?php echo Form::open(['url'=>app('aurl').'/products/'.$products->id,'method'=>'put','id'=>'review-form','class'=>'smart-form','files'=>true]); ?>



							    <div class="form-group col-sm-12">
        <?php echo Form::label('en_name',trans('admin.en_name')); ?>

        <?php echo Form::text('en_name',$products->en_title,['class'=>'form-control']); ?>

         <p class="help-block"><?php echo e($errors->first('en_name')); ?></p>
     </div>
      <div class="form-group col-sm-12">
          <?php echo Form::label('ar_name',trans('admin.ar_name')); ?>

          <?php echo Form::text('ar_name',$products->ar_title,['class'=>'form-control']); ?>

          <p class="help-block"><?php echo e($errors->first('ar_name')); ?></p>
      </div>

      <div class=" col-sm-12">

          <img src="<?php echo e(url('/upload/products/'.$products->photo)); ?>" style="width: 150px;height: 150px;" />

      </div>
      <div class="form-group col-sm-12">
          <?php echo Form::label('photo',trans('admin.photo')); ?>

          <?php echo Form::file('photo',['class'=>'form-control']); ?>

          <p class="help-block"><?php echo e($errors->first('photo')); ?></p>
      </div>
      <?php if(!empty($products->products_gallary()->get())): ?>
      <div class="col-sm-12">
          <?php $__currentLoopData = $products->products_gallary()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <img src="<?php echo e(url('/upload/products/'.$media->media)); ?>" style="width: 150px;height: 150px;" />
             <button type="button" class="btn btn-danger btn-rounded" data-toggle="modal" data-target="#del_admin<?php echo e($media->id); ?>">Delete</button>
              <!-- Modal -->
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <?php endif; ?>
      <div class="imageUpload col-sm-12 form-group">
          <div class="col-sm-1 pull-right" style="margin-top: 25px">
              <a class="btn btn-info addInput btn-rounded">Add</a>
          </div>
          <div class="inputDiv">
              <div class="col-sm-10">
                  <?php echo Form::label('media[]',trans('admin.media')); ?>

                  <?php echo Form::file('media[]',['class'=>'form-control']); ?>

                  <p class="help-block"><?php echo e($errors->first('media')); ?></p>
              </div>
              <div class="col-sm-1 pull-right" style="margin-top: 25px">
                  <a class="btn btn-danger removeInput btn-rounded">Remove</a>
              </div>
          </div>
      </div>

	  <div class="form-group col-sm-12">
          <?php echo Form::label('en_content',trans('admin.en_content')); ?>

          <?php echo Form::text('en_content',$products->en_content,['class'=>'form-control']); ?>

          <p class="help-block"><?php echo e($errors->first('en_content')); ?></p>
      </div>

      <div class="form-group col-sm-12">
          <?php echo Form::label('ar_content',trans('admin.ar_content')); ?>

          <?php echo Form::text('ar_content',$products->ar_content,['class'=>'form-control']); ?>

          <p class="help-block"><?php echo e($errors->first('ar_content')); ?></p>
      </div>

	   <div class="form-group col-sm-12">
			<?php if(count($department) > 0 ): ?>
				<script type="text/javascript">
                    $(document).on('click','.movedep',function(){
                        $('.updatedepartment').toggleClass('hidden');
                        return false;
                    });
				</script>
				<div class="form-group">
					<a href="#" class="btn btn-danger movedep"><?php echo e(trans('admin.move_department')); ?></a>
				</div>

				<div class="updatedepartment hidden">
					<script type="text/javascript">
                        $(document).on('change','.checkparent',function(){
                            var parent = $('option:selected',this).val();
                            var master = $('option:selected',this).attr('master');

                            if(parent == '' || parent == null || master == 'master')
                            {
                                $('.result').empty();
                            }else{

                                $.ajax({
                                    url:'<?php echo e(url(app('aurl').'/department_product/check/parent')); ?>',
                                    type:'post',
                                    dataType:'json',
                                    data:{parent:parent,'_token':'<?php echo csrf_token(); ?>'},
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
						<label><?php echo e(trans('admin.sub_to')); ?></label>
						<?php echo Form::select('parent',$department,old('parent'),['class'=>'form-control checkparent','placeholder'=>trans('admin.master_department')]); ?>

					</fieldset>
					<?php endif; ?>
					 </div>

				<div class="form-group col-sm-12">
					<div class="result">

					</div>
				</div>
					<p><i class="fa fa-spinner fa-spin fa-2x hidden spin_dep"></i></p>
				</div>
							<footer>
								<button type="submit" class="btn btn-primary" style="margin-top: 20px">
									<?php echo e(trans('admin.save')); ?>

								</button>
							</footer>
						<?php echo Form::close(); ?>

    <?php if(!empty($products->products_gallary()->get())): ?>
    <div id="del_admin<?php echo e($media->id); ?>" class="modal fade" >
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><?php echo e(trans('admin.delete')); ?></h4>
                </div>
                <?php echo Form::open(['id'=>'form_data','url'=>aurl('products/destroyimage/'.$media->id),'method'=>'delete']); ?>

                <div class="modal-body">
                    <h4><?php echo e(trans('admin.delete_photo')); ?></h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-info" data-dismiss="modal"><?php echo e(trans('admin.close')); ?></button>
                    <?php echo Form::submit(trans('admin.yes'),['class'=>'btn btn-danger']); ?>

                </div>
                <?php echo Form::close(); ?>

            </div>
        </div>
    </div>
    <?php endif; ?>
		<!-- end widget div -->
	</section>
	</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>