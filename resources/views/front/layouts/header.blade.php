

       <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div class="top-bar hidden-md-down">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome to Worldwide Electronics Store</a></li>
                        </ul>
                    </nav>
                    
                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>
                            <li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i class="ec ec-transport"></i>Track Your Order</a></li>
                            <li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i class="ec ec-shopping-bag"></i>Shop</a></li>
                          
                                      <li class="menu-item dropdown dropdown-small">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                @if(lang() == 'ar')
                                    <img  src="{{url('/')}}/adminpanel/assets/images/flags/eg.png" class=" menu-item animate-dropdown position-left" alt="">
                                    عربى
                                    <span class="caret"></span>
                                @else
                                    <img src="{{url('/')}}/adminpanel/assets/images/flags/gb.png" class=" menu-item animate-dropdown position-left" alt="">
                                    English
                                    <span class="caret"></span>
                                @endif
                            </a>

                            <ul class="dropdown-menu">
                                <li class=""><a href="{{url('lang/en')}}" class="menu-item animate-dropdown english"><img
                                            class=" menu-item animate-dropdown position-left"     src="{{url('/')}}/adminpanel/assets/images/flags/gb.png" alt=""> English</a></li>
                                <li class=""><a href="{{url('lang/ar')}}" class="menu-item animate-dropdown russian"><img
                                            class=" menu-item animate-dropdown position-left"    src="{{url('/')}}/adminpanel/assets/images/flags/eg.png" alt=""> عربى</a></li>
                            </ul>
                        </li>

 @guest
                            <li class="menu-item animate-dropdown"><a href="{{ url('/login') }}"><i class="fa fa-user"></i> Login</a></li>
                            <li class="menu-item animate-dropdown"><a href="{{ url('/register') }}"><i class="fa fa-user"></i> Register</a></li>
                        @else
                            <li class="dropdown menu-item animate-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class=" dropdown-menu">
                                      <li class="menu-item animate-dropdown"><a title="My Account" href="my-account.html"><i class="ec ec-user"></i>My Account</a></li>
                                    <li class="menu-item animate-dropdown">
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ec ec-user"></i>
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
                    </nav>
                </div>
            </div><!-- /.top-bar -->