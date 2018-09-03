@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
  @include('front.layouts.catwidget')
    @include('front.layouts.menu')

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">
                    <nav class="woocommerce-breadcrumb"><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>FAQ</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry" >

                                <header class="entry-header">
                                    <h1 itemprop="name" class="entry-title">Frequently Asked Questions</h1>
                                    <p class="entry-subtitle">This Agreement was last modified on 18th february 2018</p>
                                </header><!-- .entry-header -->

                                <div itemprop="mainContentOfPage" class="entry-content">
                             
                                

                                    <div id="accordion" role="tablist" aria-multiselectable="true">

  @foreach($faq as $faqs)
                                        <div class="vc_toggle panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne{{$faqs->id}}">
                                                <div class="vc_toggle_title">
                                                    <h4 class="panel-title">
                                                        <a data-toggle="collapse" style="color: #434343;" data-parent="#accordion" href="#collapseOne{{$faqs->id}}" aria-expanded="false" aria-controls="collapseOne{{$faqs->id}}">{{$faqs->en_question}}</a>
                                                    </h4>
                                                    <i class="vc_toggle_icon"></i>
                                                </div>
                                            </div>
                                            <div id="collapseOne{{$faqs->id}}" class="vc_toggle_content panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne{{$faqs->id}}">
                                                <p>{{$faqs->en_answer}}</p>
                                            </div>
                                        </div>
                                  
 @endforeach

                                    </div>
                                </div><!-- .entry-content -->
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->

@endsection