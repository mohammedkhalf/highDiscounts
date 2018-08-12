<?php echo $__env->make('front.layouts.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('front.layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('front.layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<!-- Main content -->
<?php echo $__env->make('front.layouts.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('front.layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>