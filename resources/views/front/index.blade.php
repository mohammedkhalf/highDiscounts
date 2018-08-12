@include('front.layouts.head')
@include('front.layouts.header')
@include('front.layouts.navbar')



<!-- Main content -->
@include('front.layouts.message')

@yield('content')

@include('front.layouts.footer')