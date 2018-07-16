<?php $__env->startSection('title'); ?>
    Add Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.daaddadmin')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"><?php echo e(trans('admin.daaddadmin')); ?></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="<?php echo e(aurl('admins')); ?>"><span
                                    class="label border-left-primary label-striped"><?php echo e(trans('admin.daaddadmin')); ?></span></a>
                    </li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form <?php if(isset($adminId)): ?> action="<?php echo e(aurl('admins/update/'.$adminId->id)); ?>" <?php else: ?> action="<?php echo e(aurl('admins')); ?>"
              <?php endif; ?> method="post">

            <?php echo csrf_field(); ?>

            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                    </div>
                    <h5 class="content-group"><?php echo e(trans('admin.newadmin')); ?>

                        <small class="display-block">To Your System</small>
                    </h5>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="name"
                           <?php if(isset($adminId)): ?>
                           value="<?php echo e($adminId->name); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('name')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="<?php echo e(trans('admin.namelogin')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="email"
                           <?php if(isset($adminId)): ?>
                           value="<?php echo e($adminId->email); ?>"
                           <?php else: ?>
                           value=" <?php echo e(old('email')); ?>"
                           <?php endif; ?>


                           name="email" class="form-control"
                           placeholder="<?php echo e(trans('admin.emaillogin')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-mail5 text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="password" name="password" class="form-control" placeholder="<?php echo e(trans('admin.passlogin')); ?>">
                    <div class="form-control-feedback">
                        <i class="icon-lock2 text-muted"></i>
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