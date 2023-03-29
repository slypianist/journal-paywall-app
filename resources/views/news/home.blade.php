 @extends('layouts.home')
 @section('h-content')

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
                    <li><a href="/">HOME</a></li>

                    <li><a href="#">BUSINESS & FINANCE</a></li>
                    <li><a href="#">POLITICS & GOVERNMENT</a></li>
                    <li><a href="#">OPINION</a></li>
                    <li><a href="#">FOOD</a></li>
                    <li><a href="#">ECONOMY</a></li>

                    <li>
                        <a href="#">CONTACT<span class="fa arrow"></span></a>

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
                            <li><a href="/user/login">REGISTER</a></li>
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
                            @foreach ($posts as $post )
                            <li><span class="color-1">{{$post->category->name}}</span><a href="test/?category={{$post->category->slug}}">{{$post->title}}</a></li>
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

                    <li><a href="{{route('reader.login')}}" class="others">LOGIN</a></li>
                    <li><a href="#" class="others">SUBSCRIBE</a></li>
                </ul>
            </div>
            <!-- navbar-collapse -->
        </nav>
    </div>
</header>

 <!-- header news Area
        ============================================ -->
        <section class="headding-news">
            <div class="container">
                <div class="row row-margin">
                    <div class="col-sm-12 col-padding">
                        <div class="post-wrapper post-grid-6 wow fadeIn" data-wow-duration="2s">
                            <div class="post-thumb img-zoom-in">
                                <a href="#">
                                    <img class="entry-thumb-top" src="images/slider/slide-11.jpg" alt="">
                                </a>
                            </div>
                            <div class="post-info">
                                <span class="color-3">SPORTS </span>
                                <h3 class="post-title post-title-size"><a href="#" rel="bookmark"> The generated Lorem Ipsum is therefore always free from . </a></h3>
                                <div class="post-editor-date">
                                    <!-- post date -->
                                    <div class="post-date">
                                        <i class="pe-7s-clock"></i> Oct 6, 2016
                                    </div>
                                    <!-- post comment -->
                                    <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div>
                                    <!-- read more -->
                                    <a class="readmore pull-right" href="#"><i class="pe-7s-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row row-margin">
                    <div id="content-slide-4" class="owl-carousel">
                        @foreach ($posts as $post)

                        <div class="item">
                            <div class="post-wrapper post-grid-8 wow fadeIn" data-wow-duration="2s">
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img class="entry-thumb-bottom" src="storage/{{$post->image}}" alt="">
                                    </a>
                                </div>
                                <div class="post-info">
                                    <span class="color-4">{{$post->category->name}}</span>
                                    <h3 class="post-title post-title-size"><a href="{{route('post.list', [$post->slug])}}" rel="bookmark">{{$post->excerpt}} </a></h3>
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{$post->created_at}}
                                        </div>
                                        <!-- post comment -->
                                        {{-- <div class="post-author-comment"><i class="pe-7s-comment"></i> 13 </div> --}}
                                        <!-- read more -->
                                        <a class="readmore pull-right" href="{{route('post.list', [$post->slug])}}"><i class="pe-7s-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!-- Latest news Area
            ============================================ -->
        <section class="article-post-inner">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="articale-list">
                            <h3 class="category-headding ">Politics & Government</h3>
                            <div class="headding-border"></div>
                            @foreach ($politicsPost as $category2)


                            <!--Post list-->
                            <div class="post-style2 wow fadeIn" data-wow-duration="1s">
                                <a href="#"><img class="img-post" src="storage/{{$category2->image}}" alt=""></a>
                                <div class="post-style2-detail">
                                    <h3><a href="{{route('post.list', [$category2->slug])}}" title="">{{$category2->title}}</a></h3>
                                    <div class="date">
                                        <ul>
                                            {{-- <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li> --}}
                                            <li>By <a title="" href="#"><span>{{$category2->writer}}</span></a> --</li>
                                            <li><a title="" href="#">{{$category2->created_at}}</a> --</li>
                                            {{-- <li><a title="" href="#"><span>275 Comments</span></a></li> --}}
                                        </ul>
                                    </div>
                                    <p>{{$category2->excerpt}}</p>
                                    <button type="button" class="btn btn-style">Read more</button>
                                </div>
                            </div>
                            <!--Post list-->
                            @endforeach

                        </div>
                    </div>
                    <div class="col-sm-4 left-padding">
                        <div class="input-group search-area">
                            <!-- search area -->
                            <input type="text" class="form-control" placeholder="Search articles here ..." name="q">
                            <div class="input-group-btn">
                                <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <!-- /.search area -->
                        <!-- online vote -->

                        <!-- /.online vote -->
                        <!-- slider widget -->

                        <!-- twitter feed -->
                        <h3 class="category-headding ">AFRICA IN BRIEF</h3>
                        <div class="headding-border"></div>
                        <a href="test/?category=africa-in-brief" target="_blank">

                            <div class="feed-inner">

                                @foreach ($briefs as $brief)
                                <p>{{$brief->excerpt}}</p>

                                <hr>
                                @endforeach



                            </div>
                        </a>

                        <!-- /.twitter feed -->
                        <!-- comments -->
                        <div class="latest-comments-inner">
                            <h3 class="category-headding ">breaking news</h3>
                            <div class="headding-border"></div>
                            <!-- latest comment post -->
                            <div class="post-style2 latest-com">
                                <img src="images/comment-01.jpg" alt="">
                                <div class="latest-com-detail">
                                    <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                                    <span>Nec sagittis sem nibh dictionary...</span>
                                    <p>Proin gravida nibh vel velit auctor aliquet. </p>
                                </div>
                            </div>
                            <!-- latest comment post -->
                            <div class="post-style2 latest-com">
                                <img src="images/comment-02.jpg" alt="">
                                <div class="latest-com-detail">
                                    <h5><a href="#" title="">It uses a dictionary of over</a></h5>
                                    <span>Nec sagittis sem nibh dictionary...</span>
                                    <p>Proin gravida nibh vel velit auctor aliquet. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <!-- left content inner -->
                    <section class="recent_news_inner">
                        <h3 class="category-headding ">BUSINESS & FINANCE</h3>
                        <div class="headding-border"></div>
                        <div class="row">
                            <div id="content-slide" class="owl-carousel">
                                <!-- item-1 -->
                                @foreach ($business as $category3 )

                                <div class="item home2-post">
                                    <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                        <!-- image -->
                                        <div class="post-thumb">
                                            <a href="#">
                                                <img class="img-responsive" src="storage/{{$category3->image}}" alt="">
                                            </a>
                                        </div>
                                        <div class="post-info meta-info-rn">
                                            <div class="slide">
                                                <a target="_blank" href="{{route('post.list', [$category3->slug])}}" class="post-badge btn_six">B</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h3><a href="#">{{$category3->title}}</a></h3>
                                    <div class="post-title-author-details">
                                        <div class="date">
                                            <ul>
                                                <li>By <a title="" href=""><span>{{$category3->writer}}</span></a> --</li>
                                                <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                {{-- <li><a title="" href="#"><span>275 Comments</span></a></li> --}}
                                            </ul>
                                        </div>
                                        <p>{{$category3->excerpt}}<a href="{{route('post.list', [$category3->slug])}}">Read more...</a></p>
                                    </div>
                                </div>

                                @endforeach

                                <!-- item-2 -->

                                <!-- item-3 -->

                                <!-- item-4 -->

                                <!-- item-5 -->

                                <!-- item-6 -->

                            </div>
                        </div>
                    </section>
                    <!-- Politics Area
                        ============================================ -->
                            <!-- technology area
            ============================================ -->
        <section class="technology_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="category-headding ">Energy & Environment</h3>
                        <div class="headding-border"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="home2-post">
                            <div class="post-wrapper">
                                <!-- post image -->
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img src="storage/{{$energy->image}}" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <!-- post title -->
                                <h3><a href="#">{{$energy->title}}</a></h3>
                            </div>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>{{$energy->writer}}</span></a> --</li>
                                        <li><a title="" href="#">{{date('F-m-Y',strtotime($energy->created_at))}}</a> --</li>
                                    </ul>
                                </div>
                                <p>{{$energy->excerpt}} <a href="{{route('post.list', [$energy->slug])}}">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7">
                        <div class="row rn_block">

                            @foreach ($energyPosts as $energyPost)
                            <div class="col-xs-6 col-md-4 col-sm-4 post-padding">



                                <div class="home2-post">
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="storage/{{$energyPost->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                    <div class="post-title-author-details">
                                        <!-- post image -->
                                        <h5><a href="#">{{$energyPost->title}}</a></h5>
                                        <div class="date">
                                            <ul>
                                                <li><a title="" href="#"><span>{{$energyPost->writer}}</span></a> --</li>
                                                <li><a title="" href="#">Oct 6, 2016</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            @endforeach

                            <div class="ads">
                                <a href="#"><img src="images/top-bannner2.jpg" class="img-responsive center-block" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                    <!-- /.Politics -->

                </div>
                <!-- /.left content inner -->
                <div class="col-md-4 col-sm-4 left-padding">
                    <!-- right content wrapper -->
                    <!-- social icon -->
                    <h3 class="category-headding ">SOCIAL PIXEL</h3>
                    <div class="headding-border"></div>
                    <div class="social">
                        <ul>
                            <li><a href="#" class="facebook"><i class="fa  fa-facebook"></i><span>3987</span> </a></li>
                            <li><a href="#" class="twitter"><i class="fa  fa-twitter"></i><span>3987</span></a></li>
                            <li><a href="#" class="google"><i class="fa  fa-google-plus"></i><span>3987</span></a></li>
                            <li><a href="#" class="flickr"><i class="fa fa-flickr"></i><span>3987</span> </a></li>
                        </ul>
                    </div>
                    <!-- /.social icon -->
                    <div class="banner-add">
                        <!-- add -->
                        <span class="add-title">- Advertisement -</span>
                        <a href="#"><img src="images/ad-banner.jpg" class="img-responsive center-block" alt=""></a>
                    </div>

                    <!-- / tab -->
                </div>
                <!-- side content end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->

        <!-- technology area
            ============================================ -->
        <section class="technology_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="category-headding ">Economy</h3>
                        <div class="headding-border"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 col-md-5">
                        <div class="home2-post">
                            <div class="post-wrapper">
                                <!-- post image -->
                                <div class="post-thumb img-zoom-in">
                                    <a href="#">
                                        <img src="storage/{{$economy->image}}" class="img-responsive" alt="">
                                    </a>
                                </div>
                                <!-- post title -->
                                <h3><a href="#">{{$economy->title}}</a></h3>
                            </div>
                            <div class="post-title-author-details">
                                <div class="date">
                                    <ul>
                                        <li>By <a title="" href="#"><span>{{$economy->writer}}</span></a> --</li>
                                        <li><a title="" href="#">{{date('f-m-Y', strtotime($economy->created_at))}}</a> --</li>
                                        <li><a title="" href="#"><span>275 Comments</span></a></li>
                                    </ul>
                                </div>
                                <p>{{$economy->excerpt}} <a href="{{route('post.list', [$economy->slug])}}">Read more...</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-7">
                        <div class="row rn_block">

                            @foreach ($ecoPosts as $ecoPost)
                                  <div class="col-xs-6 col-md-4 col-sm-4 post-padding">
                                <div class="home2-post">
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="{{route('post.list', [$ecoPost->slug])}}">
                                            <img src="storage/{{$ecoPost->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                    <div class="post-title-author-details">
                                        <!-- post image -->
                                        <h5><a href="#">{{$ecoPost->title}}</a></h5>
                                        <div class="date">
                                            <ul>
                                                <li><a title="" href="#"><span>{{$ecoPost->writer}}</span></a> --</li>
                                                <li><a title="" href="#">{{date('f-m-Y',strtotime($ecoPost->created_at))}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                            <div class="col-sm-12">
                                <div class="banner">
                                    <img src="images/top-bannner2.jpg" class="img-responsive center-block" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- weekly section area
            ============================================ -->
            <section class="all-category-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <!-- sports -->
                            <div class="sports-inner">
                                <h3 class="category-headding ">Life & Culture</h3>
                                <div class="headding-border bg-color-1"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">{{$life->title}}</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="storage/{{$life->image}}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{date('F-m-Y',strtotime($ecoPost->created_at))}}
                                        </div>
                                        <!-- post comment -->

                                    </div>
                                    <p>{{$life->excerpt}} <a href="#">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.sports -->
                        @empty(!$social)
                        <div class="col-md-4 col-sm-4">
                            <!-- fashion -->
                            <div class="fashion-inner">
                                <h3 class="category-headding ">Social issues</h3>
                                <div class="headding-border bg-color-4"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="{{route('post.list', [$social->slug])}}">{{$social->title}}</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="storage/{{$social->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> Oct 6, 2016
                                        </div>


                                    </div>
                                    <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true <a href="#">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                        @endempty


                        <!-- /.fashion -->
                        <div class="col-md-4 col-sm-4">
                            <!-- travel -->
                            <div class="travel-inner">
                                <h3 class="category-headding ">Economy</h3>
                                <div class="headding-border bg-color-3"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">{{$economy->title}}</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="{{route('post.list', [$economy->slug])}}">
                                            <img src="storage/{{$economy->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i>{{date('F-m-Y',strtotime($economy->created_at))}}
                                        </div>
                                        <!-- post comment -->

                                    </div>
                                    <p>{{$economy->excerpt}} <a href="#">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.travel -->
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <!-- food -->
                            <div class="food-inner">
                                <h3 class="category-headding ">Technology</h3>
                                <div class="headding-border bg-color-4"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">{{$tech->title}}</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="storage/{{$tech->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{date('F- m - Y',strtotime($tech->created_at))}}
                                        </div>
                                        <!-- post comment -->
                                    </div>
                                    <p>{{$tech->excerpt}} <a href="{{route('post.list', [$tech->slug])}}">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.food -->

                        @if ($africaID==NULL)

                        @else
                        <div class="col-md-4 col-sm-4">
                            <!-- politics -->
                            <div class="politics-inner">
                                <h3 class="category-headding ">In-depth Africa</h3>
                                <div class="headding-border bg-color-5"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="#">{{$africaID->title}}</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="">
                                            <img src="stroage/{{$africaID->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{date('F - m - Y',strtotime($africaID->created_at))}}
                                        </div>
                                        <!-- post comment -->

                                    </div>
                                    <p>{{$africaID->excerpt}}<a href="{{route('post.list', [$africaID->slug])}}">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                        @endif

                        <!-- /.politics -->
                        <div class="col-md-4 col-sm-4">
                            <!-- health -->
                            <div class="health-inner">
                                <h3 class="category-headding ">Opinion</h3>
                                <div class="headding-border bg-color-3"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="{{route('post.list', [$opinion->slug])}}">{{$opinion->title}}</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="storage/{{$opinion->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{date('f-m-Y',strtotime($ecoPost->created_at))}}
                                        </div>
                                        <!-- post comment -->

                                    </div>
                                    <p>{{$opinion->excerpt}} <a href="{{route('post.list', [$opinion->slug])}}">{{$opinion->title}}">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.health -->

                        <div class="col-md-4 col-sm-4">
                            <!-- health -->
                            <div class="health-inner">
                                <h3 class="category-headding ">Gender & Human Rights</h3>
                                <div class="headding-border bg-color-3"></div>
                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                    <!-- post title -->
                                    <h3><a href="{{route('post.list', [$opinion->slug])}}">{{$opinion->title}}</a></h3>
                                    <!-- post image -->
                                    <div class="post-thumb">
                                        <a href="#">
                                            <img src="storage/{{$opinion->image}}" class="img-responsive" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-title-author-details">
                                    <div class="post-editor-date">
                                        <!-- post date -->
                                        <div class="post-date">
                                            <i class="pe-7s-clock"></i> {{date('f-m-Y',strtotime($ecoPost->created_at))}}
                                        </div>
                                        <!-- post comment -->

                                    </div>
                                    <p>{{$opinion->excerpt}} <a href="{{route('post.list', [$opinion->slug])}}">{{$opinion->title}}">Read more...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- pagination
            ============================================ -->
       {{--  <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="pagination">
                        <li>
                            <a href="#" class="prev">
                                <i class="pe-7s-angle-left"></i>
                            </a>
                        </li>
                        <li> <a href="#">1</a></li>
                        <li> <a href="#" class="active">2</a></li>
                        <li> <a href="#">3</a></li>
                        <li> <a href="#">4</a></li>
                        <li> ... </li>
                        <li> <a href="#">15</a></li>
                        <li>
                            <a href="#" class="next"> <i class="pe-7s-angle-right"></i></a>
                        </li>
                    </ul>
                </div>--}}

            </div>
        </div>

            <!-- Video News Area
            ============================================ -->
            <section class="video-post-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="category-headding ">PODCAST</h3>
                            <div class="headding-border"></div>
                            <div class="row">
                                <div id="video-slide" class="owl-carousel">
                                    <div class="item">
                                        <div class="col-sm-4">
                                            <div class="post-style1">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- post image -->
                                                    <a href="#" class="video-img-icon">
                                                        <i class="fa fa-play"></i>
                                                        <img src="images/video-02.jpg" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of.</a></h3>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="post-style1">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <!-- post image -->
                                                    <a href="#" class="video-img-icon">
                                                        <i class="fa fa-play"></i>
                                                        <img src="images/video-03.jpg" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of.</a></h3>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li>
                                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="post-style1">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                    <!-- post image -->
                                                    <a href="#" class="video-img-icon">
                                                        <i class="fa fa-play"></i>
                                                        <img src="images/video-04.jpg" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of.</a></h3>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4">
                                            <div class="post-style1">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s">
                                                    <!-- post image -->
                                                    <a href="#" class="video-img-icon">
                                                        <i class="fa fa-play"></i>
                                                        <img src="images/video-02.jpg" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of.</a></h3>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="post-style1">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <!-- post image -->
                                                    <a href="#" class="video-img-icon">
                                                        <i class="fa fa-play"></i>
                                                        <img src="images/video-03.jpg" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of.</a></h3>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li><img src="images/comment-01.jpg" class="img-responsive" alt=""></li>
                                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="post-style1">
                                                <div class="post-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                                    <!-- post image -->
                                                    <a href="#" class="video-img-icon">
                                                        <i class="fa fa-play"></i>
                                                        <img src="images/video-04.jpg" alt="" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!-- post title -->
                                                <h3><a href="#">There are many variations of passages of.</a></h3>
                                                <div class="post-title-author-details">
                                                    <div class="date">
                                                        <ul>
                                                            <li><img src="images/comment-02.jpg" class="img-responsive" alt=""></li>
                                                            <li>By <a title="" href="#"><span>Naeem Khan</span></a> --</li>
                                                            <li><a title="" href="#">Oct 6, 2016</a> --</li>
                                                            <li><a title="" href="#"><span>275 Comments</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- footer Area
            ============================================ -->
@endsection
