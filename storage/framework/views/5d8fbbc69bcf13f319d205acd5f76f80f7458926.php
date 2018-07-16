<?php $__env->startSection('title'); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.daSettings')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.daSettings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"><?php echo e(trans('admin.daSettings')); ?></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li class="label border-left-primary label-striped">
                        <a href="<?php echo e(url('admin/setting')); ?>">
                           <span>

                                   <?php echo e(trans('admin.daSettings')); ?>

                           </span>
                        </a>
                    </li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <form action="<?php echo e(aurl('setting')); ?>" enctype="multipart/form-data" method="post">

            <?php echo csrf_field(); ?>

            <div class="panel panel-body login-form">
                <div class="text-center">
                    <div class="icon-object border-slate-300 text-slate-300"><i class="icon-gear"></i>
                    </div>
                    <h5 class="content-group"><?php echo e(trans('admin.daaddSettings')); ?>

                        <small class="display-block">To Your System</small>
                    </h5>
                </div>


                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.sitear')); ?></label>
                    <input type="text" name="sitear"
                           value="<?php echo sett()->sitename_ar; ?>"
                           class="form-control"
                           placeholder="اسم الموقع باللغه العربيه">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.siteen')); ?></label>
                    <input type="text" name="siteen"

                           value="<?php echo sett()->sitename_en; ?>"

                           class="form-control"
                           placeholder="اسم الموقع باللغه الانجليزيه">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.siteemail')); ?></label>
                    <input type="text" name="siteemail"

                           value="<?php echo sett()->email; ?>"

                           class="form-control"
                           placeholder="البريد الالكترونى">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.sitelogo')); ?></label>
                    <input type="file" name="logo" value="" class="form-control" placeholder="شعار الموقع">
                   
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.siteicon')); ?></label>
                    <input type="file" name="icon" value="" class="form-control" placeholder="ايكونه الموقع">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.sitedescription')); ?></label>
                    <input type="text" name="description"
                           value="<?php echo sett()->description; ?>"
                           class="form-control"
                           placeholder="وصف الموقع">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>
                
                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.sitekeyword')); ?></label>
                    <input type="text" name="keywords"
                           value="<?php echo sett()->keywords; ?>"
                           class="form-control"
                           placeholder="الكلمات الدليلية">
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.sitelang')); ?></label>
                    <select class="form-control" name="lang">
                        <option value="ar">عربى</option>
                        <option value="en">English</option>
                    </select>
                    <div class="form-control-feedback">
                        <i class="icon-indent-decrease text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.sitestatus')); ?></label>
                    <input type="text"
                           value=" <?php echo e(old('email')); ?>"
                           name="status" class="form-control"
                           placeholder="الحاله">
                    <div class="form-control-feedback">
                        <i class="icon-mail5 text-muted"></i>
                    </div>
                </div>

                <div class="form-group has-feedback has-feedback-left">
                    <label><?php echo e(trans('admin.sitemesage')); ?></label>
                    <input type="text" name="message" value="<?php echo sett()->message_mentenance; ?>" class="form-control">
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