<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href=".."><img src="{{url('/img/logo.png')}}"></a></h1>
                </div>
            </div>
            <?php if (Auth::user()) {
                # code...
             $product = App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->get()->all();
        $total =  App\Model\ShoppingCart::where('user_id','=',Auth::user()->id)->sum('price');  ?>
@if ( $product != null)
            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="{{url('shopping-cart')}}">Cart - {{$total}}<span class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> {{ count ($product)}} </span></a>
                </div>
            </div>
            @endif
            <?php } ?>
        </div>
    </div>
</div> <!-- End site branding area -->
