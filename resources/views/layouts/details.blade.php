<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assets/news/css/single.css')}}">
    <link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/news/css/media.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/news/css/singlemedia.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <title>Journal Africa | {{$post->title}}</title>
</head>
<body>
    <section>
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
                    {{-- <div class="flex-item topbarCarousel">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active aditems">
                                <div class="heighgted">
                                    <a href="#">
                                        <p class=""><b class="bolded">Technology</b> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa exerc</span></p>
                                    </a>
                                </div>
                              </div>
                              <div class="carousel-item aditems">
                                <div class="heighgted">
                                    <a href="#">
                                        <p><b class="bolded">Politics & Government</b> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa exerc</span></p>
                                    </a>
                                </div>
                              </div>
                              <div class="carousel-item aditems">
                                <div class="heighgted">
                                    <a href="#">
                                        <p><b class="bolded">Social Issues</b> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa exerc</span></p>
                                    </a>
                                </div>
                              </div>
                            </div>
                            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                            </button> -->
                          </div>
                    </div> --}}

                    <div class="flex-item">
                        <ul class="icons mt-2">
                            <li><i class="fa-brands fa-twitter"></i></li>
                            <li><i class="fa-brands fa-facebook-f"></i></li>
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
                            <img class="img-style" src="{{asset('images/adsimages.jpg')}}" alt="">
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
                            <a class="nav-link" aria-current="page" href="../Homepage/index.html">Home</a>
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
                            <a class="btn btn-nav" href="../login.html">Login</a>
                            <a class="btn btn-nav" href="../subscription/index.html">Subscribe</a>
                        </div>
                      </div>
                    </div>
                </nav>
            </div>
        </div>

 @yield('s-content')
    <script src="{{asset('assets/news/js/modal.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>
