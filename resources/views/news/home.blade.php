 @extends('layouts.home')
@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">

@endpush
 @section('h-content')

 <section class="main">
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
                        <a href="{{route('post.list', [$life->slug])}}" class="tiledanchor">
                            <h5 class="tiltedHeading">{{$life->title}}<h5>
                        </a>
                        <figure>
                            <img src="storage/{{$life->image}}" alt="newspfoto" class="imgstyledd" style="width:100%">
                            <figcaption>
                                <small class="smalled"><i class="fa-regular fa-clock-nine"></i>{{$life->created_at}}</small>
                                {{-- <p class="styleinfo">
                                    {{$life->excerpt}} <a href="{{route('post.list', [$life->slug])}}" class="mored"><i>Read More</i></a>
                                </p> --}}
                            </figcaption>
                        </figure>
                    </div>
                    <div class="journalafrical_thumblink">
                        @foreach ($business as $lifes)
                        <div class="thumbnail_news">

                            <div class="thumbed">
                                <img src="storage/{{$lifes->image}}" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="{{route('post.list', [$lifes->slug])}}" class="journalafricathumbs">
                                            {{$lifes->title}}
                                        </a>
                                    </span>
                                </p>
                            </div>

                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="borderr">Social Issues</h5>
                    <div>
                        <a href="{{route('post.list', [$social->slug])}}" class="tiledanchor">
                            <h5 class="tiltedHeading">{{$social->title}}<h5>
                        </a>
                        <figure>
                            <img src="storage/{{$social->image}}" alt="newspfoto" style="width:100%" class="imgstyledd">
                            <figcaption>
                                <small class="smalled"><i class="fa-regular fa-clock-nine"></i>{{$social->created_at}}</small>
                                {{-- <p class="styleinfo">
                                   {{$social->excerpt}} <a href="{{route('post.list', [$social->slug])}}" class="mored"><i>Read More</i></a>
                                </p> --}}
                            </figcaption>
                        </figure>
                    </div>

                    <div class="journalafrical_thumblink">
                        @foreach ($socialsRelated as $socials)
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="storage/{{$socials->image}}" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="{{route('post.list', [$socials->slug])}}" class="journalafricathumbs">
                                            {{$socials->title}}
                                        </a>
                                    </span>
                                </p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <h5 class="borderr">Opinion</h5>
                    <div>
                        <a href="{{route('post.list', [$opinion->slug])}}" class="tiledanchor">
                            <h5 class="tiltedHeading">{{$opinion->title}}<h5>
                        </a>
                        <figure>
                            <img src="storage/{{$opinion->image}}" alt="newspfoto" style="width:100%" class="imgstyledd">
                            <figcaption>
                                <small class="smalled"><i class="fa-regular fa-clock-nine"></i>{{$opinion->created_at}}</small>
                                {{-- <p class="styleinfo">
                                    {{$opinion->excerpt}} <a href="" class="mored"><i>Read More</i></a>
                                </p> --}}
                            </figcaption>
                        </figure>
                    </div>
                    <div class="journalafrical_thumblink">
                        @foreach ($opinionsRelated as $opinions)
                        <div class="thumbnail_news">
                            <div class="thumbed">
                                <img src="storage/{{$opinions->image}}" alt="news graphics" class="thumbnail_style">
                            </div>
                            <div class="news-desrciption conatined">
                                <p class="news_desription ">
                                    <span class="ellipsis">
                                        <a href="{{route('post.list', [$opinions->slug])}}" class="journalafricathumbs">
                                            {{$opinions->title}}
                                        </a>
                                    </span>
                                </p>
                            </div>
                        </div>
                        @endforeach
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


</section>
@include('includes.news.foot')
@endsection
