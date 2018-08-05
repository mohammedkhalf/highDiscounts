@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
    <script>

            function reply_click(clicked_id)
            {
                // alert(clicked_id);
                var id=clicked_id;
                // console.log(id);
                var op="";
                $.ajax({
                    type: 'get',
                    url: '{!! \Illuminate\Support\Facades\URL::to('/singledep')!!}',
                    data: {'id': id },
                    success: function (data) {
                        for (var i = 0; i < data.length; i++) {
                            op+=  ' <li>\n' +
                            '  <div class="thubmnail-recent">\n' +
                            ' <img src="upload/products/'+ data[i].image+'" class="recent-thumb" alt=""' +
                            @if(lang() == 'ar')
                                'style="float: right;"'+
                            @else
                               ' style="float: left;" '+
                            @endif
                                '>\n' +
                             @if(lang() =='ar')
                                 '<h2><button  class="add_to_cart_button" id="'+ data[i].id+'" onClick="product(this.id)">'+data[i].ar_name+'</button> </h2>\n' +
                              @else
                                  '<h2><button  class="add_to_cart_button" id="'+ data[i].id+'" onClick="product(this.id)">'+data[i].en_name+'</button> </h2>\n' +                            @endif
                            '</div>\n' +
                            '</li>'
                        }
                        $('#'+id+'_1').html("");
                        $('#'+id+'_1').append(op);
                    },
                    error: function () {
                        console.log('error');

                    }
                });
            }
   </script>
<script>

            function product(clicked_id)
            {
                // alert(clicked_id);
                var id=clicked_id;
                // console.log(id);
                var op="";
                $.ajax({
                    type: 'get',
                    url: '{!! \Illuminate\Support\Facades\URL::to('/productdepartment')!!}',
                    data: {'id': id },
                    success: function (data) {
                        // console.log('success');
                        //  console.log(data);
                         op+= '<ul class="products">'
                        for (var i = 0; i < data.length; i++) {

                            op+= '<li class="product">'+
                              '<img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="upload/products/'+ data[i].photo+'">\n' +
                                ' <h3><button  class="add_to_cart_button" id="'+ data[i].id+'" onClick="singleProduct(this.id)">'+data[i].en_title+'</button></h3>\n' +
                                '<span class="price"><span class="amount">'+data[i].price+'</span></span>\n'+
                                    '</li>'


                        }
                       op+= '</ul>'
                        $('#product').html("");
                        $('#product').append(op);
                    },
                    error: function () {
                        console.log('error');

                    }
                });
            }
</script>
    <script>
            function singleProduct(clicked_id)
            {
                var id=clicked_id;
                $.ajax({
                    type: 'get',
                    url: '{!! \Illuminate\Support\Facades\URL::to('/singleproduct')!!}',
                    data: {'id': id },
                    success: function (data) {
                        window.location.href = data;
                    },
                    error: function () {
                        console.log('error');

                    }
                });
            }



    </script>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <h2 class="sidebar-title">{{trans('admin.categories')}}</h2>
                    <ul >
                        @foreach($departments as $department)
                            <li>
                                <div class="thubmnail-recent">
                                    <img @if(lang() == 'ar') style="float: right;"@else style="float: left;" @endif src="{{url('upload/products/'.$department->image)}}" class="recent-thumb" alt="">
                                    @if(lang() == 'ar')
                                        <h2><button  class="add_to_cart_button" id="{{$department->id}}" onClick="reply_click(this.id)">{{$department->ar_name}}</button></h2>
                                    @else
                                        <h2><button class="add_to_cart_button" id="{{$department->id}}" onClick="reply_click(this.id)">{{$department->en_name}}</button></h2>
                                    @endif
                                </div>
                                <ul style="margin-top: 50px;" id="{{$department->id}}_1">

                                </ul>
                            </li>
                        @endforeach
                    </ul>

                </div>


                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <div class="cart-collaterals">



                                <div class="cross-sells">
                                    <h2 id="product">Related Products</h2>
                                        {{--<ul class="products" id="product"  >--}}
                                        {{--<li class="product"  >--}}
                                            {{--<a href="single-product.html">--}}
                                                {{--<img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">--}}
                                                {{--<h3>Ship Your Idea</h3>--}}
                                                {{--<span class="price"><span class="amount">£20.00</span></span>--}}
                                            {{--</a>--}}

                                            {{--<a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>--}}
                                      {{----}}
                                        {{--</li>--}}


                                    {{--</ul>--}}
                                </div>



                            </div>

                        </div>
                   </div>
                </div>



            </div>











        </div>
    </div>


@endsection