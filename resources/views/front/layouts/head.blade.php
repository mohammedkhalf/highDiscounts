<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Electro &#8211; Electronics Ecommerce Theme</title>

    @if(lang() == 'ar')
        {{Html::style('front/assets/css/bootstrap-rtl.min.css') }}


    @else
        {{Html::style('front/assets/css/bootstrap.min.css') }}

    @endif
    {{Html::style('front/assets/css/font-awesome.min.css') }}
    {{Html::style('front/assets/css/animate.min.css') }}
    {{Html::style('front/assets/css/font-electro.css') }}
    {{Html::style('front/assets/css/owl-carousel.css') }}
    @if(lang() == 'ar')
    {{Html::style('front/assets/css/rtl.min.css') }}
    @else

    {{Html::style('front/assets/css/style.css') }}
    @endif

    {{Html::style('front/assets/css/colors/yellow.css') }}
@if(lang() == 'ar')
<link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">
  <style type="text/css">body {font-family: 'Cairo', sans-serif;} </style>
          @else
            <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic'
          rel='stylesheet' type='text/css'>

 @endif
    <link rel="shortcut icon" href="{{url('front/assets/images/fav-icon.png')}}">
</head>

<body class="home-v2">