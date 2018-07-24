
<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                        <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                        <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                        @guest
                            <li><a href="{{ url('/login') }}"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="{{ url('/register') }}"><i class="fa fa-user"></i> Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest

                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <li class="dropdown dropdown-small">
                            <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">INR</a></li>
                                <li><a href="#">GBP</a></li>
                            </ul>
                        </li>

                        <li class="dropdown dropdown-small">
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
                                <li><a href="{{url('lang/en')}}" class="english"><img
                                                src="{{url('/')}}/adminpanel/assets/images/flags/gb.png" alt=""> English</a></li>
                                <li><a href="{{url('lang/ar')}}" class="russian"><img
                                                src="{{url('/')}}/adminpanel/assets/images/flags/eg.png" alt=""> عربى</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End header area -->
