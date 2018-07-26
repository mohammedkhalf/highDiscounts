@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="single-sidebar">
                    <h2 class="sidebar-title">{{trans('admin.categories')}}</h2>
                    @foreach($departments as $department)
                        <div class="thubmnail-recent">
                            <img src="{{url('upload/products/'.$department->image)}}" class="recent-thumb" alt="">
                            @if(lang() == 'ar')
                                <h2><a href="single-product.html">{{$department->ar_name}}</a></h2>
                            @else
                                <h2><a href="single-product.html">{{$department->en_name}}</a></h2>
                            @endif
                        </div>
                    @endforeach

                </div>


            </div>
        </div>
    </div>

@endsection