<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Global stylesheets -->
<?php echo e(Html::style('adminpanel/assets/css/icons/icomoon/styles.css')); ?>

<?php echo e(Html::style('adminpanel/assets/css/bootstrap.css')); ?>

<?php echo e(Html::style('adminpanel/assets/css/core.css')); ?>

<?php echo e(Html::style('adminpanel/assets/css/components.css')); ?>

<?php echo e(Html::style('adminpanel/assets/css/colors.css')); ?>

<!-- Core JS files -->
<?php echo e(Html::script('adminpanel/assets/js/pages/login.js')); ?>

<?php echo e(Html::script('adminpanel/assets/js/plugins/forms/styling/uniform.min.js')); ?>

<?php echo e(Html::script('adminpanel/assets/js/plugins/loaders/pace.min.js')); ?>

<?php echo e(Html::script('adminpanel/assets/js/core/libraries/jquery.min.js')); ?>

<?php echo e(Html::script('adminpanel/assets/js/core/libraries/bootstrap.min.js')); ?>

<?php echo e(Html::script('adminpanel/assets/js/plugins/loaders/blockui.min.js')); ?>

<!-- Theme JS files -->



<?php echo e(Html::script('adminpanel/assets/js/core/app.js')); ?>


<!-- /theme JS files -->

    <style>
        .panel.panel-body.login-form {

            width: 320px !important;
            margin: 0 auto !important;

        }
    </style>
    <!-- /theme JS files -->


</head>

<body>

<?php $__env->startSection('title'); ?>
    Login Admin
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
                            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i>
                            </div>
                            <h5 class="content-group">Login to your account
                                <small class="display-block">Your credentials</small>
                            </h5>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="email" name="email" class="form-control" placeholder="email">
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

                        <div class="form-group login-options">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" class="styled" name="rememberme" value="1" checked="checked">
                                        Remember
                                    </label>
                                </div>

                                <div class="col-sm-6 text-right">
                                    <a href="<?php echo e(aurl('recovery/password')); ?>">Forgot password?</a>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn bg-blue btn-block">Login <i
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