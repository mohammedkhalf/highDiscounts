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
    <li><a href="{{url('/')}}" ><i class="icon-home8 "></i></a></li>
            <li class="dropdown language-switch">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    @if(lang() == 'ar')
                        <img src="{{url('/')}}/adminpanel/assets/images/flags/eg.png" class="position-left" alt="">
                        عربى
                        <span class="caret"></span>
                    @else
                        <img src="{{url('/')}}/adminpanel/assets/images/flags/gb.png" class="position-left" alt="">
                        English
                        <span class="caret"></span>
                    @endif
                </a>

                <ul class="dropdown-menu">
                    <li><a href="{{aurl('lang/en')}}" class="english"><img
                                    src="{{url('/')}}/adminpanel/assets/images/flags/gb.png" alt=""> English</a></li>
                    <li><a href="{{aurl('lang/ar')}}" class="russian"><img
                                    src="{{url('/')}}/adminpanel/assets/images/flags/eg.png" alt=""> عربى</a></li>
                </ul>
            </li>

            

@if(Auth::guard('admin')->user())
<?php $orders  = App\Model\Order::where('seen','=', 0)->get()->all(); ?>
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class=" icon-phone-incoming"></i>
                        <span class="visible-xs-inline-block position-right">Orders</span>
                        <span class="badge bg-warning-400">{{count($orders) }}</span>
                    </a>
                    
                    <div class="dropdown-menu dropdown-content">
                        <div class="dropdown-content-heading">
                           New Orders
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-sync"></i></a></li>
                            </ul>
                        </div>

                        <ul class="media-list dropdown-content-body width-350">
                            @foreach($orders as $order)
                          
                            <li class="media">
                                <div class="media-left">
                                    <a href="{{aurl('orders/details/'.$order->id)}}" class="btn border-primary text-primary btn-flat btn-rounded btn-icon btn-sm"><i class=" icon-eye"></i></a>
                                </div>
                                <div class="media-body">
                                   Code : {{$order->code}}
                                      @if(!empty( $order->user()->get()))
                                        @foreach($order->user()->get() as $user) 
                                         <div class="media-annotation">Username : {{ $user->name}}</div> 
                                          @endforeach
                                        @endif
                                <div class="media-annotation">Phone : {{$order->phone}}</div>
                                <div class="media-annotation">Price : {{$order->price}} LE</div>
                                <div class="media-annotation">{{$order->created_at}}</div>
                                </div>
                            </li>
                    
                            @endforeach
                  
                        </ul>

                        <div class="dropdown-content-footer">
                            <a href="#" data-popup="tooltip" title="All activity"><i class="icon-menu display-block"></i></a>
                        </div>
                    </div>
                </li>
@else 


@endif

            <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown">
                    <img src="assets/images/placeholder.jpg" alt="">
                    <span>@if(Auth::guard('admin')->user()) {{admin()->user()->name}}@else {{ Auth::user()->name }} @endif</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                    <li><a href="#"><i class="icon-coins"></i> My balance</a></li>
                    <li><a href="#"><span class="badge bg-teal-400 pull-right">58</span> <i
                                    class="icon-comment-discussion"></i> Messages</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-cog5"></i> Account settings</a></li>


                    <li><a @if(Auth::guard('admin')->user())  href="{{aurl('logout')}}" @else href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            @endif <i class="icon-switch2"></i> {{trans('admin.logout')}}</a></li>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
