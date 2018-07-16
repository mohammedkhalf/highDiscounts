<?php $__env->startSection('title'); ?>
    Add user
<?php $__env->stopSection(); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.daadduser')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Users</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="<?php echo e(aurl('users')); ?>"><span
                                    class="label border-left-primary label-striped">All user</span></a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form <?php if(isset($userId)): ?> action="<?php echo e(aurl('users/update/'.$userId->id)); ?>" <?php else: ?> action="<?php echo e(aurl('users')); ?>"
              <?php endif; ?> method="post">

            <?php echo csrf_field(); ?>

            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                    </div>
                    <h5 class="content-group">Add New user
                        <small class="display-block">To Your System</small>
                    </h5>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="name"
                           <?php if(isset($userId)): ?>
                           value="<?php echo e($userId->name); ?>"
                           <?php else: ?>
                           value="<?php echo e(old('name')); ?>"
                           <?php endif; ?>

                           class="form-control"
                           placeholder="user name">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="email"
                           <?php if(isset($userId)): ?>
                           value="<?php echo e($userId->email); ?>"
                           <?php else: ?>
                           value=" <?php echo e(old('email')); ?>"
                           <?php endif; ?>


                           name="email" class="form-control"
                           placeholder="user email">
                    <div class="form-control-feedback">
                        <i class="icon-mail5 text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="password" name="password" class="form-control" placeholder="Password">
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