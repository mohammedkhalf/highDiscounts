					<div class="form-group col-sm-12">

						<?php if(count($department) > 0): ?>
							<fieldset>
							<label><?php echo e(trans('admin.sub_to')); ?></label>
							<select name="parent" class="form-control checkparent">
								<option master="master" value="<?php echo e($parent); ?>" <?php if($parent == old('parent')): ?> selected <?php endif; ?> ><?php echo e(trans('admin.master_department')); ?></option>
								<?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<option value="<?php echo e($dep->id); ?>" <?php if(old('parent') == $dep->id): ?> selected <?php endif; ?> ><?php echo e($dep->en_name); ?></option>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>	
					 
							</fieldset>
						<?php endif; ?>
					</div>