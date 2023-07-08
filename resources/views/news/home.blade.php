 @extends('layouts.home')
 @section('h-content')

 <section class="main">
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-wrap">
                <div class="flex-item">
                    <ul class="links mt-2">
                        <li><a href="#">Register</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="flex-item mt-2">
                    <div id="carouselExampleControls" class="topbarCarousel carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active aditems">
                                <div class="heighgted">
                                    <a href="category/?category={{$randomPost->category->slug}}" class="newsDetail">
                                        <p class=""><b class="bolded"></b> <span>{{$randomPost->title}}</span></p>
                                    </a>
                                </div>
                              </div>
                            @foreach ($posts as $post)
                          <div class="carousel-item aditems">
                            <div class="heighgted">
                                <a href="category/?category={{$post->category->slug}}" class="newsDetail">
                                    <p class=""><b class="bolded">{{$post->category->name}}: </b> <span>{{$post->title}}</span></p>
                                </a>
                            </div>
                          </div>
                          @endforeach
                        </div>

                        </div>


                      <!-- <div>
                        <span>Africa In Brief:</span><marquee class="css1">Lorem ipsum dolor sit amet cons</marquee>
                      </div> -->
                </div>

                <div class="flex-item">
                    <ul class="icons mt-2">
                        <li><i class="fa-brands fa-twitter"></i></li>
                        <li><i class="fa-brands fa-facebook-f"></i></li>
                        <li><p id="dated"></p></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="logo-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="logo">
                        <a href="">
                            <img src="images/journal-africa-logo.png" alt="journal-africa-logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-wrap">
                        <img class="img-style" src="images/adsimages.jpg" alt="">
                        <div class="centered"><p>Place your ADS here</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navigation mt-3">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div></div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Business & finance</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">politics & government</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Economy</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">food</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">opinion</a>
                      </li>
                    </ul>
                    <div class="d-flex">
                        <button class="btn btn-nav">Login</button>
                      <button class="btn btn-nav">Subscribe</button>
                    </div>
                  </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="banner-wrap">
        <div class="">
            <div class="newsimg-wrap">
                <img src="storage/{{$randomPost->image}}" class="banner" alt="">
                <div class="bottom-left">
                    <h2>{{$randomPost->category->name}}</h2>
                    <p>{{$randomPost->excerpt}}</p>
                    <p><i class="fa-thin fa-clock"></i> {{$randomPost->created_at}}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="news-carousel-wrap">
        <div class="">
            <div class="row mx-auto my-auto justify-content-center">
                <div class="col">
                    <div class="row">
                        <!-- <div class="col-1 d-flex align-items-center justify-content-center">
                            <a role="button" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <div class="carousel-nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
                                    </svg>
                                </div>
                            </a>
                        </div> -->
                        <div class="col-12">
                            <div id="recipeCarousel" class="carousel customcarousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item customed active">
                                        <div class="col-md-3">
                                            <a href="">
                                                <div class="card">
                                                    <div class="card-img">
                                                        <img src="storage/{{$randomPost->image}}" class="img-fluid news-img">
                                                        <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                            <h5 class="carouselHeadings">{{$randomPost->category->name}}</h5>
                                                            <p class="mb-3 textOwl">
                                                                {{$randomPost->excerpt}}
                                                            </p>
                                                            <div class="dateflex">
                                                                <p class="dated">{{$randomPost->created_at}}</p>

                                                                <p class="iconwrap"><i class="fa-solid fa-greater-than"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @foreach ($posts as $post)
                                    <div class="carousel-item customed">
                                        <div class="col-md-3">
                                            <a href="{{route('post.list', [$post->slug])}}">
                                                <div class="card">
                                                    <div class="card-img">
                                                        <img src="storage/{{$post->image}}" class="img-fluid news-img">
                                                        <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                            <h5 class="carouselHeadings">{{$post->category->name}}</h5>
                                                            <p class="mb-3 textOwl">
                                                                {{$post->excerpt}}
                                                            </p>
                                                            <div class="dateflex">
                                                                <p class="dated">14-05-2021</p>

                                                                <p class="iconwrap"><i class="fa-solid fa-greater-than"></i></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-1 d-flex align-items-center justify-content-center">
                            <a role="button" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <div class="carousel-nav-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
                                    </svg>
                                </div>
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="categories mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-data-wrap mt-2">
                        <h5 class="category">Politics & Government</h5>
                        <ul class="news-list">

                            @foreach ($politicsPost as $politics )

                            <li>
                                <div class="wrapped">
                                    <div class="flexed-item">
                                        <img src="storage/{{$politics->image}}" alt="" class="category-img">
                                    </div>
                                    <div class="flexed-item ml-5 spacing">
                                        <a href="{{route('post.list', [$politics->slug])}}"><h5 class="titled">{{$politics->title}}</h5></a>
                                        <small>{{$politics->created_at}}</small>
                                        <p class="news-detail">{{$politics->excerpt}}... <a href="{{route('post.list', [$politics->slug])}}" class="read-more-btn"><i>Read More</i></a></p>

                                    </div>
                                </div>
                            </li>

                            @endforeach


                        </ul>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="wrap">
                        <div class="search">
                           <input type="text" class="searchTerm" placeholder="Search articles here">
                           <button type="submit" class="searchButton">
                             <i class="fa fa-search"></i>
                          </button>
                        </div>
                        <h5 class="briefed mt-4" >AFRICA IN BRIEF</h5>
                        <div class="briefdeatil">
                            <ul class="brief-list">
                                @foreach ($briefs as $brief)
                                <li>
                                    <p class="texted">
                                        {{$brief->excerpt}} <br>
                                        <a href="{{route('post.list', [$brief->slug])}}" class="ctned">Continue reading</a>
                                    </p>
                                </li>
                                <hr class="hred">
                                @endforeach

                            </ul>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="adbanner">
            <img src="https://source.unsplash.com/random/?entertainment" alt="adverts image">
            <p class="adsInfo">Place your ADS here</p>
        </div>
    </div>

    <div class="news-cat mt-5">
        <div class="container">
            <h5 class="headings">Business & Finance</h5>
            <div class="row">
                @foreach ($business as $biz)
                <div class="col-md-4">
                    <div>
                        <figure>
                            <img src="storage/{{$biz->image}}" alt="image" class="newsimage">
                            <figcaption class="mt-3">
                                <a href="{{route('post.list', [$biz->slug])}}">
                                    <h5 class="headers">{{$biz->title}}</h5>
                                </a>
                                <p class="postInfor">By <b class="postby">{{$biz->writer}}</b> 13/02/2021</p>
                                <p>
                                    {{$biz->excerpt}}...
                                    <a href="" class="ctned"><i>Read More</i></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                @endforeach


            </div>
        </div>
    </div>

    <div class="categories mt-5">
        <div class="container">
            <h5 class="headerss">Economy</h5>
            <div class="row">
                <div class="col-md-5 mt-3 ml-2">
                    <div>
                        <a href="">
                            <figure>
                                <img src="storage/{{$economy->image}}" alt="newsphoto" class="photostyle">
                                <figcaption>
                                    <a href={{route('post.list', [$economy->slug])}}">
                                        <h5 class="newsheaders">{{$economy->title}}</h5>
                                    </a>
                                    <p class="postInfor">By <b class="postby">{{$economy->writer}} </b> {{date('F-d-Y', strtotime($economy->created_at))}}</p>
                                    <p>
                                        {{$economy->excerpt}}...<a href="" class="mored"><i>Read More</i></a>
                                    </p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 mt-3">
                    <div class="row morenews">
                        @foreach ($ecoPosts as $eco)
                        <div class="col-md-4">
                            <figure>
                                <a href="" class="wrappedMorenews">
                                    <img src="storage/{{$eco->image}}" alt="newsphoto" class="newslists">
                                    <figcaption>
                                        <h5 class="morenewsheadings">{{$eco->title}}</h5>
                                        <p class="newsbox">
                                           {{$eco->excerpt}}
                                        </p>
                                        <p class="postInformation">By <b class="postbyy">{{$eco->writer}}  </b> <br> {{date('F-d-Y', strtotime($economy->created_at))}}</p>
                                    </figcaption>
                                </a>
                            </figure>
                        </div>

                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="othernews mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="borderr">Life & Culture</h5>
                    <div>
                        <a href="" class="tiledanchor">
                            <h5 class="tiltedHeading">Cum et vero id at est omnis<h5>
                        </a>
                        <figure>
                            <img src="https://source.unsplash.com/random/?grass" alt="newspfoto" class="imgstyledd" style="width:100%">
                            <figcaption>
                                <small class="smalled"><i class="fa-regular fa-clock-nine"></i>23-03-2021</small>
                                <p class="styleinfo">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sit volupta... <a href="" class="mored"><i>Read More</i></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?egypt" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?education" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?idea" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="borderr">Social Issues</h5>
                    <div>
                        <a href="" class="tiledanchor">
                            <h5 class="tiltedHeading">Complete account of the system2<h5>
                        </a>
                        <figure>
                            <img src="https://source.unsplash.com/random/?religion" alt="newspfoto" style="width:100%" class="imgstyledd">
                            <figcaption>
                                <small class="smalled"><i class="fa-regular fa-clock-nine"></i>23-03-2021</small>
                                <p class="styleinfo">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sit volupta... <a href="" class="mored"><i>Read More</i></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?light" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?sport" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?event" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="borderr">Economy</h5>
                    <div>
                        <a href="" class="tiledanchor">
                            <h5 class="tiltedHeading">Lorem Ipsum is that it has a more<h5>
                        </a>
                        <figure>
                            <img src="https://source.unsplash.com/random/?art" alt="newspfoto" style="width:100%" class="imgstyledd">
                            <figcaption>
                                <small class="smalled"><i class="fa-regular fa-clock-nine"></i>23-03-2021</small>
                                <p class="styleinfo">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis sit volupta... <a href="" class="mored"><i>Read More</i></a>
                                </p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?business" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?strategy" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="journalafrical_thumblink">
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="https://source.unsplash.com/random/?school" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="../SingleNews/index.html" class="journalafricathumbs">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, dolores officiis tempora.
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="journalafricafooterpodcast mt-5">
        <h2 class="journalafriclpodTitle">Podcast</h2>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div>
                        <figure class="relatived">
                            <img src="https://source.unsplash.com/random/?information" alt="image" class="newsimage_footer">
                            <i class="fa-sharp fa-solid fa-play played"></i>
                            <figcaption class="mt-3">
                                <a href="#">
                                    <h5 class="headers">Credible Elections</h5>
                                </a>
                                <p class="postInfor">By <b class="postby">super admin</b> Oct 6, 2016</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4">
                    <figure class="relatived">
                        <img src="https://source.unsplash.com/random/?education" alt="image" class="newsimage_footer">
                        <i class="fa-sharp fa-solid fa-play played"></i>
                        <figcaption class="mt-3">
                            <a href="#">
                                <h5 class="headers">Podcast Title</h5>
                            </a>
                            <p class="postInfor">By <b class="postby">super admin</b> Sept 12, 2016</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-4">
                    <figure class="relatived">
                        <img src="https://source.unsplash.com/random/?event" alt="image" class="newsimage_footer">
                        <i class="fa-sharp fa-solid fa-play played"></i>
                        <figcaption class="mt-3">
                            <a href="#">
                                <h5 class="headers">Podcast Title</h5>
                            </a>
                            <p class="postInfor">By <b class="postby">super admin</b> Oct 6, 2018</p>
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="adbanner">
            <img src="https://source.unsplash.com/random/?digital" alt="adverts image">
            <p class="adsInfo">Place your ADS here</p>
        </div>
    </div>

    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p class="journalafricafootertitle">about</p>
                    <div class="borderheading"></div>
                    <ul class="journalafricafooterlist">
                        <li><a href="" class="lists">About Us</a></li>
                        <li><a href="" class="lists">Terms and Conditions</a></li>
                        <li><a href="" class="lists">Code of Ethics</a></li>
                        <li><a href="" class="lists">Privacy Policy</a></li>
                        <li><a href="" class="lists">Copyright Policy</a></li>
                        <li><a href="" class="lists">FAQs</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="journalafricafootertitle">products</p>
                    <ul class="journalafricafooterlist">
                        <li><a href="" class="lists">The company</a></li>
                        <li><a href="" class="lists">Journal Africa Intelligence</a></li>
                        <li><a href="" class="lists">Podcast</a></li>
                        <li><a href="" class="lists">Gender and humn rights</a></li>
                        <li><a href="" class="lists">Advertising</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="journalafricafootertitle">connect</p>
                    <ul class="journalafricafooterlist">
                        <li><a href="" class="lists">Contact Us</a></li>
                        <li><a href="" class="lists">Write for us</a></li>
                        <li><a href="" class="lists">Subscription plan</a></li>
                        <li><a href="" class="lists">Newsletter</a></li>
                        <li><a href="" class="lists">Site map</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src="images/journal-africa-logo.png" alt="" class="journalafricafooterlogo">
                    <img src="images/googleplay.png" alt="googleplay" class="appstyle">
                    <img src="images/ios.jpeg" alt="ios" class="appstyle">
                </div>
            </div>
        </div>
    </footer>
    <div class="subfooter">
        <div class="journalafricasubfooterflex">
            <div class="initialflexed">
                <div>
                    <p><a href="" class="bordered">Journal Africa Newspaper </a><span class="spannedfooter"> All rights Reserved &#169; 2023</span></p>
                </div>
            </div>
            <div>
                <ul>
                    <li class="listssocial twitsocial">
                        <a href=""><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="listssocial">
                        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                    <li class="listssocial">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
