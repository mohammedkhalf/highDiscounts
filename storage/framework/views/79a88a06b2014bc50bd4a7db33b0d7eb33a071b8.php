

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
                    <li <?php echo e((Request::is('/') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/')); ?>">Home</a></li>
                    <li <?php echo e((Request::is('allproducts') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/allproducts')); ?>">Products</a></li>
                    <li <?php echo e((Request::is('shopping-cart') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/shopping-cart')); ?>">Cart</a></li>
                    <li <?php echo e((Request::is('aboutus') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/aboutus')); ?>">About Us</a></li>
                    <li <?php echo e((Request::is('checkout') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/checkout')); ?>">Checkout</a></li>
                    <li<?php echo e((Request::is('alldepartments') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/alldepartments')); ?>">Category</a></li>
                    <li><a href="#">Others</a></li>
                    <li<?php echo e((Request::is('contactus') ? ' class=active' : '')); ?>><a href="<?php echo e(url('/contactus')); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</div> <!-- End mainmenu area -->
