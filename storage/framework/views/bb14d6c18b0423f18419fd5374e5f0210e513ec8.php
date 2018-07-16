<?php $__env->startSection('title'); ?>
    Add Countries
<?php $__env->stopSection(); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.addcategories')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Categories</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="<?php echo e(aurl('categories')); ?>"><span
                                    class="label border-left-primary label-striped">All categories</span></a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form enctype="multipart/form-data"
              <?php if(isset($CategoryId)): ?> action="<?php echo e(aurl('categories/update/'.$CategoryId->id)); ?>"
              <?php else: ?> action="<?php echo e(aurl('categories')); ?>"
              <?php endif; ?> method="post">

            <?php echo csrf_field(); ?>

            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                    </div>
                    <h5 class="content-group">Add New categories
                        <small class="display-block">To Your System</small>
                    </h5>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="category_ar_name"
                           <?php if(isset($CategoryId)): ?>
                           value="<?php echo e($CategoryId->category_ar_name); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('category_ar_name')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.category_ar_name')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="category_en_name"
                           <?php if(isset($CategoryId)): ?>
                           value="<?php echo e($CategoryId->category_en_name); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('category_en_name')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.category_en_name')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="file" name="logo"
                           <?php if(isset($CategoryId)): ?>
                           value="<?php echo e($CategoryId->logo); ?>"
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
                        <?php $__currentLoopData = $categoryAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"> <?php if(dirction()== 'rtl'): ?> <?php echo e($category->category_ar_name); ?> <?php else: ?> <?php echo e($category->category_en_name); ?> <?php endif; ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn bg-blue btn-block">Login <i
                                class="icon-arrow-right14 position-right"></i></button>
                </div>

            </div>
        </form>

    </div>
    <!-- /column selectors -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>