@extends('layouts.details')
@section('s-content')
{{-- Header --}}


<div class="singled mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="wrapper">
                    <img src="{{asset('storage/'.$post->image)}}" alt="singleNews picture" class="singleImg">
                    <h3 class="singleTitle">
                        <a href="#">

                        </a>
                    </h3>
                    <p class="dated">By <small class="author">super admin</small> -- <span>5th-Mar-2023</span></p>
                    <div>
                        <p class="newsdetail">
                            {{$post->title}}
                            <span class="details">
                                {{$post->excerpt}}
                            </span>
                        </p>
                        <div class="journalafrica-sub">
                            <a href="{{route('news.subscribe')}}" class="journalafrica_subscribebtn">Subscribe</a>
                        </div>
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
                    <a href="#">
                        <img src="{{asset('images/adsimages.jpg')}}" alt="advert banner" class="adsbannerimg">
                        <div class="adsinfo">
                            <p class="aligned">We can freely post <br> your ad here</p>
                            <p class="aligned">banner <br> 250 X 250</p>
                            <div class="aligned">
                                <button class="adsbtn">PLACE YOUR AD</button>
                            </div>
                        </div>
                    </a>
                </div>
{{--                 <div class="tabswrapper">
                    <ul class="nav nav-tabs">
                        <li class="nav-item tab-item">
                            <a href="#popular" class="nav-link active" data-bs-toggle="tab">Popular</a>
                        </li>
                        <li class="nav-item">
                            <a href="#profile" class="nav-link" data-bs-toggle="tab">Most Viewed</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="popular">
                            <div class="popularnews-wrap">
                                <ul class="breaknewsList">
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">sports</small>
                                                    <a href="#" class="newsanchor">
                                                        <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                    </a>

                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">Technology</small>
                                                   <a href="#" class="newsanchor">
                                                    <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                   </a>
                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">Health</small>
                                                    <a href="#" class="newsanchor">
                                                        <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                    </a>
                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">Fashion</small>
                                                    <a href="#" class="newsanchor">
                                                        <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                    </a>
                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <div class="popularnews-wrap">
                                <ul class="breaknewsList">
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">sports</small>
                                                    <a href="#" class="newsanchor">
                                                        <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                    </a>

                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">Technology</small>
                                                   <a href="#" class="newsanchor">
                                                    <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                   </a>
                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">Health</small>
                                                    <a href="#" class="newsanchor">
                                                        <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                    </a>
                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="mt-3">
                                        <a href="#" class="newsanchor">
                                            <div class="popularnews">
                                                <div class="flexNewsItem">
                                                    <img src="images/singled.jpg" alt="" class="imgstyle">
                                                </div>
                                                <div class="flexNewsItem margined">
                                                    <small class="small-cont titled">Business</small>
                                                    <a href="#" class="newsanchor">
                                                        <small class="small-cont newsbrief">Its a long established fact that a reader will</small>
                                                    </a>
                                                    <small class="float-start">
                                                        0ct 6, 2016
                                                    </small>

                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                    <a role="button" href="#recipeCarousel" role="button" data-bs-slide="prev">
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
                                            <img src="https://source.unsplash.com/random/?business" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="#" class="cardtext">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus explicabo repellendus ips
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item customed">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://source.unsplash.com/random/?finance" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="#" class="cardtext">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus explicabo repellendus ips
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item customed">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://source.unsplash.com/random/?culture" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="#" class="cardtext">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus explicabo repellendus ips
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item customed">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://source.unsplash.com/random/?education" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="#" class="cardtext">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus explicabo repellendus ips
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item customed">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://source.unsplash.com/random/?health" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="#" class="cardtext">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus explicabo repellendus ips
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item customed">
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="https://source.unsplash.com/random/?technology" class="img-fluid newsimgstyle">
                                        </div>
                                        <a href="#" class="cardtext">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus explicabo repellendus ips
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1 d-flex align-items-center justify-content-center">
                    <a role="button" href="#recipeCarousel" role="button" data-bs-slide="next">
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
                <img src="{{asset('images/journal-africa-logo.png')}}" alt="" class="journalafricafooterlogo">
                <img src="{{asset('images/googleplay.png')}}" alt="googleplay" class="appstyle">
                <img src="{{asset('images/ios.jpeg')}}" alt="ios" class="appstyle">
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

@endsection
