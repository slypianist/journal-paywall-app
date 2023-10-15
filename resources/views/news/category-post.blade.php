@extends('layouts.home')
@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">

@endpush
 @section('h-content')

 <section class="main">
     <div class="banner-wrap">
        <div class="">
            <div class="newsimg-wrap">
                <img src="{{asset('storage/'.$category->image)}}" class="banner" alt="">
                <div class="bottom-left">
                    <h2>{{$title}}</h2>
                    <p></p>
                    <p><i class="fa-thin fa-clock"></i></p>
                </div>
            </div>
        </div>
    </div>


    <div class="categories mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="news-data-wrap mt-2">
                        <h5 class="category">{{$title}}</h5>
                        <ul class="news-list">

                            @foreach ($posts as $post )

                            <li>
                                <div class="wrapped">
                                    <div class="flexed-item">
                                        <img src="{{asset('storage/'.$post->image)}}" alt="" class="category-img">
                                    </div>
                                    <div class="flexed-item ml-5 spacing">
                                        <a href="{{route('post.list', [$post->slug])}}"><h5 class="titled">{{$post->title}}</h5></a>
                                        <small>{{$post->created_at}}</small>
                                        <p class="news-detail">{{$post->excerpt}}... <a href="{{route('post.list', [$post->slug])}}" class="read-more-btn"><i>Read More</i></a></p>

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
            <img src="https://source.unsplash.com/random/?digital" alt="adverts image">
            <p class="adsInfo">Place your ADS here</p>
        </div>
    </div>


</section>
@include('includes.news.foot')
@endsection
