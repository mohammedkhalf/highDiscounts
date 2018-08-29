         <nav class="navbar navbar-primary navbar-full hidden-md-down">
                <div class="container">
                    <ul class="nav navbar-nav departments-menu animate-dropdown">
                        <li class="nav-item dropdown ">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >Shop by Department</a>
                            <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
                            

                   <?php
$departments= App\Model\DepartmentProducts::where('parent',0)->get();
                     ?>
  <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2585 dropdown">
                                    <a title="Cameras, Audio &amp; Video"  data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true"><?php echo e($department->en_name); ?></a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                    <?php  $parent = App\Model\DepartmentProducts::where('parent','=',$department->id)->get(); ?>
                                                <div class="vc_row row wpb_row vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                        <?php $__currentLoopData = $parent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                         <a href="<?php echo e(url('/single_dep/'.$parents->id)); ?>">   <li class="nav-title"><?php echo e($parents->en_name); ?></li></a>
                                                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search" method="get" action="<?php echo e(url('/search_product')); ?>">
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="nameSearch" placeholder="Search for products" />
                            <div class="input-group-addon search-categories">
                                <select name='product_cat' id='product_cat' class='postform resizeselect' >
                                    <option value='0' selected='selected'>All Categories</option>
                                    <?php
                                    $departments= App\Model\DepartmentProducts::where('parent',0)->get();
                                    ?>
                                    <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value='<?php echo e($department->id); ?>'><?php if( Lang() =='en' ): ?> <?php echo e($department->en_name); ?><?php else: ?><?php echo e($department->ar_name); ?> <?php endif; ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                            <div class="input-group-btn">
                                <input type="hidden" id="search-param" name="post_type" value="product" />
                                <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                            </div>
                        </div>
                    </form>
              
                    <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">

                        <li class="nav-item dropdown">
                            <a href="<?php echo e(url('/shopping-cart')); ?>" class="nav-link" data-toggle="dropdown">
                                <i class="ec ec-shopping-bag"></i>
                                    <?php if (Auth::user()) {
                # code...
             $product = App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
        $total =  App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');  ?>
<?php if( $product != null): ?>
                                <span class="cart-items-count count"><?php echo e(count ($product)); ?></span>
                                <span class="cart-items-total-price total-price"><span class="amount">&#36;<?php echo e($total); ?></span></span>
                                               <?php endif; ?>
            <?php } ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget_shopping_cart_content">

                                        <ul class="cart_list product_list_widget ">


                                            <li class="mini_cart_item">
                                                <a title="Remove this item" class="remove" href="#">×</a>
                                                <a href="single-product.html">
                                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart1.jpg" alt="">White lumia 9001&nbsp;
                                                </a>

                                                <span class="quantity">2 × <span class="amount">£150.00</span></span>
                                            </li>


                                            <li class="mini_cart_item">
                                                <a title="Remove this item" class="remove" href="#">×</a>
                                                <a href="single-product.html">
                                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart2.jpg" alt="">PlayStation 4&nbsp;
                                                </a>

                                                <span class="quantity">1 × <span class="amount">£399.99</span></span>
                                            </li>

                                            <li class="mini_cart_item">
                                                <a data-product_sku="" data-product_id="34" title="Remove this item" class="remove" href="#">×</a>
                                                <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart3.jpg" alt="">POV Action Cam HDR-AS100V&nbsp;

                                                </a>

                                                <span class="quantity">1 × <span class="amount">£269.99</span></span>
                                            </li>


                                        </ul><!-- end product list -->


                                        <p class="total"><strong>Subtotal:</strong> <span class="amount">£969.98</span></p>


                                        <p class="buttons">
                                            <a class="button wc-forward" href="<?php echo e(url('/shopping-cart')); ?>">View Cart</a>
                                            <a class="button checkout wc-forward" href="<?php echo e(url('/checkout')); ?>">Checkout</a>
                                        </p>


                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>

                    <ul class="navbar-wishlist nav navbar-nav pull-right flip">
                        <li class="nav-item">
                            <a href="<?php echo e(url('/wishlist')); ?>" class="nav-link"><i class="ec ec-favorites"></i></a>
                        </li>
                    </ul>
                  
              
                </div>
            </nav>

