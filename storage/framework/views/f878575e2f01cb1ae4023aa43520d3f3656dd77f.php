<?php $__env->startSection('title'); ?>
    Home page
<?php $__env->stopSection(); ?>
<?php $__env->startSection('up'); ?>
    <?php echo e(trans('front.home')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('front.layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>



    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>



        <div id="content" class="site-content" tabindex="-1">
            <div class="container">

                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="home-v2-slider" >
                            <!-- ========================================== SECTION – HERO : END========================================= -->

                            <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                                <?php $__currentLoopData = $allproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="item" style="background-image: url(<?php echo e(url('upload/products/'.$slider->image)); ?>);">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-5">
                                                    <div class="caption vertical-center text-left">
                                                        <div class="hero-1 fadeInDown-1">
                                                            <?php echo e($slider->en_title); ?>

                                                        </div>

                                                        <div class="hero-subtitle fadeInDown-2">
                                                            <?php echo e($slider->en_content); ?>

                                                        </div>

                                                        <div class="hero-action-btn fadeInDown-4">
                                                            <a href="<?php echo e(url('/allproducts')); ?>" class="big le-button ">Start Buying</a>
                                                        </div>
                                                    </div><!-- /.caption -->
                                                </div>
                                            </div>
                                        </div><!-- /.container -->
                                    </div><!-- /.item -->


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div><!-- /.owl-carousel -->

                            <!-- ========================================= SECTION – HERO : END ========================================= -->

                        </div><!-- /.home-v1-slider -->

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
                                    <section class="section-products-carousel" >
                                        <div class="home-v2-owl-carousel-tabs">
                                            <div class="woocommerce columns-3">


                                                <div class="products owl-carousel home-v2-carousel-tabs products-carousel columns-3">



                                                    <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="product ">
                                                            <div class="product-outer">
                                                                <div class="product-inner"><?php if(!empty($fe->product_dep()->get())): ?>
                                                                        <?php $__currentLoopData = $fe->product_dep()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <span class="loop-product-categories"><a href="<?php echo e(url('/single_dep/'.$dep->id)); ?>" rel="tag">
                                        <?php echo $dep->en_name; ?>

                                    </a></span><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                    <a href="<?php echo e(url('/single_product/'.$fe->id)); ?>">
                                                                        <h3><?php echo e($fe->en_title); ?></h3>
                                                                        <div class="product-thumbnail">
                                                                            <img src="<?php echo e(url('upload/products/'.$fe->photo)); ?>" data-echo="<?php echo e(url('upload/products/'.$fe->photo)); ?>" class="img-responsive" alt="<?php echo e($fe->en_title); ?>">
                                                                        </div>
                                                                    </a>

                                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> <?php echo e($fe->price); ?> LE</span>
                                                                            </span>
                                                                        </span>
                                                                        <a rel="nofollow" href="<?php echo e(route('product.addToCart' , ['id' => $fe->id])); ?>" class="button add_to_cart_button">Add to cart</a>
                                                                    </div><!-- /.price-add-to-cart -->

                                                                    <div class="hover-area">
                                                                        <div class="action-buttons">

                                                                            <p>IN Stock : <?php echo e($fe->stock); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.product-inner -->
                                                            </div><!-- /.product-outer -->
                                                        </div><!-- /.product -->

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


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

                                                    <?php $__currentLoopData = $onsale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="product ">
                                                            <div class="product-outer">
                                                                <div class="product-inner">
                                                                    <?php if(!empty($fe->product_dep()->get())): ?>
                                                                        <?php $__currentLoopData = $fe->product_dep()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <span class="loop-product-categories"><a href="<?php echo e(url('/single_dep/'.$dep->id)); ?>" rel="tag">
                                        <?php echo $dep->en_name; ?>

                                   </a></span> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                    <a href="<?php echo e(url('/single_product/'.$fe->id)); ?>">
                                                                        <h3><?php echo e($fe->en_title); ?></h3>
                                                                        <div class="product-thumbnail">
                                                                            <img src="<?php echo e(url('upload/products/'.$fe->photo)); ?>" data-echo="<?php echo e(url('upload/products/'.$fe->photo)); ?>" class="img-responsive" alt="<?php echo e($fe->en_title); ?>">
                                                                        </div>
                                                                    </a>

                                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> <?php echo e($fe->price); ?> LE</span>
                                                                            </span>
                                                                        </span>
                                                                        <a rel="nofollow" href="<?php echo e(route('product.addToCart' , ['id' => $fe->id])); ?>" class="button add_to_cart_button">Add to cart</a>
                                                                    </div><!-- /.price-add-to-cart -->

                                                                    <div class="hover-area">
                                                                        <div class="action-buttons">

                                                                            <p>IN Stock : <?php echo e($fe->stock); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.product-inner -->
                                                            </div><!-- /.product-outer -->
                                                        </div><!-- /.product -->

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




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

                                                    <?php $__currentLoopData = $toprate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="product ">
                                                            <div class="product-outer">
                                                                <div class="product-inner"><?php if(!empty($fe->product_dep()->get())): ?>
                                                                        <?php $__currentLoopData = $fe->product_dep()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                            <span class="loop-product-categories"><a href="<?php echo e(url('/single_dep/'.$dep->id)); ?>" rel="tag">
                                        <?php echo $dep->en_name; ?>

                                   </a></span> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php endif; ?>
                                                                    <a href="<?php echo e(url('/single_product/'.$fe->id)); ?>">
                                                                        <h3><?php echo e($fe->en_title); ?></h3>
                                                                        <div class="product-thumbnail">
                                                                            <img src="<?php echo e(url('upload/products/'.$fe->photo)); ?>" data-echo="<?php echo e(url('upload/products/'.$fe->photo)); ?>" class="img-responsive" alt="<?php echo e($fe->en_title); ?>">
                                                                        </div>
                                                                    </a>

                                                                    <div class="price-add-to-cart">
                                                                        <span class="price">
                                                                            <span class="electro-price">
                                                                                <ins><span class="amount"> </span></ins>
                                                                                <span class="amount"> <?php echo e($fe->price); ?> LE</span>
                                                                            </span>
                                                                        </span>
                                                                        <a rel="nofollow" href="<?php echo e(route('product.addToCart' , ['id' => $fe->id])); ?>" class="button add_to_cart_button">Add to cart</a>
                                                                    </div><!-- /.price-add-to-cart -->

                                                                    <div class="hover-area">
                                                                        <div class="action-buttons">

                                                                            <p>IN Stock : <?php echo e($fe->stock); ?></p>
                                                                        </div>
                                                                    </div>
                                                                </div><!-- /.product-inner -->
                                                            </div><!-- /.product-outer -->
                                                        </div><!-- /.product -->

                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                </div><!-- /.products -->
                                            </div>
                                        </div>
                                    </section>
                                </div><!-- /.tab-pane -->
                            </div><!-- /.tab-content -->
                        </section><!-- /.products-carousel-tabs -->

                        <section class="section-product-cards-carousel animate-in-view fadeIn animated" data-animation="fadeIn">

                            <header>

                                <h2 class="h1">Best Sellers</h2>

                                <ul class="nav nav-inline">

                                    <li class="nav-item active"><span class="nav-link">Top 20</span></li>
                                    <?php $__currentLoopData = $department; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="nav-item"><a class="nav-link" href="product-category.html"><?php echo e($fe->en_name); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </header>

                            <div id="home-v1-product-cards-careousel">
                                <div class="woocommerce columns-2 home-v1-product-cards-carousel product-cards-carousel owl-carousel">

                                    <ul class="products columns-2">
                                        <?php $__currentLoopData = $best; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="product product-card">

                                                <div class="product-outer">
                                                    <div class="media product-inner">

                                                        <a class="media-left" href="<?php echo e(url('/single_product/'.$fe->id)); ?>" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="<?php echo e(url('upload/products/'.$fe->photo)); ?>}" data-echo="<?php echo e(url('upload/products/'.$fe->photo)); ?>" alt="">
                                                        </a>

                                                        <div class="media-body">
                                                            <span class="loop-product-categories"><?php if(!empty($fe->product_dep()->get())): ?>
                                                                    <?php $__currentLoopData = $fe->product_dep()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <a href="<?php echo e(url('/single_dep/'.$dep->id)); ?>" rel="tag">
                                        <?php echo $dep->en_name; ?>

                                  </a>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </span>

                                                            <a href="single-product.html">
                                                                <h3><?php echo e($fe->en_title); ?></h3>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> <?php echo e($fe->price); ?> LE</span></ins>

                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                                <a href="<?php echo e(route('product.addToCart' , ['id' => $fe->id])); ?>" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <p>IN Stock : <?php echo e($fe->stock); ?></p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->

                                            </li><!-- /.products -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </ul>
                                    <ul class="products columns-2">
                                        <?php $__currentLoopData = $best; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="product product-card">

                                                <div class="product-outer">
                                                    <div class="media product-inner">

                                                        <a class="media-left" href="<?php echo e(url('/single_product/'.$fe->id)); ?>" title="Pendrive USB 3.0 Flash 64 GB">
                                                            <img class="media-object wp-post-image img-responsive" src="<?php echo e(url('upload/products/'.$fe->photo)); ?>" data-echo="<?php echo e(url('upload/products/'.$fe->photo)); ?>" alt="">
                                                        </a>

                                                        <div class="media-body">
                                                            <span class="loop-product-categories">
                                      <?php if(!empty($fe->product_dep()->get())): ?>
                                                                    <?php $__currentLoopData = $fe->product_dep()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <a href="<?php echo e(url('/single_dep/'.$dep->id)); ?>" rel="tag">
                                        <?php echo $dep->en_name; ?>

                                  </a>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            </span>

                                                            <a href="single-product.html">
                                                                <h3><?php echo e($fe->en_title); ?></h3>
                                                            </a>

                                                            <div class="price-add-to-cart">
                                                                <span class="price">
                                                                    <span class="electro-price">
                                                                        <ins><span class="amount"> <?php echo e($fe->price); ?> LE</span></ins>

                                                                        <span class="amount"> </span>
                                                                    </span>
                                                                </span>

                                                                <a href="<?php echo e(route('product.addToCart' , ['id' => $fe->id])); ?>" class="button add_to_cart_button">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">

                                                                    <p>IN Stock : <?php echo e($fe->stock); ?></p>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->

                                            </li><!-- /.products -->
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </div><!-- #home-v1-product-cards-careousel -->

                        </section>
                        <div class="home-v2-banner-block animate-in-view fadeIn animated" data-animation=" animated fadeIn">
                            <div class="home-v2-fullbanner-ad fullbanner-ad" style="margin-bottom: 70px">
                                <a href="<?php echo e(url('/allproducts')); ?>">
                                    <img src="<?php echo e(url("upload/products/11.png")); ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <section class="home-v2-categories-products-carousel section-products-carousel animate-in-view fadeIn animated animation" data-animation="fadeIn">


                            <header>

                                <h2 class="h1">Laptops &amp; Computers</h2>

                                <div class="owl-nav">
                                    <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2c4230" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="#products-carousel-next" data-target="#products-carousel-57176fb2c4230" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                </div>

                            </header>


                            <div id="products-carousel-57176fb2c4230">
                                <div class="woocommerce">
                                    <div class="products owl-carousel home-v2-categories-products products-carousel columns-6">


                                        <?php $__currentLoopData = $laptops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="product">
                                                <div class="product-outer">
                                                    <div class="product-inner">
                                                        <span class="loop-product-categories"><?php if(!empty($fe->product_dep()->get())): ?>
                                                                <?php $__currentLoopData = $fe->product_dep()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <a href="<?php echo e(url('/single_dep/'.$dep->id)); ?>" rel="tag">
                                        <?php echo $dep->en_name; ?>

                                  </a>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?></span>
                                                        <a href="<?php echo e(url('/single_product/'.$fe->id)); ?>">
                                                            <h3><?php echo e($fe->en_title); ?></h3>
                                                            <div class="product-thumbnail">
                                                                <img src="<?php echo e(url('upload/products/'.$fe->photo)); ?>" data-echo="<?php echo e(url('upload/products/'.$fe->photo)); ?>" class="img-responsive" alt="">
                                                            </div>
                                                        </a>

                                                        <div class="price-add-to-cart">
                                                            <span class="price">
                                                                <span class="electro-price">
                                                                    <ins><span class="amount"> </span></ins>
                                                                    <span class="amount"> <?php echo e($fe->price); ?> LE</span>
                                                                </span>
                                                            </span>
                                                            <a rel="nofollow" href="<?php echo e(route('product.addToCart' , ['id' => $fe->id])); ?>" class="button add_to_cart_button">Add to cart</a>
                                                        </div><!-- /.price-add-to-cart -->

                                                        <div class="hover-area">
                                                            <div class="action-buttons">

                                                                <p>IN Stock : <?php echo e($fe->stock); ?> </p>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.product-inner -->
                                                </div><!-- /.product-outer -->
                                            </div><!-- /.products -->


                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                    </div>
                                </div>
                            </div>
                        </section>
                    </main><!-- #main -->
                </div><!-- #primary -->

                <div id="sidebar" class="sidebar" role="complementary" style="margin-top: 778px;">

                    <aside class="widget widget_products">
                        <h3 class="widget-title">Latest Products</h3>
                        <ul class="product_list_widget">
                            <?php $__currentLoopData = $widget; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <a href="<?php echo e(url('/single_product/'.$pro->id)); ?>" title="<?php echo e($pro->en_title); ?>">
                                        <img width="180" height="180" src="<?php echo e(url('upload/products/'.$pro->photo)); ?>" class="wp-post-image" alt=""/><span class="product-title"><?php echo e($pro->en_title); ?></span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount"><?php echo e($pro->price); ?> LE</span></ins>
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
                        <section class="section-products-carousel" >


                            <header>

                                <h1>Featured Products</h1>

                                <div class="owl-nav">
                                    <a href="#products-carousel-prev" data-target="#products-carousel-57176fb2dc4a8" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                                    <a href="#products-carousel-next" data-target="#products-carousel-57176fb2dc4a8" class="slider-next"><i class="fa fa-angle-right"></i></a>
                                </div>

                            </header>


                            <div id="products-carousel-57176fb2dc4a8">
                                <div class="products owl-carousel  products-carousel-widget columns-1">
                                    <?php $__currentLoopData = $featured; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="product-carousel-alt">
                                            <a href="<?php echo e(url('/single_product/'.$fe->id)); ?>">
                                                <div class="product-thumbnail"><img width="250" height="232" src="<?php echo e(url('upload/products/'.$fe->photo)); ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="Smartwatch2" /></div>
                                            </a>

                                            <span class="loop-product-categories"><?php if(!empty($fe->product_dep()->get())): ?>
                                                    <?php $__currentLoopData = $fe->product_dep()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(url('/single_dep/'.$dep->id)); ?>" rel="tag">
                                        <?php echo $dep->en_name; ?>

                                  </a>  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?></span><a href="<?php echo e(url('/single_product/'.$fe->id)); ?>"><h3><?php echo e($fe->en_title); ?></h3></a>
                                            <span class="price"><span class="electro-price"><span class="amount"><?php echo e($fe->price); ?> LE</span></span></span>
                                        </div>

                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="item">

                            <a href="<?php echo e(url('/single_dep/'.$brand->id)); ?>" rel="tag">


                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4><?php echo e($brand->en_name); ?></h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="<?php echo e(url('upload/products/'.$brand->image)); ?>" data-echo="<?php echo e(url('upload/products/'.$brand->image)); ?>" class="img-responsive" alt="">

                                </figure>
                            </a>

                        </div><!-- /.item -->

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                </div><!-- /.owl-carousel -->

            </div>
        </section>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>