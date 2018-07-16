<?php if(count($errors->all())): ?>
    <div class="alert alert-danger">
    <span class="help-block">
                                                      <small class="text-info">

                                                          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                              <li><?php echo e($error); ?></li>
                                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                      </small>
                                                </span>
    </div>

<?php endif; ?>

<?php if(session()->has('success')): ?>
    <div class="alert alert-info">
        <span class="help-block">
            <small class="text-success">
                <h4><?php echo e(session('success')); ?></h4>
            </small>
        </span>
    </div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
    <div class="alert alert-info">
        <span class="help-block">
            <small class="text-success">
                <h4><?php echo e(session('error')); ?></h4>
            </small>
        </span>
    </div>
<?php endif; ?>