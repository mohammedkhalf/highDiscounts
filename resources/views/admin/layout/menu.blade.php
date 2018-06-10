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
                                <span class="media-heading text-semibold">{{admin()->user()->name}}</span>
                                <div class="text-size-mini text-muted">
                                    <i class="icon-pin text-size-small"></i> &nbsp;Santa Ana, CA
                                </div>
                            </div>
                            <div class="media-right media-middle">
                                <ul class="icons-list">
                                    <li {{{ (Request::is('admin') ? ' class=active' : '') }}}>
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

                            <li {{{ (Request::is('admin') ? ' class=active' : '') }}}><a href="{{url('/admin')}}"><i
                                            class="icon-home4"></i>
                                    <span>{{trans('admin.dashboard')}}</span></a>
                                <ul>
                                    <li {{{ (Request::is('admin/setting') ? ' class=active' : '') }}}><a
                                                href="{{url('/admin/setting')}}"><i
                                                    class="icon-gear"></i>
                                            <span>{{trans('admin.settings')}}</span></a></li>
                                    <li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="icon-sync icon-pen"></i>
                                    <span>{{trans('admin.admins')}}</span></a>
                                <ul>
                                    <li {{{ (Request::is('admin/admins') ? ' class=active' : '') }}}><a
                                                href="{{aurl('admins')}}">{{trans('admin.alladmins')}}</a></li>
                                    <li {{{ (Request::is('admin/admins/create') ? ' class=active' : '') }}}><a
                                                href="{{aurl('admins/create')}}">{{trans('admin.addadmins')}}</a></li>

                                </ul>
                            </li>

                            <li>
                                <a href="#"><i class="icon-person"></i> <span>{{trans('admin.users')}}</span></a>
                                <ul>
                                    <li {{{ (Request::is('admin/users') ? ' class=active' : '') }}}><a
                                                href="{{aurl('users')}}">{{trans('admin.allusers')}}</a></li>
                                    <li {{{ (Request::is('admin/users/create') ? ' class=active' : '') }}}><a
                                                href="{{aurl('users/create')}}">{{trans('admin.addusers')}}</a></li>
                                </ul>

                            </li>

                            <li>
                                <a href="#"><i class="icon-flag3"></i> <span>{{trans('admin.countries')}}</span></a>
                                <ul>
                                    <li {{{ (Request::is('admin/countries') ? ' class=active' : '') }}}><a
                                                href="{{aurl('countries')}}">{{trans('admin.allcountries')}}</a></li>
                                    <li {{{ (Request::is('admin/countries/create') ? ' class=active' : '') }}}><a
                                                href="{{aurl('countries/create')}}">{{trans('admin.addcountries')}}</a></li>
                                </ul>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>