

       <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div class="top-bar hidden-md-down">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                            <li class="menu-item animate-dropdown">
                            <a title="" href="#">
                                    @if(lang() == 'ar')
                                        مرحبا بك في بيت التسوق الاول 
                                    @else
                                      Welcome to first Shopping House
                                    @endif

                            </a></li>
                        </ul>
                    </nav>
                    
                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            <!--<li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>-->
                            <li class="menu-item animate-dropdown"><a title="Track Your Order" href="{{url('/track')}}"><i class="ec ec-transport">  </i>
                                 @if(lang() == 'ar')
                                 أتبع طلبك
                                 @else
                                    Track Your Order
                                 @endif
                       
                            </a>
                            
                            </li>
                            <li class="menu-item animate-dropdown"><a title="Shop" href="{{url('/shopping-cart')}}"><i class="ec ec-shopping-bag"></i>
                               @if(lang() == 'ar')
                                 تسوق
                                 @else
                                  Shop 
                                 @endif
                            
                            </a></li>
                          
                                      <li class="menu-item dropdown dropdown-small">
                            <a class="dropdown-toggle" data-toggle="dropdown">
                                @if(lang() == 'ar')

                                    <img  src="{{url('/')}}/adminpanel/assets/images/flags/eg.png" class=" menu-item animate-dropdown position-left" alt="">
                                    عربى
                                    <span class="caret">    </span>
                                @else
                                    <img src="{{url('/')}}/adminpanel/assets/images/flags/gb.png" class=" menu-item animate-dropdown position-left" alt="">
                                    English
                                    <span class="caret"></span>
                                @endif
                            </a>

                            <ul class="dropdown-menu">
                                <li class="" style="padding-left: 7px;">
                                    <span style="display: inline-block">
                                        <img class=" menu-item animate-dropdown position-left"     src="{{url('/')}}/adminpanel/assets/images/flags/gb.png" alt="">
                                       <a href="{{url('lang/en')}}" class="menu-item animate-dropdown english" style=" margin-top: -18px;">   <span style="font-size: 14px;">  English </span> </a>
                                    </span>



                                </li>
                                <li class="" style="padding-left: 7px;">
                                    <span style="display: inline-block">
                                        <img
                                                class=" menu-item animate-dropdown position-left"    src="{{url('/')}}/adminpanel/assets/images/flags/eg.png" alt="">
                                                     <a href="{{url('lang/ar')}}" class="menu-item animate-dropdown russian" style=" margin-top: -18px;"> <span style="font-size: 15px;">
                                                          عربى </span> </a>

                                    </span>
                       </li>
                            </ul>
                        </li>

                         @guest
                            <li class="menu-item animate-dropdown"><a href="{{ url('/login') }}"><i class="fa fa-user"></i> 
                            
                                    @if(lang() == 'ar')
                                تسجيل الدخول
                                 @else
                                    Login
                                 @endif
                            </a></li>
                            <li class="menu-item animate-dropdown"><a href="{{ url('/register') }}"><i class="fa fa-user"></i>
                                   @if(lang() == 'ar')
                                انشاء حساب 
                                 @else
                                    Register
                                 @endif
                            </a></li>
                        @else
                            <li class="dropdown menu-item animate-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class=" dropdown-menu">
                                <li class="menu-item animate-dropdown"><a title="My Account" href="{{ url('/profile') }}"><i class="ec ec-user"></i>My Account</a></li>
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
           <div id="page" class="hfeed site">

