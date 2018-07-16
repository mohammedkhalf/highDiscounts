<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold"><?php echo $__env->yieldContent('up'); ?></span>
                </h4>
            </div>

            <div class="heading-elements">
              
            </div>
        </div>
 <!-- breadcrumb -->
        <div class="breadcrumb-line">
            <ul class="breadcrumb">
              
                 <li><a href="<?php echo e(aurl('')); ?>"><i class="icon-home2 position-left"></i> <?php echo e(trans('admin.dashboard')); ?> </a></li>
          <?php
          $path_segment = 10;
          $sublink = '';
          ?>
        <?php for($i=2;$i < $path_segment; $i++): ?>
          <?php if(!empty(Request::segment($i)) and !is_numeric(Request::segment($i))): ?>

            <?php if($i != 2): ?>
                      <?php $sublink .= '/'; ?>
            <?php endif; ?>

                  <?php $sublink .= Request::segment($i); ?>
            <li> <a href="<?php echo e(aurl( ).'/'.$sublink); ?>"><?php echo e(trans('admin.'.Request::segment($i))); ?></a></li>
          <?php endif; ?>
        <?php endfor; ?>
        <?php if(!empty($master)): ?>
          <li>   <?php echo $master; ?></li>
        <?php endif; ?>
            </ul>
        </div>
              <!-- end breadcrumb -->
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">

    
