<?php $__env->startSection('title'); ?>
    Add Countries
<?php $__env->stopSection(); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.addcountries')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Countries</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="<?php echo e(aurl('countries')); ?>"><span
                                    class="label border-left-primary label-striped">All Countries</span></a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form enctype="multipart/form-data" <?php if(isset($countryId)): ?> action="<?php echo e(aurl('countries/update/'.$countryId->id)); ?>"
              <?php else: ?> action="<?php echo e(aurl('countries')); ?>"
              <?php endif; ?> method="post">

            <?php echo csrf_field(); ?>

            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                    </div>
                    <h5 class="content-group">Add New Countries
                        <small class="display-block">To Your System</small>
                    </h5>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="country_name_ar"
                           <?php if(isset($countryId)): ?>
                           value="<?php echo e($countryId->country_name_ar); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('country_name_ar')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.country_name_ar')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="country_name_en"
                           <?php if(isset($countryId)): ?>
                           value="<?php echo e($countryId->country_name_en); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('country_name_en')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.country_name_en')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="mob"
                           <?php if(isset($countryId)): ?>
                           value="<?php echo e($countryId->mob); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('mob')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.country_mob')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="code"
                           <?php if(isset($countryId)): ?>
                           value="<?php echo e($countryId->code); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('code')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.country_code')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="file" name="logo"
                           <?php if(isset($countryId)): ?>
                           value="<?php echo e($countryId->logo); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('logo')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.logo')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <select name="parent" class="form-control">
                        <option value="">Main Country</option>
                        <?php $__currentLoopData = $countryAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allcountry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($allcountry->id); ?>"><?php echo e($allcountry->code); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-blue btn-block">Add <i
                                class="icon-arrow-right14 position-right"></i></button>
                </div>

            </div>
        </form>

    </div>
    <!-- /column selectors -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>