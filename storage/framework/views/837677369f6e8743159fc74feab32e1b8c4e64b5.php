<?php echo $__env->make('admin.layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
<style>
    .panel.panel-body.login-form {

        width: 320px !important;
        margin: 0 auto !important;

    }
</style>

<?php $__env->startSection('title'); ?>
    <?php echo e(trans('admin.loginh')); ?>

<?php $__env->stopSection(); ?>


<!-- Page container -->
<!-- /page container -->


<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Advanced login -->
                <form action="" method="post">
                    <?php echo csrf_field(); ?>

                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class="icon-object border-slate-300 text-slate-300"><i
                                        class="icon-reading"></i>
                            </div>
                            <h5 class="content-group"><?php echo e(trans('admin.loginh')); ?>

                                <small class="display-block"><?php echo e(trans('admin.loginhs')); ?></small>
                            </h5>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="email" name="email" class="form-control"
                                   placeholder="<?php echo e(trans('admin.emaillogin')); ?>">
                            <div class="form-control-feedback">
                                <i class="icon-mail5 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" name="password" class="form-control"
                                   placeholder="<?php echo e(trans('admin.passlogin')); ?>">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group login-options">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="styled" name="rememberme" value="1"
                                               checked="checked">
                                        <?php echo e(trans('admin.remember')); ?>

                                    </label>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="<?php echo e(aurl('recovery/password')); ?>"><?php echo e(trans('admin.forge')); ?></a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn bg-blue btn-block"><?php echo e(trans('admin.loginsubmit')); ?>

                                <i
                                        class="icon-arrow-right14 position-right"></i></button>
                        </div>


                    </div>
                </form>
                <!-- /advanced login -->


                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>


</body>
</html>