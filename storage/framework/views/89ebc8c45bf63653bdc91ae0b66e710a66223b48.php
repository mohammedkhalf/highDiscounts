<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="assets/images/logo_light.png" alt=""></a>

        <ul class="nav navbar-nav visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
            <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
        </ul>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a>
            </li>

        </ul>

        <p class="navbar-text"><span class="label bg-success">Online</span></p>

        <ul class="nav navbar-nav navbar-right">
    <li><a href="<?php echo e(url('/')); ?>" ><i class="icon-home8 "></i></a></li>
            <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <?php if(lang() == 'ar'): ?>
                        <img src="<?php echo e(url('/')); ?>/adminpanel/assets/images/flags/eg.png" class="position-left" alt="">
                        عربى
                        <span class="caret"></span>
                    <?php else: ?>
                        <img src="<?php echo e(url('/')); ?>/adminpanel/assets/images/flags/gb.png" class="position-left" alt="">
                        English
                        <span class="caret"></span>
                    <?php endif; ?>
                </a>

                <ul class="dropdown-menu">
                    <li><a href="<?php echo e(aurl('lang/en')); ?>" class="english"><img
                                    src="<?php echo e(url('/')); ?>/adminpanel/assets/images/flags/gb.png" alt=""> English</a></li>
                    <li><a href="<?php echo e(aurl('lang/ar')); ?>" class="russian"><img
                                    src="<?php echo e(url('/')); ?>/adminpanel/assets/images/flags/eg.png" alt=""> عربى</a></li>
                </ul>
            </li>

            

<?php if(Auth::guard('admin')->user()): ?>
<?php $orders  = App\Model\Order::where('seen','=', 0)->get()->all(); ?>
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class=" icon-phone-incoming"></i>
                        <span class="visible-xs-inline-block position-right">Orders</span>
                        <span class="badge bg-warning-400"><?php echo e(count($orders)); ?></span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-heading">
                           New Orders
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-sync"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body width-350">
                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          
                            <li class="media">
                                <div class="media-left">
                                    <a href="<?php echo e(aurl('orders/details/'.$order->id)); ?>" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class=" icon-eye"></i></a>
                                </div>
                                <div class="media-body">
                                   Code : <?php echo e($order->code); ?>

                                      <?php if(!empty( $order->user()->get())): ?>
                                        <?php $__currentLoopData = $order->user()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                         <div class="media-annotation">Username : <?php echo e($user->name); ?></div> 
                                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                <div class="media-annotation">Phone : <?php echo e($order->phone); ?></div>
                                <div class="media-annotation">Price : <?php echo e($order->price); ?> LE</div>
                                <div class="media-annotation"><?php echo e($order->created_at); ?></div>
                                </div>
                            </li>
                    
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>
<?php else: ?> 


<?php endif; ?>

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/placeholder.jpg" alt="">
                    <span><?php if(Auth::guard('admin')->user()): ?> <?php echo e(admin()->user()->name); ?><?php else: ?> <?php echo e(Auth::user()->name); ?> <?php endif; ?></span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i
                                    class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>


                    <li><a <?php if(Auth::guard('admin')->user()): ?>  href="<?php echo e(aurl('logout')); ?>" <?php else: ?> href="<?php echo e(url('/logout')); ?>"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <?php endif; ?> <i class="icon-switch2"></i> <?php echo e(trans('admin.logout')); ?></a></li>

                    <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                    </form>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
