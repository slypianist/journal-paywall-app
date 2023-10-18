<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/news/css/media.css')}}"> --}}
    @stack('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <title>Journal Africa</title>
</head>
    {{-- @include('includes.news.home-header') --}}
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-wrap">
                <div class="flex-item">
                    <ul class="links mt-2">
                        <li><a href="{{route('reader.showRegisterForm')}}">Register</a></li>
                        <li><a href="{{route('reader.showLoginForm')}}">Login</a></li>

                    </ul>
                </div>
               {{--  <div class="flex-item mt-2">
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
                </div> --}}

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
                        <a href="/">
                            <img src="{{asset('images/journal-africa-logo.png')}}" alt="journal-africa-logo">
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
                        <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('category-post', 'category=business')}}">Business & finance</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('category-post', 'category=politics-and-government')}}">politics & government</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('category-post', 'category=economy')}}">Economy</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('category-post', 'category=technology')}}">technology</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('category-post', 'category=opinion')}}">opinion</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('podcasts.all')}}">Podcast</a>
                      </li>
                    </ul>
                    <div class="d-flex">
                        <a href="{{route('reader.showLoginForm')}}"><button class="btn btn-nav">Login</button></a>
                        <a href="{{route('news.subscribe')}}"><button class="btn btn-nav">Subscribe</button></a>

                    </div>
                  </div>
                </div>
            </nav>
        </div>
    </div>

@yield('h-content')

@include('includes.news.footer')


</body>

</html>

