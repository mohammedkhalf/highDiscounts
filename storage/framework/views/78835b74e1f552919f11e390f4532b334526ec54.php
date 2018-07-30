<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href=".."><img src="<?php echo e(url('/img/logo.png')); ?>"></a></h1>
                </div>
            </div>
            <?php   $product = App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
        $total =  App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price'); ?>
<?php if( $product != null): ?>
            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="<?php echo e(url('shopping-cart')); ?>">Cart - <?php echo e($total); ?><span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> <?php echo e(count ($product)); ?> </span></a>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div> <!-- End site branding area -->
