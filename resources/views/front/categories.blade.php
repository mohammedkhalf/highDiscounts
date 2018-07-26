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
                alert(clicked_id);
                var id=clicked_id
                $.ajax({
                    type: 'get',
                    url: '{!! \Illuminate\Support\Facades\URL::to('getcity')!!}',
                    data: {'id': gov_id },
                    success: function (data) {
                        /* console.log('success');
                         console.log(data);*/
                        op += '<option value="0" selected disabled>من فضلك اختر المنطقه</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].c_title + '</option>';
                        }
                        $('#gov-city').html("");
                        $('#gov-city').append(op);
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
        </div>
    </div>

@endsection