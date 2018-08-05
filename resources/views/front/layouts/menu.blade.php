

<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li {{{ (Request::is('/') ? ' class=active' : '') }}}><a href="{{url('/')}}">Home</a></li>
                    <li {{{ (Request::is('allproducts') ? ' class=active' : '') }}}><a href="{{url('/allproducts')}}">Products</a></li>
                    <li {{{ (Request::is('shopping-cart') ? ' class=active' : '') }}}><a href="{{url('/shopping-cart')}}">Cart</a></li>
                    <li {{{ (Request::is('aboutus') ? ' class=active' : '') }}}><a href="{{url('/aboutus')}}">About Us</a></li>
                    <li {{{ (Request::is('checkout') ? ' class=active' : '') }}}><a href="{{url('/checkout')}}">Checkout</a></li>
                    <li{{{ (Request::is('alldepartments') ? ' class=active' : '') }}}><a href="{{url('/alldepartments')}}">Category</a></li>
                    <li><a href="#">Others</a></li>
                    <li{{{ (Request::is('contactus') ? ' class=active' : '') }}}><a href="{{url('/contactus')}}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->
