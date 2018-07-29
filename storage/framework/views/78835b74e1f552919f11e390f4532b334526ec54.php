<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href=".."><img src="<?php echo e(url('/img/logo.png')); ?>"></a></h1>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="<?php echo e(url('shopping-cart')); ?>">Cart - <span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : ''); ?></span></a>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End site branding area -->
