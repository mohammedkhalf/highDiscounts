<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.all_city')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title"><?php echo e(trans('admin.all_city')); ?></h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="<?php echo e(aurl('countries/create')); ?>"><span class="label border-left-primary label-striped">Add Cities</span></a>
                    </li>
                    <li><a data-action="collapse"></a></li>
                    <li><a data-action="reload"></a></li>
                    <li><a data-action="close"></a></li>
                </ul>
            </div>
        </div>

        <div class="panel-body">
            
        </div>

        <table class="table datatable-button-html5-columns">
            <thead>
            <tr>
                <th>ID</th>
                <th><?php echo e(trans('admin.city_name_ar')); ?></th>
                <th><?php echo e(trans('admin.city_name_en')); ?></th>
                <th><?php echo e(trans('admin.country_logo')); ?></th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $types): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($types->id); ?></td>
                    <td><?php echo e($types->category_ar_name); ?></td>
                    <td><?php echo e($types->category_en_name); ?></td>
                    <td><img src="<?php echo e(Storage::url($types->logo)); ?>" style="max-height: 25px;"></td>
                    <td><a href="<?php echo e(aurl('categories/edit//'.$types->id)); ?>"><i class="icon-pen6"></i> <span>edit</span></a>
                    </td>
                    <td><a href><i class="icon-trash"></i> <span>delete</span></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>