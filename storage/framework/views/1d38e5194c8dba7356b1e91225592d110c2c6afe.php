<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.Products')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
	<div class="box box-info">
		<div class="box-header">

		
		</div>
	</div>
	<section class="content">
		<!-- widget content -->
		<div class="widget-body no-padding">
						
					<?php echo Form::open(['url'=>app('aurl').'/products','id'=>'review-form','class'=>'smart-form','files'=>true]); ?>


 <div class="form-group col-sm-12">
        <?php echo Form::label('en_name',trans('admin.en_name')); ?>

        <?php echo Form::text('en_name',old('en_name'),['class'=>'form-control']); ?>

         <p class="help-block"><?php echo e($errors->first('en_name')); ?></p>
     </div>

     <div class="form-group col-sm-12">
        <?php echo Form::label('ar_name',trans('admin.ar_name')); ?>

        <?php echo Form::text('ar_name',old('ar_name'),['class'=>'form-control']); ?>

         <p class="help-block"><?php echo e($errors->first('ar_name')); ?></p>
     </div>

      <div class="form-group col-sm-12">
          <?php echo Form::label('photo',trans('admin.photo')); ?>

          <?php echo Form::file('photo',['class'=>'form-control'],'multiple'); ?>

          <p class="help-block"><?php echo e($errors->first('photo')); ?></p>
      </div>

      <div class="imageUpload col-sm-12 form-group">
          <div class="col-sm-1 pull-right" style="margin-top: 25px">
              <a class="btn btn-info addInput"><i class="fa fa-plus" ></i></a>
          </div>
          <div class="inputDiv">
              <div class="col-sm-10">
                      <?php echo Form::label('media[]',trans('admin.media')); ?>

                      <?php echo Form::file('media[]',['class'=>'form-control']); ?>

                      <p class="help-block"><?php echo e($errors->first('media')); ?></p>
              </div>
              <div class="col-sm-1 pull-right" style="margin-top: 25px">
                  <a class="btn btn-danger removeInput"><i class="fa fa-minus" ></i></a>
              </div>
          </div>
      </div>

      <div class="form-group col-sm-12">
          <?php echo Form::label('en_content',trans('admin.en_content')); ?>

          <?php echo Form::text('en_content',old('en_content'),['class'=>'form-control']); ?>

          <p class="help-block"><?php echo e($errors->first('en_content')); ?></p>
      </div>

      <div class="form-group col-sm-12">
          <?php echo Form::label('ar_content',trans('admin.ar_content')); ?>

          <?php echo Form::text('ar_content',old('ar_content'),['class'=>'form-control']); ?>

          <p class="help-block"><?php echo e($errors->first('ar_content')); ?></p>
      </div>
<div class="form-group col-sm-12">

			<?php if(count($department) > 0): ?>
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
			<div class="result">

			</div>
			<p><i class="fa fa-spinner fa-spin fa-2x hidden spin_dep"></i></p>

				<footer>
								<button type="submit" class="btn btn-primary" style="margin-top: 20px">
									<?php echo e(trans('admin.add')); ?>

								</button>
							</footer>
						<?php echo Form::close(); ?>

		</div>
		<!-- end widget div -->
	</section>
	</div>
			<!-- end widget -->	
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make(app('at').'.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>