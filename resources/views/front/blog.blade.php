@extends('front.index')

@section('title')
    Home page
@endsection
@section('up')
    {{trans('front.home')}}
@endsection
@section('content')
            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

            	   	<nav class="woocommerce-breadcrumb">
            			<a href="home.html">Home</a>
            			<span class="delimiter"><i class="fa fa-angle-right"></i></span>Blog
            		</nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <nav id="blog-navigation" class="blog-navigation navbar yamm" aria-label="Blog Navigation">
                            	<div class="navbar-header">
                            		<button class="navbar-toggle collapsed" data-target="#nav-blog-horizontal-menu-collapse" data-toggle="collapse" type="button">
                            			<span class="sr-only">Toggle navigation</span>
                            			<span class="icon-bar"></span>
                            			<span class="icon-bar"></span>
                            			<span class="icon-bar"></span>
                            		</button>
                            	</div><!-- .navbar-header -->

                            	<div class="nav-bg-class">
                            		<div class="collapse navbar-collapse" id="nav-blog-horizontal-menu-collapse">
                            			<div class="nav-outer">
                            				<ul class="nav list-unstyled blog-nav-menu">
                            					<li class="menu-item animate-dropdown"><a title="Technology" href="product-category.html">Technology</a></li>
                            					<li class="menu-item animate-dropdown"><a title="Design" href="product-category.html">Design</a></li>
                            					<li class="menu-item animate-dropdown"><a title="News" href="product-category.html">News</a></li>
                            					<li class="menu-item animate-dropdown"><a title="Events" href="product-category.html">Events</a></li>
                            					<li class="menu-item animate-dropdown"><a title="Links &amp; Quotes" href="product-category.html">Links &#038; Quotes</a></li>
                            					<li class="menu-item animate-dropdown"><a title="Videos" href="product-category.html">Videos</a></li>
                            				</ul><!-- .blog-nav-menu -->
                            			</div><!-- .nav-outer -->
                            			<div class="clearfix"></div>
                            		</div><!-- /.navbar-collapse -->
                            	</div><!-- .nav-bg-class -->
                            </nav><!-- #blog-navigation -->
                            <article class=" post format-gallery hentry">

                            	<div class="media-attachment">
                            		<div class="media-attachment-gallery">
                            			<div id="owl-carousel-media" class="owl-carousel owl-inner-pagination owl-inner-nav owl-blog-post-gallery">
                            				<div class="item">
                            					<figure>
                            					 	<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-1.jpg" class="attachment-post-thumbnail" alt="">
                            					</figure>
                            				</div><!-- /.item -->
                            				<div class="item">
                            					<figure>
                            						<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-2.jpg" class="attachment-post-thumbnail" alt="">
                            					</figure>
                            				</div><!-- /.item -->
                            				<div class="item">
                            					<figure>
                            						<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-3.jpg" class="attachment-post-thumbnail" alt="">
                            					</figure>
                            				</div><!-- /.item -->
                            				<div class="item">
                            					<figure>
                            						<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-2.jpg" class="attachment-post-thumbnail" alt="">
                            					</figure>
                            				</div><!-- /.item -->
                            				<div class="item">
                            					<figure>
                            						<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-1.jpg" class="attachment-post-thumbnail" alt="">
                            					</figure>
                            				</div><!-- /.item -->
                            				<div class="item">
                            					<figure>
                            						<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-3.jpg" class="attachment-post-thumbnail" alt="">
                            					</figure>
                            				</div><!-- /.item -->
                            			</div>

                            		</div><!-- /.media-attachment-gallery -->

                            	</div>


                            	<div class="content-body">
                            		<header class="entry-header">
                            			<h1 class="entry-title" itemprop="name headline">
                            			<a href="blog-single.html" rel="bookmark">Robot Wars &#8211; Post with Gallery</a></h1>
                            			<div class="entry-meta">
                            				<span class="cat-links">
                            					<a href="#" rel="category tag">Design</a>,
                            				 	<a href="#" rel="category tag">Technology</a>
                            				</span>

                            				<span class="posted-on">
                            					<a href="blog-single.html" rel="bookmark">
                            					<time class="entry-date published" datetime="2016-03-04T07:34:20+00:00">March 4, 2016</time>
                            					<time class="updated" datetime="2016-03-04T18:46:11+00:00" itemprop="datePublished">March 4, 2016</time>
                            					</a>
                            				</span>
                            			</div>
                            		</header><!-- .entry-header -->

                            		<div class="entry-content">

                            			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>

                            		</div><!-- .post-excerpt -->

                            		<div class="post-readmore">
                            			<a href="blog-single.html" class="btn btn-primary">Read More</a>
                            		</div>
                            		<span class="comments-link">
                            			<a href="#">3</a>
                            		</span>
                            	</div>

                            </article><!-- #post-## -->



                            <article class="post format-audio hentry">
                            	<div class="media-attachment">
                            		<iframe width="870" height="165" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/229791977&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&visual=true"></iframe>
                            	</div><!-- .media-attachment-->

                            	<div class="content-body">
                            		<header class="entry-header">
                            			<h1 class="entry-title" itemprop="name headline">
                            			<a href="blog-single.html">Robot Wars &#8211; Now Closed &#8211; Post with Audio</a></h1>
                            			<div class="entry-meta">
                            				<span class="cat-links">
                            					<a href="#" rel="category tag">Design</a>,
                            					<a href="#" rel="category tag">News</a>,
                            					<a href="#" rel="category tag">Uncategorized</a>
                            				</span>


                            				<span class="posted-on">
                            					<a href="blog-single.html" rel="bookmark">
                            					<time class="entry-date published" datetime="2016-03-03T13:32:08+00:00">March 3, 2016</time>
                            					<time class="updated" datetime="2016-03-31T14:38:00+00:00" itemprop="datePublished">March 31, 2016</time></a>
                            				</span>
                            			</div>
                            		</header><!-- .entry-header -->

                            		<div class="entry-content">

                            			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>

                            		</div><!-- .post-excerpt -->

                            		<div class="post-readmore">
                            			<a href="blog-single.html" class="btn btn-primary">Read More</a>
                            		</div>
                            		<span class="comments-link">
                            			<a href="blog-single.html">Leave a comment</a>
                            		</span>
                            	</div><!-- .content-bod-->
                            </article><!-- #post-## -->



                            <article class="post format-video hentry">
                            	<div class="media-attachment">
                            		<div class="video-container">
                            			<div class="embed-responsive embed-responsive-16by9">
                            				<iframe src="https://player.vimeo.com/video/153747736" width="870" height="490" allowfullscreen></iframe>
                            			</div>

                            		</div>
                            	</div><!-- .media-attachment-->

                            	<div class="content-body">
                            		<header class="entry-header">
                            			<h1 class="entry-title" itemprop="name headline">
                            				<a href="blog-single.html">Robot Wars &#8211; Now Closed &#8211; Post with Video</a>
                            			</h1>
                            			<div class="entry-meta">
                            				<span class="cat-links">
                            					<a href="#" rel="category tag">Videos</a>
                            				</span>

                            				<span class="posted-on">
                            					<a href="blog-single.html" rel="bookmark">
                            						<time class="entry-date published" datetime="2016-03-03T13:28:24+00:00">March 3, 2016</time>
                            						<time class="updated" datetime="2016-03-31T14:32:27+00:00" itemprop="datePublished">March 31, 2016</time></a>
                            				</span>
                            			</div>
                            		</header><!-- .entry-header -->

                            		<div class="entry-content" itemprop="articleBody">

                            			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>

                            		</div><!-- .post-excerpt -->

                            		<div class="post-readmore">
                            			<a href="blog-single.html" class="btn btn-primary">Read More</a>
                            		</div>

                            		<span class="comments-link">
                            			<a href="blog-single.html">1</a>
                            		</span>
                            	</div><!-- .content-bod-->
                            </article><!-- #post-## -->



                            <article class="post format-standard hentry">

                            	<div class="content-body">
                            		<header class="entry-header">
                            			<h1 class="entry-title" itemprop="name headline">
                            				<a href="blog-single.html">Announcement &#8211; Post without Image</a>
                            			</h1>

                            			<div class="entry-meta">
                            				<span class="cat-links">
                            					<a href="#" rel="category tag">Events</a>,
                            					<a href="#" rel="category tag">News</a>
                            				</span>

                            				<span class="posted-on">
                            					<a href="blog-single.html" rel="bookmark">
                            					<time class="entry-date published" datetime="2016-03-02T13:21:49+00:00">March 2, 2016</time>
                            					<time class="updated" datetime="2016-03-04T18:46:11+00:00" itemprop="datePublished">March 4, 2016</time></a>
                            				</span>

                            			</div>
                            		</header><!-- .entry-header -->

                            		<div class="entry-content" itemprop="articleBody">

                            			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tincidunt, erat in malesuada aliquam, est erat faucibus purus, eget viverra nulla sem vitae neque. Quisque id sodales libero. In nec enim nisi, in ultricies quam. Sed lacinia feugiat velit, cursus molestie lectus.</p>

                            		</div><!-- .post-excerpt -->

                            		<div class="post-readmore">
                            			<a href="blog-single.html" class="btn btn-primary">Read More</a>
                            		</div>

                            		<span class="comments-link"><a href="blog-single.html">Leave a comment</a>
                            		</span>
                            	</div><!-- .content-bod-->

                            </article><!-- #post-## -->


                            <article class="post format-standard hentry">

                            	<div class="media-attachment">
                            		<a href="blog-single.html">
                            			<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-3.jpg" class="attachment-post-thumbnail" alt="">
                            		</a>
                            	</div><!-- .media-attachment-->

                            	<div class="content-body">
                            		<header class="entry-header">
                            			<h1 class="entry-title" itemprop="name headline">
                            				<a href="blog-single.html" rel="bookmark">Robot Wars &#8211; Now Closed</a>
                            			</h1>

                            			<div class="entry-meta">
                            				<span class="cat-links">
                            					<a href="#" rel="category tag">Design</a>,
                            					<a href="#" rel="category tag">Technology</a>
                            				</span>


                            				<span class="posted-on">
                            					<a href="blog-single.html" rel="bookmark">
                            						<time class="entry-date published" datetime="2016-03-01T07:40:25+00:00">March 1, 2016</time>
                            						<time class="updated" datetime="2016-03-04T18:46:11+00:00" itemprop="datePublished">March 4, 2016</time>
                            					</a>
                            				</span>
                            			</div>
                            		</header><!-- .entry-header -->

                            		<div class="entry-content" itemprop="articleBody">

                            			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took</p>

                            		</div><!-- .post-excerpt -->

                            		<div class="post-readmore">
                            			<a href="blog-single.html" class="btn btn-primary">Read More</a>
                            		</div>

                            		<span class="comments-link">
                            			<a href="blog-single.html">1</a>
                            		</span>
                            	</div><!-- .content-bod-->

                            </article><!-- #post-## -->


                            <article class="post format-standard hentry">

                            	<div class="media-attachment">
                            		<a href="blog-single.html">
                            			<img src="assets/images/blank.gif" data-echo="assets/images/blog/blog-2.jpg" class="attachment-post-thumbnail" alt="">
                            		</a>
                            	</div><!-- .media-attachment-->

                            	<div class="content-body">
                            		<header class="entry-header">
                            			<h1 class="entry-title" itemprop="name headline">
                            				<a href="blog-single.html" rel="bookmark">SpaceX Falcon explodes after Landing</a>
                            			</h1>

                            			<div class="entry-meta">
                            				<span class="cat-links">
                            					<a href="#" rel="category tag">Technology</a>
                            				</span>

                            				<span class="posted-on">
                            					<a href="blog-single.html" rel="bookmark">
                            						<time class="entry-date published" datetime="2016-03-01T07:32:04+00:00">March 1, 2016</time>
                            						<time class="updated" datetime="2016-03-04T18:46:11+00:00" itemprop="datePublished">March 4, 2016</time>
                            					</a>
                            				</span>

                            			</div>
                            		</header><!-- .entry-header -->

                            		<div class="entry-content" itemprop="articleBody">

                            			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took</p>

                            		</div><!-- .post-excerpt -->

                            		<div class="post-readmore">
                            			<a href="blog-single.html" class="btn btn-primary">Read More</a>
                            		</div>

                            		<span class="comments-link">
                            			<a href="blog-single.html">Leave a comment</a>
                            		</span>
                            	</div><!-- .content-bod-->

                            </article><!-- #post-## -->


                            <nav class="navigation pagination">
                                <h2 class="screen-reader-text">Posts navigation</h2>
                                <div class="nav-links">
                                    <ul class='page-numbers'>
                                        <li><span class='page-numbers current'>1</span></li>
                                        <li><a class='page-numbers' href='#'>2</a></li>
                                        <li><a class="next page-numbers" href="#">Next&nbsp;<span class="meta-nav">&rarr;</span></a></li>
                                    </ul>
                                </div>
                            </nav>

                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .container -->
            </div><!-- #content -->

  
@endsection