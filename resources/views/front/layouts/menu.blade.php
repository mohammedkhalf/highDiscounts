

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
                    {{--<li><a href="single-product.html">Single product</a></li>--}}
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="#">Category</a></li>
                    <li><a href="#">Others</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->
