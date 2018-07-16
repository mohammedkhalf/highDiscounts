<!DOCTYPE html>
<?php if(dirction()== 'rtl'): ?>
    <html lang="ar" dir="rtl">
    <?php else: ?>
        <html lang="en">
        <?php endif; ?>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Ecommerce <?php echo $__env->yieldContent('up'); ?></title>
        <?php if(dirction()== 'ltr'): ?>
            <!-- Global stylesheets -->
            <?php echo e(Html::style('adminpanel/assets/css/icons/icomoon/styles.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/css/bootstrap.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/css/core.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/css/components.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/css/colors.css')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/pages/login.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/forms/styling/uniform.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/loaders/pace.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/core/libraries/jquery.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/core/libraries/bootstrap.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/loaders/blockui.min.js')); ?>

            <!-- Theme JS files -->

                <!-- Theme JS files -->
            <?php echo e(Html::script('adminpanel/assets/js/plugins/tables/datatables/datatables.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/forms/selects/select2.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/plugins/tables/datatables/extensions/buttons.min.js')); ?>



            <?php echo e(Html::script('adminpanel/assets/js/core/app.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/js/pages/datatables_extension_buttons_html5.js')); ?>

        <?php else: ?>


            <?php echo e(Html::style('adminpanel/assets/rtl/css/icons/icomoon/styles.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/rtl/css/bootstrap.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/rtl/css/core.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/rtl/css/components.css')); ?>

            <?php echo e(Html::style('adminpanel/assets/rtl/css/colors.css')); ?>


            <!-- /global stylesheets -->

            <?php echo e(Html::script('adminpanel/assets/rtl/js/pages/login.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/forms/styling/uniform.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/loaders/pace.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/core/libraries/jquery.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/core/libraries/bootstrap.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/loaders/blockui.min.js')); ?>

            <!-- Theme JS files -->
            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/tables/datatables/datatables.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/forms/selects/select2.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/tables/datatables/extensions/jszip/jszip.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/plugins/tables/datatables/extensions/buttons.min.js')); ?>


            <?php echo e(Html::script('adminpanel/assets/rtl/js/core/app.js')); ?>

            <?php echo e(Html::script('adminpanel/assets/rtl/js/pages/datatables_extension_buttons_html5.js')); ?>

        <?php endif; ?>
        <!-- Core JS files -->


            <!-- /theme JS files -->
        <!-- /theme JS files -->


        </head>

        <body>