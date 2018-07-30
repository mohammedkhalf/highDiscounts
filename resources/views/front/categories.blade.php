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
                        // console.log('success');
                        //  console.log(data);
                        for (var i = 0; i < data.length; i++) {

                      op+=' <div class="single-product">\n' +
                          '<div class="product-f-image">\n' +
                          '<img src="upload/products/'+ data[i].image+'" alt="">\n' +
                          '<div class="product-hover">\n' +
                          '</div>\n' +
                          '</div>\n' +
                          '<h2><button  class="add_to_cart_button" id="'+ data[i].id+'" onClick="product(this.id)">'+data[i].en_name+'</button> </h2>\n' +
                          ' <div class="product-carousel-price">\n' +
                          ' </div>\n' +
                          ' </div>'


                        }
                        $('#dep').html("");
                        $('#dep').append(op);
                    },
                    error: function () {
                        console.log('error');

                    }
                });
            }


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
                        for (var i = 0; i < data.length; i++) {

                            op+='<ul class="products">\n' +
                                '<li class="product">\n' +
                                ' <a href="">\n' +

                                '<img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="upload/products/'+ data[i].photo+'">\n' +
                                ' <h3><button  class="add_to_cart_button" id="'+ data[i].id+'" onClick="single_product(this.id)">'+data[i].en_title+'</button></h3>\n' +
                                '<span class="price"><span class="amount">'+data[i].price+'</span></span>\n' +
                                '</a>\n' +
                                '</li>\n' +
                                '</ul>'
                        }
                        $('#product').html("");
                        $('#product').append(op);
                    },
                    error: function () {
                        console.log('error');

                    }
                });
            }

            function single_product(clicked_id)
            {
                window.location.href = "<?php echo URL::to('/singleproduct'); ?>";
                {{--// alert(clicked_id);--}}
                {{--var id=clicked_id;--}}
                {{--// console.log(id);--}}
                {{--var op="";--}}
                {{--$.ajax({--}}
                    {{--type: 'get',--}}
                    {{--url: '{!! \Illuminate\Support\Facades\URL::to('/singleproduct')!!}',--}}
                    {{--data: {'id': id },--}}
                    {{--success: function (data) {--}}
                      {{--console.log('success');--}}
                    {{--},--}}
                    {{--error: function () {--}}
                        {{--console.log('error');--}}

                    {{--}--}}
                {{--});--}}
            }



    </script>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

<div class="col-md-4">
    <div class="single-sidebar">
        <h2 class="sidebar-title">{{trans('admin.categories')}}</h2>
        @foreach($departments as $department)

            <div class="thubmnail-recent">
                <img  @if(lang() == 'ar') style="float: right;"@else style="float: left;" @endif src="{{url('upload/products/'.$department->image)}}" class="recent-thumb" alt="">
                @if(lang() == 'ar')
                    <h2><button  class="add_to_cart_button" id="{{$department->id}}" onClick="reply_click(this.id)">{{$department->ar_name}}</button></h2>
                @else
                    <h2><button class="add_to_cart_button" id="{{$department->id}}" onClick="reply_click(this.id)">{{$department->en_name}}</button></h2>
                @endif
            </div>
        @endforeach

    </div>
</div>

<div class="col-md-4">
    <div class="cross-sells" id="product">
        <h2>Related Products</h2>

    </div>
</div>



<div class="col-md-8" >
    <div class="related-products-wrapper">
        <h2 class="related-products-title">Categoiers</h2>
        <div class="related-products-carousel" id="dep">
            {{--<div class="single-product">--}}
            {{--<div class="product-f-image">--}}
            {{--<img src="img/product-1.jpg" alt="">--}}
            {{--<div class="product-hover">--}}
            {{--</div>--}}
            {{--</div>--}}

            {{--<h2><a href="">Sony Smart TV - 2015</a></h2>--}}

            {{--<div class="product-carousel-price">--}}
            {{--<ins>$700.00</ins> <del>$100.00</del>--}}
            {{--</div>--}}
            {{--</div>--}}

        </div>
    </div>
</div>



            </div>
        </div>
    </div>


@endsection