<!-- Page container -->
<div class="page-container">
    <!-- Page content -->
    <div class="page-content">
        <!-- Main sidebar -->
        <div class="sidebar sidebar-main">
            <div class="sidebar-content">
                <!-- User menu -->
                <div class="sidebar-user">
                    <div class="category-content">
                        <div class="media">
                            <a href="#" class="media-left"><img src="assets/images/placeholder.jpg"
                                                                class="img-circle img-sm" alt=""></a>
                            <div class="media-body">
                                <span class="media-heading text-semibold"><?php echo e(admin()->user()->name); ?></span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>
                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li <?php echo e((Request::is('admin') ? ' class=active' : '')); ?>>
                                        <a href="#"><i class="icon-cog3"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /user menu -->
                <!-- Main navigation -->
                <div class="sidebar-category sidebar-category-visible">
                    <div class="category-content no-padding">
                        <ul class="navigation navigation-main navigation-accordion">

                            <!-- Main -->
                            <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i>
                            </li>
                            <li <?php echo e((Request::is('admin') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/admin')); ?>"><i
                                            class="icon-home4"></i>
                                    <span><?php echo e(trans('admin.dashboard')); ?></span></a></li>
                            <li>
                                <a href="#"><i class="icon-sync icon-pen"></i> <span><?php echo e(trans('admin.admins')); ?></span></a>
                                <ul>
                                    <li <?php echo e((Request::is('admin/admins') ? ' class=active' : '')); ?>><a
                                                href="<?php echo e(aurl('admins')); ?>"><?php echo e(trans('admin.alladmins')); ?></a></li>
                                    <li <?php echo e((Request::is('admin/admins/create') ? ' class=active' : '')); ?>><a
                                                href="<?php echo e(aurl('admins/create')); ?>"><?php echo e(trans('admin.addadmins')); ?></a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-person"></i> <span><?php echo e(trans('admin.users')); ?></span></a>
                                <ul>
                                    <li <?php echo e((Request::is('admin/users') ? ' class=active' : '')); ?>><a
                                                href="<?php echo e(aurl('users')); ?>"><?php echo e(trans('admin.allusers')); ?></a></li>
                                    <li <?php echo e((Request::is('admin/users/create') ? ' class=active' : '')); ?>><a
                                                href="<?php echo e(aurl('users/create')); ?>"><?php echo e(trans('admin.addusers')); ?></a></li>
                                </ul>

                            </li>
                            <li <?php echo e((Request::is('admin/setting') ? ' class=active' : '')); ?>><a
                                        href="<?php echo e(url('/admin/setting')); ?>"><i
                                            class="icon-gear"></i>
                                    <span><?php echo e(trans('admin.settings')); ?></span></a></li>
                            <li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>