<?php $__env->startSection('title'); ?>
    All Admin
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">Add Admins</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="<?php echo e(aurl('admins')); ?>"><span
                                    class="label border-left-primary label-striped">All Admin</span></a></li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form action="<?php echo e(aurl('admins/'.$adminId->id)); ?>" method='put'>

            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                    </div>
                    <h5 class="content-group">Add New Admin
                        <small class="display-block">To Your System</small>
                    </h5>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="text" name="name" value="<?php echo e($adminId->name); ?>" class="form-control"
                           placeholder="admin name">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <input type="email" value=" <?php echo e($adminId->email); ?>" name="email" class="form-control"
                           placeholder="admin email">
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
                    <button type="submit" class="btn bg-blue btn-block">Edit <i
                                class="icon-arrow-right14 position-right"></i></button>
                </div>


            </div>
        </form>

    </div>
    <!-- /column selectors -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>