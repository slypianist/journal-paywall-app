@extends('layouts.home')
@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/single.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/singlemedia.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">


@endpush
@section('h-content')
{{-- Header --}}


<div class="singled mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="wrapper">
                    <img src="{{asset('storage/'.$post->image)}}" alt="singleNews picture" class="singleImg">
                    <h3 class="singleTitle">
                        <a href="#">
                            {{$post->title}}
                        </a>
                    </h3>
                    <p class="dated">By <small class="author">{{$post->author->name}}</small> -- <span>5th-Mar-2023</span></p>
                    <div>

                    @auth('reader')
                        @if ($post->isPremium())
                            @if ($isSubscribed)
                            <article>

                                {!! $post->body!!}

                              </article>
                            @else
                            <p class="newsdetail">
                                <article>

                                   {!! $truncatedBody!!}

                                 </article>

                                 <div id="paywall-wrapper">
                                    <h4>Journal Africa News</h4>
                                    <p>This story is only available to Premium Subscribers. You have no active subscription. <br><strong>Click Subscribe to choose a subscription plan</strong> to read.</p>
                                    <a class="btn btn-danger" href="{{route('news.subscribe')}}">Subscribe</a>
                                 </div>
                            </p>
                            @endif
                        @endif
                    @endauth

                    @guest('reader')
                        @if ($post->isPremium())
                        <p class="newsdetail">
                            <article>

                               {!! $truncatedBody!!}

                             </article>

                             <div id="paywall-wrapper">
                                <h4>Journal Africa News</h4>
                                <p>This story is a premium content and only available to premium subscribers. <br>To continue reading, <strong>subscribe</strong> or <strong>sign in.</strong></p>
                                <a class="btn btn-danger wall-button" href="{{route('reader.showLoginForm')}}">Sign in</a>
                                <a class="btn btn-dark wall-button" href="{{route('news.subscribe')}}">Subscribe</a>
                             </div>
                        </p>
                        @endif
                    @endguest

                    @guest
                        @if ($post->isFree())


                        <p class="newsdetail">
                            <article>

                               {!! $truncatedBody!!}

                             </article>

                             <div id="paywall-wrapper">
                                <h4>Journal Africa News</h4>
                                <p>This story is free to read but is available to registered members. <br>To continue reading, <strong>register</strong> or <strong>sign in.</strong></p>
                                <a class="btn btn-danger wall-button" href="{{route('reader.showRegisterForm')}}">Register</a>
                                <a class="btn btn-dark wall-button" href="{{route('reader.showLoginForm')}}">Sign in</a>
                             </div>
                        </p>

                    @endif
                @endguest

                @auth('reader')
                        @if ($post->isFree())

                            <article>

                                {!! $post->body!!}

                              </article>
                            {{-- <p class="newsdetail">
                                <articles>

                                   {!! $truncatedBody!!}

                                 </article>

                                 <div id="paywall-wrapper">
                                    <h4>Journal Africa News</h4>
                                    <p>This story is only available to Premium Subscribers. You have no active subscription. <br><strong>Click Subscribe to choose a subscription plan</strong> to read.</p>
                                    <a class="btn btn-danger" href="{{route('news.subscribe')}}">Subscribe</a>
                                 </div>
                            </p> --}}

                        @endif
                    @endauth


                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="Search articles here">
                    <button type="submit" class="searchButton">
                      <i class="fa fa-search"></i>
                   </button>
                </div>
                <div class="adsbanner mt-5">
                    @if (!$advert->singleAd == NULL)

                    <a href="#">
                        <img src="{{asset('adverts/'.$advert->singleAd)}}" alt="advert banner" class="adsbannerimg">

                    </a>

                    @else

                    <a href="#">
                        <img src="{{asset('storage/'.$post->image)}}" alt="advert banner" class="adsbannerimg">
                        <div class="adsinfo">
                            <p class="aligned">We can freely post <br> your ad here</p>
                            <p class="aligned">banner <br> 250 X 250</p>
                            <div class="aligned">
                                <button class="adsbtn">PLACE YOUR AD</button>
                            </div>
                        </div>
                    </a>

                    @endif
                </div>

            </div>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="row mx-auto my-auto justify-content-center">
        <h4 class="mt-4">Related News</h4>
        <div class="col">
            <div class="row">
                <div class="col-1 d-flex align-items-center justify-content-center">
                    <a role="button" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <div class="carousel-nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="m88.6,121.3c0.8,0.8 1.8,1.2 2.9,1.2s2.1-0.4 2.9-1.2c1.6-1.6 1.6-4.2 0-5.8l-51-51 51-51c1.6-1.6 1.6-4.2 0-5.8s-4.2-1.6-5.8,0l-54,53.9c-1.6,1.6-1.6,4.2 0,5.8l54,53.9z"/>
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="col-10">
                    <div id="recipeCarousel" class="carousel customcarousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item customed active">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{asset('storage/'.$related[0]['image'])}}" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="{{route('post.list', $related[0]['slug'])}}" class="cardtext">
                                            <p>
                                                {{$related[0]['title']}}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @foreach ($related as $index =>$related )
                            @if ($index > 0)

                            <div class="carousel-item customed">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="{{asset('storage/'.$related->image)}}" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="{{route('post.list', $related->slug)}}" class="cardtext">
                                            <p>
                                                {{$related->title}}
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            @endif

                            @endforeach



                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex align-items-center justify-content-center">
                    <a role="button" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <div class="carousel-nav-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@include('includes.news.foot')

@endsection
