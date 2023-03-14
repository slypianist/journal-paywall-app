@extends('layouts.home')
@section('h-content')
{{-- Header --}}

<header>
    <!-- Mobile Menu Start -->
    <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
        <nav class="mobile-menu" id="mobile-menu">
            <div class="sidebar-nav">
                <ul class="nav side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                    <button class="btn mobile-menu-btn" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">All pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="/">Home <span class="fa arrow"></span></a>
                                <!-- <ul class="nav nav-third-level">
                                    <li><a href="home-style-one.html">Home style one</a> </li>
                                    <li><a href="home-style-two.html">Home style two</a></li>
                                    <li><a href="home-style-three.html">Home style three</a></li>
                                    <li><a href="home-style-four.html">Home style four</a></li>
                                    <li><a href="home-style-five.html">Home style five</a></li>
                                </ul> -->
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Categories <span class="fa arrow"></span></a>
                                <!-- <ul class="nav nav-third-level">
                                    <li><a href="category-style-one.html">Category style one</a> </li>
                                    <li><a href="category-style-two.html">Category style two</a></li>
                                    <li><a href="category-style-three.html">Category style three</a></li>
                                </ul> -->
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Archive <span class="fa arrow"></span></a>
                                <!-- <ul class="nav nav-third-level">
                                    <li><a href="archive-one.html">Archive style one</a> </li>
                                    <li><a href="archive-two.html">Archive style two</a></li>
                                </ul> -->
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">News <span class="fa arrow"></span></a>
                                <!-- <ul class="nav nav-third-level">
                                    <li><a href="details-style-one.html">News post one</a> </li>
                                    <li><a href="details-style-two.html">News post two</a></li>
                                    <li><a href="details-style-three.html">News post three</a></li>
                                </ul> -->
                                <!-- /.nav-third-level -->
                            </li>
                            <li>
                                <a href="#">Contact <span class="fa arrow"></span></a>
                                <!-- <ul class="nav nav-third-level">
                                    <li><a href="contact-style-one.html">Contact style one</a> </li>
                                    <li><a href="contact-style-two.html">Contact style two</a></li>
                                </ul> -->
                                <!-- /.nav-third-level -->
                            </li>
                            <li><a href="login%26registration.html">Login & Registration</a></li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li><a href="#">International</a></li>
                    <!-- <li><a href="#">Fashion</a></li>
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Food</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Lifestyle</a></li> -->
                    <li>
                        <a href="#">Contact<span class="fa arrow"></span></a>
                        <!-- <ul class="nav nav-second-level">
                            <li><a href="contact-style-one.html">Contact style one</a> </li>
                            <li><a href="contact-style-two.html">Contact style two</a></li>
                        </ul> -->
                    </li>
                    <!-- social icon -->
                    <li>
                        <div class="social">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>
                                <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                <li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="top_header_icon">
                <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                    </span>
                <span class="top_header_icon_wrap">
                        <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                    </span>

            </div>
            <div id="showLeft" class="nav-icon">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- Mobile Menu End -->
    <!-- top header -->
    <div class="top_header hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-3">
                    <div class="top_header_menu_wrap">
                        <ul class="top-header-menu">
                            <li><a href="login%26registration.html">REGISTER</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">LOGIN</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="login-inner">
                                            <input type="text" class="form-control" id="name_email" name="name_email" placeholder="username or emaile">
                                            <hr>
                                            <input type="password" class="form-control" id="pass" name="pass" placeholder="*******">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" value="">Remember me</label>
                                            <button type="button" class="btn btn-lr btn-active">LOGIN</button>
                                            <button type="button" class="btn btn-lr">REGISTR</button>
                                            <div class="foeget"><a href="#">Forget username/password?</a></div>
                                            <div class="social_icon">
                                                <div class="social_icon_box social_icon_box_1">
                                                    <div class="icon facebook-icon"></div>
                                                    <span class="social_info">Login with facebook</span>
                                                </div>
                                            </div>
                                            <div class="social_icon">
                                                <div class="social_icon_box social_icon_box_2">
                                                    <div class="icon twitter-icon"></div>
                                                    <span class="social_info">Login with twitter</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="contact-style-two.html">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <!--breaking news-->
                <div class="col-sm-8 col-md-7">
                    <div class="newsticker-inner">
                        <ul class="newsticker">
                            @foreach ($posts as $allPost )
                            <li><span class="color-1">{{$allPost->category->name}}</span><a href="{{route('post.list', [$allPost->slug])}}">{{$allPost->title}}</a></li>
                            @endforeach
                        </ul>
                        <div class="next-prev-inner">
                            <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                            <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-2">
                    <div class="top_header_icon">
                        <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </span>
                        <span class="top_header_icon_wrap">
                                <a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top_banner_wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-sm-4">
                    <div class="header-logo">
                        <!-- logo -->
                        <a href="/">
                            <img class="td-retina-data img-responsive" src="images/journal-africa-logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                    <div class="header-banner">
                        <a href="#"><img class="td-retina img-responsive" src="images/top-bannner.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navber -->
    <div class="container hidden-xs">
        <nav class="navbar">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/" class="category01">HOME</a></li>

                    <li class="dropdown">
                        <a href="#" class=" category03">BUSINESS & FINANCE</a>

                    </li>
                    <li><a href="category-style-two.html" class="category04">POLITICS & GOVERNMENT</a></li>
                    <li><a href="category-style-one.html" class="category05">ECONOMY</a></li>
                    <li><a href="#" class="category06">FOOD</a></li>
                    <li><a href="#" class="category07">OPINION</a></li>

                    <li><a href="#" class="others">LOGIN</a></li>
                    <li><a href="#" class="others">SUBSCRIBE</a></li>
                </ul>
            </div>
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <article class="content">
                <div class="post-thumb">
                    <img src="../storage/{{$post->image}}" alt="">
                    <div class="social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                            <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                            <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                            <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                        </ul>
                    </div>
                    <!-- /.social icon -->
                </div>
                <h1>{{$post->title}}</h1>
                <div class="date">
                    <ul>
                        <li>By <a title="" href="#"><span>{{$post->author->name}}</span></a> --</li>
                        <li><a title="" href="#">{{date( 'jS-M-Y', strtotime($post->created_at))}}</a></li>

                    </ul>
                </div>
                <div class="blur-text">
                    <p>{!! $post->body !!}</p>

                </div>

                <div id="paywall-wrapper">
                    <h2>This story is free to read.</h2>
                    <p>
                    To continue reading, <strong>register for free or sign in.</strong></p>
                  <a class="btn btn-danger" href="#">Register</a>
                    <a class="btn btn-danger paywall-btn" href="#">Subscribe</a>
                 </div>
               
                <!-- tags -->
                {{-- <div class="tags">
                    <ul>
                        @foreach ($post->tags as $tag )

                        @endforeach
                        <li> <a href="#">Education</a></li>
                        <li> <a href="#">Health &amp; Fitness</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Collage</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Music</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Lifestyle</a></li>
                    </ul>
                </div> --}}
                <!-- Related news area
                    ============================================ -->
                <div class="related-news-inner">
                    <h3 class="category-headding ">RELATED NEWS</h3>
                    <div class="headding-border"></div>
                    <div class="row">
                        <div id="content-slide-5" class="owl-carousel">
                            <!-- item-1 -->
                            <div class="item">
                                <div class="row rn_block">
                                    @foreach ($related as $relatedArticles )
                                    @foreach ($relatedArticles->posts as $article)

                                    <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="../images/articale.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_five">B</a>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="post-title-author-details">
                                            <h4><a href="#">{{$article->title}}</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> {{$article->created_at}}
                                                </div>
                                                {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div> --}}
                                            </div>
                                        </div>




                                    </div>
                                    @endforeach

                                    @endforeach



                                </div>
                            </div>
                            <!-- item-2 -->
                            <div class="item">
                                <div class="row rn_block">
                                    <div class="col-xs-12 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="../images/articale04.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_eight">H</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="0.8s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="../images/articale05.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_four">L</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-md-4 col-sm-4 padd">
                                        <div class="post-wrapper wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">
                                            <!-- image -->
                                            <div class="post-thumb">
                                                <a href="#">
                                                    <img class="img-responsive" src="../images/articale06.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="post-info meta-info-rn">
                                                <div class="slide">
                                                    <a target="_blank" href="#" class="post-badge btn_two">T</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="post-title-author-details">
                                            <h4><a href="#">World Econmy Changing and Affecting in 3rd ...</a></h4>
                                            <div class="post-editor-date">
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i> Oct 6, 2016
                                                </div>
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form
                    ============================================ -->

                <!-- comment box
                    ============================================ -->

            </article>
        </div>
        <div class="col-sm-4 left-padding">
            <aside class="sidebar">
                <div class="input-group search-area">
                    <!-- search area -->
                    <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                </div>
                <!-- /.search area -->
                <div class="banner-add">
                    <!-- add -->
                    <span class="add-title">- Advertisement -</span>
                    <a href="#"><img src="../images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                </div>
                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="#">POPULAR</a></li>
                        <li><a href="#">MOST VIEWED</a></li>
                    </ul>
                    <hr>
                    <!-- tabs -->
                    <div class="tab_content">
                        <div class="tab-item-inner">
                            <div class="box-item wow fadeIn" data-wow-duration="1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_01.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-1">
                                            <a href="#">SPORTS</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_02.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                            <a href="#">TECHNOLOGY </a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_03.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                            <a href="#">HEALTH</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.3s">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                            <a href="#">FASHION</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                        <div class="tab-item-inner">
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_01.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-5">
                                            <a href="#">BUSINESS</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">It is a long established fact that a reader will</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_02.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-2">
                                            <a href="#">TECHNOLOGY </a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">The generated Lorem Ipsum is therefore</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_03.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-3">
                                            <a href="#">HEALTH</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">The standard chunk of Lorem Ipsum used since</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box-item">
                                <div class="img-thumb">
                                    <a href="#" rel="bookmark"><img class="entry-thumb" src="../images/popular_news_04.jpg" alt="" height="80" width="90"></a>
                                </div>
                                <div class="item-details">
                                    <h6 class="sub-category-title bg-color-4">
                                            <a href="#">FASHION</a>
                                        </h6>
                                    <h3 class="td-module-title"><a href="#">Lorem Ipum therefore always free from</a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>
                                        <!-- post comment -->
                                        <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- / tab item -->
                    </div>
                    <!-- / tab_content -->
                </div>
                <!-- / tab -->
                <!-- comments -->
                <div class="latest-comments-inner">
                    <h3 class="category-headding ">LATEST COMMENT</h3>
                    <div class="headding-border"></div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="../images/comment-01.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                    <!-- latest comment post -->
                    <div class="post-style2 latest-com">
                        <img src="../images/comment-02.jpg" alt="">
                        <div class="latest-com-detail">
                            <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                            <span>Nec sagittis sem nibh dictionary...</span>
                            <p>Proin gravida nibh vel velit auctor aliquet. </p>
                        </div>
                    </div>
                </div>
                <!-- slider widget -->

            </aside>
        </div>
    </div>
</div>

@endsection
