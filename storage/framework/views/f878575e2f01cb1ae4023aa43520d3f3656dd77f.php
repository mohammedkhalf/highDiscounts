<?php $__env->startSection('title'); ?>
    Home page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('front.home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


    <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
    <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

    <div class="top-bar hidden-md-down">
        <div class="container">
            <nav>
                <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome
                            to Worldwide Electronics Store</a></li>
                </ul>
            </nav>

            <nav>
                <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                    <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i
                                    class="ec ec-map-pointer"></i>Store Locator</a></li>
                    <li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i
                                    class="ec ec-transport"></i>Track Your Order</a></li>
                    <li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i
                                    class="ec ec-shopping-bag"></i>Shop</a></li>
                    <li class="menu-item animate-dropdown"><a title="My Account" href="my-account.html"><i
                                    class="ec ec-user"></i>My Account</a></li>
                </ul>
            </nav>
        </div>
    </div><!-- /.top-bar -->



    <div id="content" class="site-content" tabindex="-1">
        <div class="container">

            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="home-v2-slider">
                        <!-- ========================================== SECTION – HERO : END========================================= -->

                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                            <div class="item" style="background-image: url(front/assets/images/slider/banner-2.jpg);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-5">
                                            <div class="caption vertical-center text-left">
                                                <div class="hero-1 fadeInDown-1">
                                                    The New <br> Standard
                                                </div>

                                                <div class="hero-subtitle fadeInDown-2">
                                                    under favorable smartwatches
                                                </div>
                                                <div class="hero-v2-price fadeInDown-3">
                                                    from <br><span>$749</span>
                                                </div>
                                                <div class="hero-action-btn fadeInDown-4">
                                                    <a href="single-product.html" class="big le-button ">Start
                                                        Buying</a>
                                                </div>
                                            </div><!-- /.caption -->
                                        </div>
                                    </div>
                                </div><!-- /.container -->
                            </div><!-- /.item -->


                            <div class="item" style="background-image: url(front/assets/images/slider/banner-1.jpg);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-5">
                                            <div class="caption vertical-center text-left">
                                                <div class="hero-subtitle-v2 fadeInDown-1">
                                                    shop to get what you loves
                                                </div>

                                                <div class="hero-2 fadeInDown-2">
                                                    Timepieces that make a statement up to <strong>40% Off</strong>
                                                </div>

                                                <div class="hero-action-btn fadeInDown-3">
                                                    <a href="single-product.html" class="big le-button ">Start
                                                        Buying</a>
                                                </div>
                                            </div><!-- /.caption -->
                                        </div>
                                    </div>
                                </div><!-- /.container -->
                            </div><!-- /.item -->

                            <div class="item" style="background-image: url(front/assets/images/slider/banner-3.jpg);">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-5">
                                            <div class="caption vertical-center text-left">
                                                <div class="hero-subtitle-v2 fadeInLeft-1">
                                                    shop to get what you loves
                                                </div>

                                                <div class="hero-2 fadeInRight-1">
                                                    Timepieces that make a statement up to <strong>40% Off</strong>
                                                </div>

                                                <div class="hero-action-btn fadeInLeft-2">
                                                    <a href="single-product.html" class="big le-button ">Start
                                                        Buying</a>
                                                </div>
                                            </div><!-- /.caption -->
                                        </div>
                                    </div>
                                </div><!-- /.container -->
                            </div><!-- /.item -->


                        </div><!-- /.owl-carousel -->

                        <!-- ========================================= SECTION – HERO : END ========================================= -->

                    </div><!-- /.home-v1-slider -->
                    <div class="home-v2-ads-block animate-in-view fadeIn animated" data-animation=" animated fadeIn">
                        <div class="ads-block row">
                            <div class="ad col-xs-12 col-sm-6">
                                <div class="media">
                                    <div class="media-left media-middle"><img
                                                src="<?php echo e(url("front/assets/images/ad-block/1.jpg")); ?>" alt=""/></div>
                                    <div class="media-body media-middle">
                                        <div class="ad-text">
                                            Catch Big<br> <strong>Deals</strong>of the<br> Cameras
                                        </div>
                                        <div class="ad-action">
                                            <a href="#">Shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ad col-xs-12 col-sm-6">
                                <div class="media">
                                    <div class="media-left media-middle"><img
                                                src="<?php echo e(url("front/assets/images/ad-block/2.jpg")); ?>" alt=""/></div>
                                    <div class="media-body media-middle">
                                        <div class="ad-text">
                                            Tablets, <br>Smartphones<br> and more
                                        </div>
                                        <div class="ad-action">
                                            <a href="#"><span class="from"><span class="prefix">From</span><span
                                                            class="value"><sup>$</sup>74</span><span
                                                            class="suffix">99</span></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <section class="products-carousel-tabs animate-in-view fadeIn animated" data-animation="fadeIn">
                        <h2 class="sr-only">Product Carousel Tabs</h2>
                        <ul class="nav nav-inline">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab-products-1" data-toggle="tab">Featured</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#tab-products-2" data-toggle="tab">On Sale</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#tab-products-3" data-toggle="tab">Top Rated</a>
                            </li>
                        </ul><!-- /.nav -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-products-1" role="tabpanel">
                                <section class="section-products-carousel">
                                    <div class="home-v2-owl-carousel-tabs">
                                        <div class="woocommerce columns-3">


                                            <div class="products owl-carousel home-v2-carousel-tabs products-carousel columns-3">


                                                <div class="product first">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Wireless Audio System Multiroom 360</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/3.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html"
                                                                        rel="tag">Laptops</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Tablet Thin EliteBook Revolve 810 G6</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/1.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product last">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Headphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Purple Solo 2 Wireless</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/5.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product first">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html"
                                                                        rel="tag">Laptops</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Tablet Red EliteBook Revolve 810 G2</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/2.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Headphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>White Solo 2 Wireless</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/6.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product last">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Smartphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Smartphone 6S 32GB LTE</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/4.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div>
                                    </div>
                                </section>
                            </div><!-- /.tab-pane -->

                            <div class="tab-pane" id="tab-products-2" role="tabpanel">
                                <section class="section-products-carousel">
                                    <div class="home-v2-owl-carousel-tabs">
                                        <div class="woocommerce columns-3">


                                            <div class="products owl-carousel home-v2-carousel-tabs products-carousel columns-3">


                                                <div class="product first">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Wireless Audio System Multiroom 360</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/3.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html"
                                                                        rel="tag">Laptops</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Tablet Thin EliteBook Revolve 810 G6</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/1.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product last">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Headphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Purple Solo 2 Wireless</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/5.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product first">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html"
                                                                        rel="tag">Laptops</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Tablet Red EliteBook Revolve 810 G2</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/2.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Headphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>White Solo 2 Wireless</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/6.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product last">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Smartphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Smartphone 6S 32GB LTE</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/4.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div>
                                    </div>
                                </section>
                            </div><!-- /.tab-pane -->

                            <div class="tab-pane" id="tab-products-3" role="tabpanel">
                                <section class="section-products-carousel">
                                    <div class="home-v2-owl-carousel-tabs">
                                        <div class="woocommerce columns-3">


                                            <div class="products owl-carousel home-v2-carousel-tabs products-carousel columns-3">


                                                <div class="product first">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Audio Speakers</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Wireless Audio System Multiroom 360</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/3.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html"
                                                                        rel="tag">Laptops</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Tablet Thin EliteBook Revolve 810 G6</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/1.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product last">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Headphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Purple Solo 2 Wireless</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/5.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product first">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html"
                                                                        rel="tag">Laptops</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Tablet Red EliteBook Revolve 810 G2</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/2.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product ">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Headphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>White Solo 2 Wireless</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/6.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> $1,999.00</span></ins>
                                                                                <del><span class="amount">$2,299.00</span></del>
                                                                                <span class="amount"> </span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->


                                                <div class="product last">
                                                    <div class="product-outer">
                                                        <div class="product-inner">
                                                            <span class="loop-product-categories"><a
                                                                        href="product-category.html" rel="tag">Smartphones</a></span>
                                                            <a href="single-product.html">
                                                                <h3>Smartphone 6S 32GB LTE</h3>
                                                                <div class="product-thumbnail">
                                                                    <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                                         data-echo="<?php echo e(url("front/assets/images/products/4.jpg")); ?>"
                                                                         class="img-responsive" alt="">
                                                                </div>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> $1,999.00</span>
                                                                            </span>
                                                                        </span>
                                                                <a rel="nofollow" href="single-product.html"
                                                                   class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">
                                                                        Wishlist</a>

                                                                    <a href="compare.html" class="add-to-compare-link">
                                                                        Compare</a>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.product-inner -->
                                                    </div><!-- /.product-outer -->
                                                </div><!-- /.product -->
                                            </div><!-- /.products -->
                                        </div>
                                    </div>
                                </section>
                            </div><!-- /.tab-pane -->
                        </div><!-- /.tab-content -->
                    </section><!-- /.products-carousel-tabs -->
                    <section class=" section-onsale-product-carousel" data-animation="fadeIn">

                        <header>
                            <h1 class="h1">Deals of the week</h1>
                        </header>
                        <div class="owl-nav">
                            <a href="#onsale-products-carousel-prev"
                               data-target="#onsale-products-carousel-57176fb23fad9" class="slider-prev"><i
                                        class="fa fa-angle-left"></i>Previous Deal</a>
                            <a href="#onsale-products-carousel-next"
                               data-target="#onsale-products-carousel-57176fb23fad9" class="slider-next">Next Deal<i
                                        class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="onsale-products-carousel-57176fb23fad9">
                            <div class="onsale-product-carousel owl-carousel">
                                <div class="onsale-product">
                                    <div class="onsale-product-thumbnails">


                                        <div class="savings">
                                                    <span class="savings-text">
                                                        Save <span class="amount">&#36;20.00</span>
                                                    </span>
                                        </div>


                                        <div class="images"><a href="single-product.html" itemprop="image"
                                                               class="woocommerce-main-image" title=""><img width="600"
                                                                                                            height="600"
                                                                                                            src="<?php echo e(url("front/assets/images/deals/1.jpg")); ?>"
                                                                                                            class="wp-post-image"
                                                                                                            alt="GamePad"
                                                                                                            title="GamePad"/></a>
                                            <div class="thumbnails columns-3">
                                                <a href="single-product.html" class="first" title=""><img width="180"
                                                                                                          height="180"
                                                                                                          src="<?php echo e(url("front/assets/images/deals/1-1.jpg")); ?>"
                                                                                                          class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                                                          alt="GamePad"
                                                                                                          title="GamePad"/></a>
                                                <a href="single-product.html" class="" title=""><img width="180"
                                                                                                     height="180"
                                                                                                     src="<?php echo e(url("front/assets/images/deals/1-2.jpg")); ?>"
                                                                                                     class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                                                     alt="GamePad2"
                                                                                                     title="GamePad2"/></a>
                                                <a href="single-product.html" class="last" title=""><img width="180"
                                                                                                         height="180"
                                                                                                         src="<?php echo e(url("front/assets/images/deals/1-3.jpg")); ?>"
                                                                                                         class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                                                         alt="GamePad3"
                                                                                                         title="GamePad3"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="onsale-product-content">

                                        <a href="single-product.html"><h3>Game Console Controller <br/>+ USB 3.0 Cable
                                            </h3></a>
                                        <span class="price"><span class="electro-price"><ins><span class="amount">&#36;79.00</span></ins> <del><span
                                                            class="amount">&#36;99.00</span></del></span></span>
                                        <div class="deal-progress">
                                            <div class="deal-stock">
                                                <span class="stock-sold">Already Sold: <strong>2</strong></span>
                                                <span class="stock-available">Available: <strong>26</strong></span>
                                            </div>
                                            <div class="progress">
                                                <span class="progress-bar" style="width:8%">8</span>
                                            </div>
                                        </div>
                                        <div class="deal-countdown-timer">
                                            <div class="marketing-text text-xs-center">Hurry Up! Offer ends in:</div>
                                            <span class="deal-end-date" style="display:none;">2016-12-31</span>
                                            <div id="deal-countdown" class="countdown"></div>
                                            <script>
                                                // set the date we're counting down to
                                                var deal_end_date = document.querySelector(".deal-end-date").textContent;
                                                var target_date = new Date(deal_end_date).getTime();

                                                // variables for time units
                                                var days, hours, minutes, seconds;

                                                // get tag element
                                                var countdown = document.getElementById('deal-countdown');

                                                // update the tag with id "countdown" every 1 second
                                                setInterval(function () {

                                                    // find the amount of "seconds" between now and target
                                                    var current_date = new Date().getTime();
                                                    var seconds_left = (target_date - current_date) / 1000;

                                                    // do some time calculations
                                                    days = parseInt(seconds_left / 86400);
                                                    seconds_left = seconds_left % 86400;

                                                    hours = parseInt(seconds_left / 3600);
                                                    seconds_left = seconds_left % 3600;

                                                    minutes = parseInt(seconds_left / 60);
                                                    seconds = parseInt(seconds_left % 60);

                                                    // format countdown string + set tag value
                                                    countdown.innerHTML = '<span data-value="' + days + '" class="days"><span class="value">' + days + '</span><b>Days</b></span><span class="hours"><span class="value">' + hours + '</span><b>Hours</b></span><span class="minutes"><span class="value">'
                                                        + minutes + '</span><b>Mins</b></span><span class="seconds"><span class="value">' + seconds + '</span><b>Secs</b></span>';

                                                }, 1000);
                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="onsale-product">
                                    <div class="onsale-product-thumbnails">


                                        <div class="savings">
                                                    <span class="savings-text">
                                                        Save <span class="amount">&#36;0.00</span>
                                                    </span>
                                        </div>


                                        <div class="images"><a href="single-product.html" itemprop="image"
                                                               class="woocommerce-main-image" title=""><img width="600"
                                                                                                            height="600"
                                                                                                            src="<?php echo e(url("front/assets/images/deals/2.jpg")); ?>"
                                                                                                            class="wp-post-image"
                                                                                                            alt="GamePad"
                                                                                                            title="GamePad"/></a>
                                            <div class="thumbnails columns-3">
                                                <a href="single-product.html" class="first" title=""><img width="180"
                                                                                                          height="180"
                                                                                                          src="<?php echo e(url("front/assets/images/deals/2-1.jpg")); ?>"
                                                                                                          class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                                                          alt="GamePad"
                                                                                                          title="GamePad"/></a>
                                                <a href="single-product.html" class="" title=""><img width="180"
                                                                                                     height="180"
                                                                                                     src="<?php echo e(url("front/assets/images/deals/2-2.jpg")); ?>"
                                                                                                     class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                                                     alt="GamePad2"
                                                                                                     title="GamePad2"/></a>
                                                <a href="single-product.html" class="last" title=""><img width="180"
                                                                                                         height="180"
                                                                                                         src="<?php echo e(url("front/assets/images/deals/2-3.jpg")); ?>"
                                                                                                         class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                                                         alt="GamePad3"
                                                                                                         title="GamePad3"/></a>
                                                <a href="single-product.html" class="last" title=""><img width="180"
                                                                                                         height="180"
                                                                                                         src="<?php echo e(url("front/assets/images/deals/2-4.jpg")); ?>"
                                                                                                         class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                                                         alt="GamePad3"
                                                                                                         title="GamePad3"/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="onsale-product-content">

                                        <a href="single-product.html"><h3>Ultra Wireless S50 Headphones S50 with
                                                Bluetooth</h3></a>
                                        <span class="price"><span class="electro-price"><ins><span class="amount">&#36;1,215.00</span></ins> <del><span
                                                            class="amount">&#36;2,299.00</span></del></span></span>
                                        <div class="deal-progress">
                                            <div class="deal-stock">
                                                <span class="stock-sold">Already Sold: <strong>0</strong></span>
                                                <span class="stock-available">Available: <strong>30</strong></span>
                                            </div>
                                            <div class="progress">
                                                <span class="progress-bar" style="width:0%">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="section-product-cards-carousel animate-in-view fadeIn animated"
                             data-animation="fadeIn">

                        <header>

                            <h2 class="h1">Random Products</h2>

                            <ul class="nav nav-inline">

                                <li class="nav-item active"><span class="nav-link">Top 20</span></li>

                                <li class="nav-item"><a class="nav-link" href="product-category.html">Smart Phones &amp;
                                        Tablets</a></li>

                                <li Featured class="nav-item"><a class="nav-link" href="product-category.html">Laptops
                                        &amp;
                                        Computers</a></li>

                                <li class="nav-item"><a class="nav-link" href="product-category.html">Video Cameras</a>
                                </li>
                            </ul>
                        </header>

                        <div id="home-v1-product-cards-careousel">
                            <div class="woocommerce columns-2 home-v1-product-cards-carousel product-cards-carousel owl-carousel">

                                <ul class="products columns-2">


                                    <?php

                                    $i = 0;
                                    $classes = array('first', 'last');
                                    $class = $classes[$i++ % 2];
                                    ?>
                                    <?php $__currentLoopData = $randPro; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="product product-card  <?php echo e($class . $i++); ?>  ">

                                            <div class="product-outer">
                                                <div class="media product-inner">

                                                    <a class="media-left" href="single-product.html"
                                                       title="Pendrive USB 3.0 Flash 64 GB">
                                                        <img class="media-object wp-post-image img-responsive"
                                                             src="<?php echo e(url("upload/products/".$rand->photo)); ?>"
                                                             data-echo="<?php echo e(url("upload/products/".$rand->photo)); ?>"
                                                             alt="">
                                                    </a>

                                                    <div class="media-body">
                                                    <span class="loop-product-categories">
                                                        <a href="product-category.html" rel="tag">
                                                            <?php if(!empty($rand->Depa()->get())): ?>
                                                                <?php $__currentLoopData = $rand->Depa()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php echo $dep->en_name; ?>

                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </a>
                                                            </span>

                                                        <a href="single-product.html">
                                                            <h3><?php echo e($rand->en_title); ?></h3>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount"> $3,788.00</span></ins>
                                                                <del><span class="amount">$4,780.00</span></del>
                                                                <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                            <a href="cart.html" class="button add_to_cart_button">Add to
                                                                cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                </ul>
                                <ul class="products columns-2">
                                    <li class="product product-card first">

                                        <div class="product-outer">
                                            <div class="media product-inner">

                                                <a class="media-left" href="single-product.html"
                                                   title="Pendrive USB 3.0 Flash 64 GB">
                                                    <img class="media-object wp-post-image img-responsive"
                                                         src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                         data-echo="<?php echo e(url("front/assets/images/product-cards/6.jpg")); ?>"
                                                         alt="">

                                                </a>

                                                <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html"
                                                                   rel="tag">Peripherals</a>
                                                            </span>

                                                    <a href="single-product.html">
                                                        <h3>External SSD USB 3.1 750 GB</h3>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                        <a href="cart.html" class="button add_to_cart_button">Add to
                                                            cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" class="add_to_wishlist">
                                                                Wishlist</a>

                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->

                                    </li><!-- /.products -->
                                    <li class="product product-card last">

                                        <div class="product-outer">
                                            <div class="media product-inner">

                                                <a class="media-left" href="single-product.html"
                                                   title="Pendrive USB 3.0 Flash 64 GB">
                                                    <img class="media-object wp-post-image img-responsive"
                                                         src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                         data-echo="<?php echo e(url("front/assets/images/product-cards/3.jpg")); ?>"
                                                         alt="">

                                                </a>

                                                <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html"
                                                                   rel="tag">Smartphones</a>
                                                            </span>

                                                    <a href="single-product.html">
                                                        <h3>Notebook Purple G752VT-T7008T</h3>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                        <a href="cart.html" class="button add_to_cart_button">Add to
                                                            cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" class="add_to_wishlist">
                                                                Wishlist</a>

                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->

                                    </li><!-- /.products -->
                                    <li class="product product-card first">

                                        <div class="product-outer">
                                            <div class="media product-inner">

                                                <a class="media-left" href="single-product.html"
                                                   title="Pendrive USB 3.0 Flash 64 GB">
                                                    <img class="media-object wp-post-image img-responsive"
                                                         src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                         data-echo="<?php echo e(url("front/assets/images/product-cards/2.jpg")); ?>"
                                                         alt="">

                                                </a>

                                                <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html" rel="tag">Headphone Cases</a>
                                                            </span>

                                                    <a href="single-product.html">
                                                        <h3>Universal Headphones Case in Black</h3>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> </span></ins>
                                                                        <span class="amount"> $1500</span>
                                                                    </span>
                                                                </span>

                                                        <a href="cart.html" class="button add_to_cart_button">Add to
                                                            cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" class="add_to_wishlist">
                                                                Wishlist</a>

                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->

                                    </li><!-- /.products -->
                                    <li class="product product-card last">

                                        <div class="product-outer">
                                            <div class="media product-inner">

                                                <a class="media-left" href="single-product.html"
                                                   title="Pendrive USB 3.0 Flash 64 GB">
                                                    <img class="media-object wp-post-image img-responsive"
                                                         src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                         data-echo="<?php echo e(url("front/assets/images/product-cards/1.jpg")); ?>"
                                                         alt="">

                                                </a>

                                                <div class="media-body">
                                                            <span class="loop-product-categories">
                                                                <a href="product-category.html"
                                                                   rel="tag">Smartphones</a>
                                                            </span>

                                                    <a href="single-product.html">
                                                        <h3>Tablet Thin EliteBook Revolve 810 G6</h3>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> $3,788.00</span></ins>
                                                                        <del><span class="amount">$4,780.00</span></del>
                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                        <a href="cart.html" class="button add_to_cart_button">Add to
                                                            cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">

                                                            <a href="#" class="add_to_wishlist">
                                                                Wishlist</a>

                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->

                                    </li><!-- /.products -->
                                </ul>
                            </div>
                        </div><!-- #home-v1-product-cards-careousel -->

                    </section>
                    <div class="home-v2-banner-block animate-in-view fadeIn animated" data-animation=" animated fadeIn">
                        <div class="home-v2-fullbanner-ad fullbanner-ad" style="margin-bottom: 70px">
                            <a href="#">
                                <img src="<?php echo e(url("front/assets/images/banner/home-v2.png")); ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <section
                            class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation"
                            data-animation="fadeIn">


                        <header>

                            <h2 class="h1">Laptops &amp; Computers</h2>

                            <div class="owl-nav">
                                <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230"
                                   class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230"
                                   class="slider-next"><i class="fa fa-angle-right"></i></a>
                            </div>

                        </header>


                        <div id="products-carousel-57176fb2c4230">
                            <div class="woocommerce">
                                <div class="products owl-carousel home-v2-categories-products products-carousel columns-6">


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Laptop Yoga 21 80JH0035GE W8.1 (Copy)</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/5.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> $1,999.00</span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Notebook Black Spire V Nitro VN7-591G</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/1.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> $1,999.00</span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Notebook Purple G952VX-T7008T</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/4.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> $1,999.00</span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Notebook Widescreen Z51-70 40K6013UPB</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/3.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                                                    <del><span class="amount">$2,299.00</span></del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Notebook Purple G952VX-T7008T</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/3.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> $1,999.00</span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Tablet Thin EliteBook Revolve 810 G6</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/2.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> $1,999.00</span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Tablet Thin EliteBook Revolve 810 G6</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/2.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> $1,999.00</span></ins>
                                                                    <del><span class="amount">$2,299.00</span></del>
                                                                    <span class="amount"> </span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                    <div class="product">
                                        <div class="product-outer">
                                            <div class="product-inner">
                                                <span class="loop-product-categories"><a href="product-category.html"
                                                                                         rel="tag">Smartphones</a></span>
                                                <a href="single-product.html">
                                                    <h3>Smartphone 6S 128GB LTE</h3>
                                                    <div class="product-thumbnail">
                                                        <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                                             data-echo="<?php echo e(url("front/assets/images/product-category/6.jpg")); ?>"
                                                             class="img-responsive" alt="">
                                                    </div>
                                                </a>

                                                <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> $200.00</span>
                                                                </span>
                                                            </span>
                                                    <a rel="nofollow" href="single-product.html"
                                                       class="button add_to_cart_button">Add to cart</a>
                                                </div><!-- /.price-add-to-cart -->

                                                <div class="hover-area">
                                                    <div class="action-buttons">

                                                        <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>

                                                        <a href="compare.html" class="add-to-compare-link"> Compare</a>
                                                    </div>
                                                </div>
                                            </div><!-- /.product-inner -->
                                        </div><!-- /.product-outer -->
                                    </div><!-- /.products -->


                                </div>
                            </div>
                        </div>
                    </section>
                </main><!-- #main -->
            </div><!-- #primary -->

            <div id="sidebar" class="sidebar" role="complementary" style="margin-top: 778px;">
                <aside class="widget widget_text">
                    <div class="textwidget">
                        <a href="#">
                            <img src="<?php echo e(url("front/assets/images/banner/ad-banner-sidebar.jpg")); ?>" alt="Banner">
                        </a>
                    </div>
                </aside>
                <aside class="widget widget_products">
                    <h3 class="widget-title">Latest Products</h3>
                    <ul class="product_list_widget">
                        <?php $__currentLoopData = $lastPosted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="single-product.html"
                                   title="<?php if(lang() == 'en'): ?><?php echo e($last->en_title); ?> <?php else: ?> <?php echo e($last->ar_title); ?> <?php endif; ?>">
                                    <img width="180" height="180" src="<?php echo e(url("upload/products/".$last->photo)); ?>"
                                         alt="<?php if(lang() == 'en'): ?><?php echo e($last->en_title); ?> <?php else: ?> <?php echo e($last->ar_title); ?> <?php endif; ?>"
                                         class="wp-post-image"/>
                                    <span class="product-title"><?php if(lang() == 'en'): ?><?php echo e($last->en_title); ?> <?php else: ?> <?php echo e($last->ar_title); ?> <?php endif; ?></span>
                                </a>
                                <span class="electro-price"><ins><span
                                                class="amount"><?php echo e($last->price); ?> </span></ins></span>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </ul>
                </aside>
                <aside id="electro_features_block_widget-2" class="widget widget_electro_features_block_widget">
                    <div class="features-list columns-1">
                        <div class="feature">
                            <div class="media">
                                <div class="media-left media-middle feature-icon">
                                    <i class="ec ec-transport"></i>
                                </div>
                                <div class="media-body media-middle feature-text">
                                    <strong>Free Delivery</strong> from $50
                                </div>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="media">
                                <div class="media-left media-middle feature-icon">
                                    <i class="ec ec-customers"></i>
                                </div>
                                <div class="media-body media-middle feature-text">
                                    <strong>99% Positive</strong> Feedbacks
                                </div>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="media">
                                <div class="media-left media-middle feature-icon">
                                    <i class="ec ec-returning"></i>
                                </div>
                                <div class="media-body media-middle feature-text">
                                    <strong>365 days</strong> for free return
                                </div>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="media">
                                <div class="media-left media-middle feature-icon">
                                    <i class="ec ec-payment"></i>
                                </div>
                                <div class="media-body media-middle feature-text">
                                    <strong>Payment</strong> Secure System
                                </div>
                            </div>
                        </div>
                        <div class="feature">
                            <div class="media">
                                <div class="media-left media-middle feature-icon">
                                    <i class="ec ec-tag"></i>
                                </div>
                                <div class="media-body media-middle feature-text">
                                    <strong>Only Best</strong> Brands
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside class="widget widget_electro_products_carousel_widget">
                    <section class="section-products-carousel">


                        <header>

                            <h1>Last One</h1>

                            <div class="owl-nav">
                                <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2dc4a8"
                                   class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                <a href="#products-carousel-next" data-target="#products-carousel-57176fb2dc4a8"
                                   class="slider-next"><i class="fa fa-angle-right"></i></a>
                            </div>

                        </header>


                        <div id="products-carousel-57176fb2dc4a8">
                            <div class="products owl-carousel  products-carousel-widget columns-1">

                                <?php $__currentLoopData = $lastOne; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="product-carousel-alt">
                                    <a href="single-product.html">
                                        <div class="product-thumbnail">
                                            <img width="250" height="232"
                                                 src="<?php echo e(url("upload/products/".$last->photo)); ?>"
                                                 class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                 alt="<?php echo e($last->en_title); ?>"/>
                                        </div>
                                    </a>

                                    <span class="loop-product-categories">
                                        <a href="single-product.html" rel="tag">
                                            <?php if(!empty($last->Depa()->get())): ?>
                                                <?php $__currentLoopData = $last->Depa()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php echo $dep->en_name; ?>

                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                         </a>
                                    </span><a href="single-product.html"><h3><?php if(lang() == 'ar'): ?><?php echo e($last->ar_title); ?> <?php else: ?> <?php echo e($last->en_title); ?> <?php endif; ?></h3></a>
                                    <span class="price"><span class="electro-price"><span
                                                    class="amount">&#036; <?php echo e($last->price); ?></span></span></span>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </section>
                </aside>
                <aside class="widget electro_posts_carousel_widget">
                    <section class="section-posts-carousel">
                        <header>

                            <h3 class="widget-title">From the Blog</h3>
                            <div class="owl-nav">
                                <a href="#posts-carousel-prev" data-target="#posts-carousel-57176fb2e4a7f"
                                   class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                <a href="#posts-carousel-next" data-target="#posts-carousel-57176fb2e4a7f"
                                   class="slider-next"><i class="fa fa-angle-right"></i></a>
                            </div>

                        </header>

                        <div id="posts-carousel-57176fb2e4a7f" class="blog-carousel-homev2">
                            <div class="owl-carousel post-carousel blog-carousel-widget">
                                <div class="post-item">
                                    <a class="post-thumbnail" href="blog-single.html">
                                        <img width="270" height="180"
                                             src="<?php echo e(url("front/assets/images/blog/blog-1.jpg")); ?>" class="wp-post-image"
                                             alt="1"/>
                                    </a>
                                    <div class="post-content">
                                        <span class="post-category"><a href="blog-single.html"
                                                                       rel="category tag">Design</a>, <a
                                                    href="blog-single.html" rel="category tag">Technology</a></span> -
                                        <span class="post-date">March 4, 2016</span>
                                        <a class="post-name" href="blog-single.html">Robot Wars &#8211; Post with
                                            Gallery</a>
                                        <span class="comments-link"><a
                                                    href="blog-single.html#comments">Leave a comment</a></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <a class="post-thumbnail" href="blog-single.html">
                                        <img width="270" height="138"
                                             src="<?php echo e(url("front/assets/images/blog/blog-2.jpg")); ?>" class="wp-post-image"
                                             alt="6"/>
                                    </a>
                                    <div class="post-content">
                                        <span class="post-category"><a href="blog-single.html"
                                                                       rel="category tag">Design</a>, <a
                                                    href="blog-single.html" rel="category tag">News</a>, <a
                                                    href="blog-single.html" rel="category tag">Uncategorized</a></span>
                                        -
                                        <span class="post-date">March 3, 2016</span>
                                        <a class="post-name" href="blog-single.html">Robot Wars &#8211; Now Closed
                                            &#8211; Post with Audio</a>
                                        <span class="comments-link"><a
                                                    href="blog-single.html#comments">Leave a comment</a></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <a class="post-thumbnail" href="blog-single.html">
                                        <img width="270" height="152"
                                             src="<?php echo e(url("front/assets/images/blog/blog-3.jpg")); ?>"
                                             class="attachment-electro_blog_carousel size-electro_blog_carousel wp-post-image"
                                             alt="video-format"/>
                                    </a>
                                    <div class="post-content">
                                        <span class="post-category"><a href="blog-single.html"
                                                                       rel="category tag">Videos</a></span> -
                                        <span class="post-date">March 3, 2016</span>
                                        <a class="post-name" href="blog-single.html">Robot Wars &#8211; Now Closed
                                            &#8211; Post with Video</a>
                                        <span class="comments-link"><a
                                                    href="blog-single.html#comments">Leave a comment</a></span>
                                    </div>
                                </div>
                                <div class="post-item">
                                    <a class="post-thumbnail" href="blog-single.html">
                                        <div class="electro-img-placeholder"><img
                                                    src="http://placehold.it/270x180/DDD/DDD/" alt=""><i
                                                    class="fa fa-paragraph"></i></div>
                                    </a>
                                    <div class="post-content">
                                        <span class="post-category"><a href="blog-single.html"
                                                                       rel="category tag">Events</a>, <a
                                                    href="blog-single.html" rel="category tag">News</a></span> -
                                        <span class="post-date">March 2, 2016</span>
                                        <a class="post-name" href="blog-single.html">Announcement &#8211; Post without
                                            Image</a>
                                        <span class="comments-link"><a
                                                    href="blog-single.html#comments">Leave a comment</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </aside>
            </div>

        </div><!-- .container -->
    </div><!-- #content -->

    <section class="brands-carousel">
        <h2 class="sr-only">Brands Carousel</h2>
        <div class="container">
            <div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">

                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Acer</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/1.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Apple</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/2.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Asus</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/3.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Dell</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/4.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Gionee</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/5.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>HP</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/6.png")); ?>" class="img-responsive" alt="">
                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>HTC</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/3.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>IBM</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/5.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Lenova</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/2.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>LG</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/1.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Micromax</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/6.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


                <div class="item">

                    <a href="#">

                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Microsoft</h4>
                                </div><!-- /.info -->
                            </figcaption>

                            <img src="<?php echo e(url("front/assets/images/blank.gif")); ?>"
                                 data-echo="<?php echo e(url("front/assets/images/brands/4.png")); ?>" class="img-responsive" alt="">

                        </figure>
                    </a>
                </div><!-- /.item -->


            </div><!-- /.owl-carousel -->

        </div>
    </section>






<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>