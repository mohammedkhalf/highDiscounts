<?php $__env->startSection('title'); ?>
     Product Departments
<?php $__env->stopSection(); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.depatments')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

	<div class="box box-info">

	</div>

	<section class="content">
					<!-- widget content -->
		<div class="widget-body no-padding">

			<?php echo Form::open(['url'=>app('aurl').'/department_product','id'=>'review-form','class'=>'smart-form']); ?>



		     <div class="form-group">
        <?php echo Form::label('en_name',trans('admin.en_name')); ?>

        <?php echo Form::text('en_name',old('en_name'),['class'=>'form-control']); ?>

          <p class="help-block"><?php echo e($errors->first('en_name')); ?></p>
     </div>
     <div class="form-group">
        <?php echo Form::label('ar_name',trans('admin.ar_name')); ?>

        <?php echo Form::text('ar_name',old('ar_name'),['class'=>'form-control']); ?>

      <p class="help-block"><?php echo e($errors->first('ar_name')); ?></p>
     </div>

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
			<div class="result">

			</div>
			<p><i class="fa fa-spinner fa-spin fa-2x hidden spin_dep"></i></p>


			<footer>
				<button type="submit" class="btn btn-primary">
					<?php echo e(trans('admin.add')); ?>

				</button>
			</footer>
			<?php echo Form::close(); ?>


		</div>
		<!-- end widget div -->
	</section>
	</div>
	<!-- end widg
			<!-- end widget -->	
		 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>