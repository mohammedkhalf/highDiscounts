<?php $__env->startSection('up'); ?>
    <?php echo e(trans('admin.allCategories')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <!-- Column selectors -->
    <div class="panel panel-flat">
        <div class="panel-heading">
            <h5 class="panel-title">All Categories</h5>
            <div class="heading-elements">
                <ul class="icons-list">
                    <li><a href="<?php echo e(aurl('Categories/create')); ?>"><span class="label border-left-primary label-striped">Add Country</span></a>
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
                <th><?php echo e(trans('admin.country_name_ar')); ?></th>
                <th><?php echo e(trans('admin.country_name_en')); ?></th>
                <th><?php echo e(trans('admin.country_logo')); ?></th>
                <th><?php echo e(trans('admin.country_city')); ?></th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($category->id); ?></td>
                    <td><?php echo e($category->category_ar_name); ?></td>
                    <td><?php echo e($category->category_en_name); ?></td>
                    <td><img src="<?php echo e(Storage::url($category->logo)); ?>" style="max-height: 25px;"></td>
                    <td>
                        <a href="<?php echo e('categories/type/'.$category->id); ?>">
                            <i class="icon-pen6"></i> <span><?php echo e(trans('admin.all_category_type')); ?></span>
                        </a>
                    </td>
                    <td><a href="<?php echo e('categories/edit/'.$category->id); ?>"><i class="icon-pen6"></i> <span>edit</span></a>
                    </td>
                    <td><a href><i class="icon-trash"></i> <span>delete</span></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>