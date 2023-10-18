<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/news/css/media.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <title>Homepage</title>
</head>
<body>
    <section class="main">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-wrap">
                    <div class="flex-item">
                        <ul class="links mt-2 journalafricatopnews">
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
                                    <a href="#" class="newsDetail">
                                        <p class=""><b class="bolded">Africa In Brief:</b> <span>Lorem ipsum dolor sit amet consectet</span></p>
                                    </a>
                                </div>
                              </div>
                              <div class="carousel-item aditems">
                                <div class="heighgted">
                                    <a href="#" class="newsDetail">
                                        <p><b class="bolded">Africa In Brief:</b> <span>Lorem ipsum dolor sit amet consectetur</span></p>
                                    </a>
                                </div>
                              </div>
                              <div class="carousel-item aditems">
                                <div class="heighgted">
                                    <a href="#" class="newsDetail">
                                        <p><b class="bolded">Africa In Brief:</b> <span>Lorem ipsum dolor sit amet consectetur</span></p>
                                    </a>
                                </div>
                              </div>
                            </div>
                        </div>
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
                            <a href="index.html">
                                <img src="./images/journal-africa-logo.png" alt="journal-africa-logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img-wrap">
                            <img class="img-style" src="https://source.unsplash.com/random/?bookstore" alt="">
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
                            <a class="nav-link" aria-current="page" href="index.html">Home</a>
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

        <div class="banner-wrap">
            <div class="containered">
                <div class="newsimg-wrap">
                    <img src="images/africa.jpg" class="banner" alt="">
                    <div class="bottom-left">
                        <h2>Africa</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aut animi re</p>
                        <p><i class="fa-thin fa-clock"></i> Oct 16, 2018</p>
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
                                                            <img src="https://source.unsplash.com/random/?fruit" class="img-fluid news-img">
                                                            <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                                <h5 class="carouselHeadings">Africa In Brief</h5>
                                                                <p class="mb-3 textOwl">
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam non libero corrupti reprehenderit commodi pariatur fugiat debitis ipsa
                                                                </p>
                                                                <div class="dateflex">
                                                                    <p class="dated">22-01-2022</p>

                                                                    <p class="iconwrap"><i class="fa-solid fa-greater-than"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-item customed">
                                            <div class="col-md-3">
                                                <a href="">
                                                    <div class="card">
                                                        <div class="card-img">
                                                            <img src="https://source.unsplash.com/random/?house" class="img-fluid news-img">
                                                            <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                                <h5 class="carouselHeadings">Economy</h5>
                                                                <p class="mb-3 textOwl">
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam non libero corrupti reprehenderit commodi pariatur fugiat debitis ipsa
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
                                        <div class="carousel-item customed">
                                            <div class="col-md-3">
                                                <a href="">
                                                    <div class="card">
                                                        <div class="card-img">
                                                            <img src="https://source.unsplash.com/random/?tree" class="img-fluid news-img">
                                                            <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                                <p class="carouselHeadings">Business & finance</p>
                                                                <p class="mb-3 textOwl">
                                                                    Lorem ipsum dolor sit
                                                                    amet consectetur, adipisicing elit. Magnam non libero corrupti reprehenderit commodi pariatur fugiat debitis ipsa
                                                                </p>
                                                                <div class="dateflex">
                                                                    <p class="dated">22-01-2022</p>

                                                                    <p class="iconwrap"><i class="fa-solid fa-greater-than"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-item customed">
                                            <div class="col-md-3">
                                                <a href="">
                                                    <div class="card">
                                                        <div class="card-img">
                                                            <img src="https://source.unsplash.com/random/?computer" class="img-fluid news-img">
                                                            <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                                <p class="carouselHeadings">Politics & Government</p>
                                                                <p class="mb-3 textOwl">
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam non libero corrupti reprehenderit commodi pariatur fugiat debitis ipsa
                                                                </p>
                                                                <div class="dateflex">
                                                                    <p class="dated">22-01-2022</p>

                                                                    <p class="iconwrap"><i class="fa-solid fa-greater-than"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-item customed">
                                            <div class="col-md-3">
                                                <a href="">
                                                    <div class="card">
                                                        <div class="card-img">
                                                            <img src="https://source.unsplash.com/random/?office" class="img-fluid news-img">
                                                            <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                                <p class="carouselHeadings">Food</p>
                                                                <p class="mb-3 textOwl">
                                                                    Lorem ipsum dolor sit
                                                                    amet consectetur, adipisicing elit. Magnam non libero corrupti reprehenderit commodi pariatur fugiat debitis ipsa
                                                                </p>
                                                                <div class="dateflex">
                                                                    <p class="dated">22-01-2022</p>

                                                                    <p class="iconwrap"><i class="fa-solid fa-greater-than"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="carousel-item customed">
                                            <div class="col-md-">
                                                <a href="">
                                                    <div class="card">
                                                        <div class="card-img">
                                                            <img src="https://source.unsplash.com/random/?city" class="img-fluid news-img">
                                                            <div class="card-img-overlay h-100 align-items-center justify-content-center text-white">
                                                                <p class="carouselHeadings">Opinion</p>
                                                                <p class="mb-3 textOwl">
                                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam non libero corrupti reprehenderit commodi pariatur fugiat debitis ipsa
                                                                </p>
                                                                <div class="dateflex">
                                                                    <p class="dated">22-01-2022</p>

                                                                    <p class="iconwrap"><i class="fa-solid fa-greater-than"></i></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
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
                                <li>
                                    <div class="wrapped">
                                        <div class="flexed-item">
                                            <img src="https://source.unsplash.com/random/?africa" alt="" class="category-img">
                                        </div>
                                        <div class="flexed-item ml-5 spacing">
                                            <a href="#"><h5 class="titled">Beatae voluptatibus iste nemo.</h5></a>
                                            <small>23-04-2012</small>
                                            <p class="news-detail">Lorem ipsum dolor sit ame dipisicing elit. Similique quisquam totam in veritatis eveniet iure qui esse rerum beatae sindyh... <a href="" class="read-more-btn"><i>Read More</i></a></p>

                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wrapped">
                                        <div class="flexed-item">
                                            <img src="images/adsimages.jpg" alt="" class="category-img">
                                        </div>
                                        <div class="flexed-item ml-5 spacing">
                                            <a href="#"><h5 class="titled">Beatae voluptatibus iste nemo.</h5></a>
                                            <small>23-04-2012</small>
                                            <p class="news-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quisquam totam in veritatis eveniet iure qui esse rerum beatae sindyh...<a href="" class="read-more-btn"><i>Read More</i></a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wrapped">
                                        <div class="flexed-item">
                                            <img src="https://source.unsplash.com/random/?city" alt="" class="category-img">
                                        </div>
                                        <div class="flexed-item ml-5 spacing">
                                            <a href="#"><h5 class="titled">Beatae voluptatibus iste nemo.</h5></a>
                                            <small>23-04-2012</small>
                                            <p class="news-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quisquam totam in veritatis eveniet iure qui esse rerum beatae sindyh...<a href="" class="read-more-btn"><i>Read More</i></a></p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="wrapped">
                                        <div class="flexed-item">
                                            <img src="https://source.unsplash.com/random/?computer" alt="" class="category-img">
                                        </div>
                                        <div class="flexed-item ml-5 spacing">
                                            <a href="#"><h5 class="titled">Beatae voluptatibus iste nemo.</h5></a>
                                            <small>23-04-2012</small>
                                            <p class="news-detail">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique quisquam totam in veritatis eveniet iure qui esse rerum beatae sindyh...<a href="" class="read-more-btn"><i>Read More</i></a></p>
                                        </div>
                                    </div>
                                </li>
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
                                    <li>
                                        <p class="texted">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit officia ut et! Nam exercitationem, numquam vitae ut voluptatum facilis ipsum quo quasi veniam dolorem repellat sed sunt blanditiis eaque corporis? <br>
                                            <a href="#" class="ctned">Continue reading</a>
                                        </p>
                                    </li>
                                    <hr class="hred">
                                    <li>
                                        <p class="texted">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit officia ut et! Nam exercitationem, numquam vitae ut voluptatum facilis ipsum quo quasi veniam dolorem repellat sed sunt blanditiis eaque corporis? <br>
                                            <a href="#" class="ctned">Continue reading</a>
                                        </p>
                                    </li>
                                    <hr class="hred">
                                    <li>
                                        <p class="texted">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit officia ut et! Nam exercitationem, numquam vitae ut voluptatum facilis ipsum quo quasi veniam dolorem repellat sed sunt blanditiis eaque corporis? <br>
                                            <a href="#" class="ctned">Continue reading</a>
                                        </p>
                                    </li>
                                    <hr class="hred">
                                    <li>
                                        <p class="texted">
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit officia ut et! Nam exercitationem, numquam vitae ut voluptatum facilis ipsum quo quasi veniam dolorem repellat sed sunt blanditiis eaque corporis? <br>
                                            <a href="#" class="ctned">Continue reading</a>
                                        </p>
                                    </li>
                                    <hr class="hred">
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
                    <div class="col-md-4">
                        <div>
                            <figure>
                                <img src="https://source.unsplash.com/random/?finance" alt="image" class="newsimage">
                                <figcaption class="mt-3">
                                    <a href="#">
                                        <h5 class="headers">Contrary to popular belief</h5>
                                    </a>
                                    <p class="postInfor">By <b class="postby">super admin</b> 13/02/2021</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor quisquam distinctio, obcaecati temporibus minus repellendu...
                                        <a href="" class="ctned"><i>Read More</i></a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <figure>
                                <img src="https://source.unsplash.com/random/?business" alt="image" class="newsimage">
                                <figcaption class="mt-3">
                                    <a href="#">
                                        <h5 class="headers">Contrary to popular belief</h5>
                                    </a>
                                    <p class="postInfor">By <b class="postby">super admin</b> 23/08/2020</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor quisquam distinctio, obcaecati temporibus minus repellendu...
                                        <a href="" class="ctned"><i>Read More</i></a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div>
                            <figure>
                                <img src="https://source.unsplash.com/random/?bank" alt="image" class="newsimage">
                                <figcaption class="mt-3">
                                    <a href="#">
                                        <h5 class="headers">Contrary to popular belief</h5>
                                    </a>
                                    <p class="postInfor">By <b class="postby">super admin</b> 15/10/2021</p>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta dolor quisquam distinctio, obcaecati temporibus minus repellendu...
                                        <a href="" class="ctned"><i>Read More</i></a>
                                    </p>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
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
                                    <img src="https://source.unsplash.com/random/?entertainment" alt="newsphoto" class="photostyle">
                                    <figcaption>
                                        <a href="#">
                                            <h5 class="newsheaders">Lorem ipsumlpa. Vitae?</h5>
                                        </a>
                                        <p class="postInfor">By <b class="postby">super admin</b> 13/02/2021</p>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum debitis quas voluptas ratione nisi repudiandae, delectus reprehende...<a href="" class="mored"><i>Read More</i></a>
                                        </p>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-7 mt-3">
                        <div class="row morenews">
                            <div class="col-md-4">
                                <figure>
                                    <a href="" class="wrappedMorenews">
                                        <img src="https://source.unsplash.com/random/?culture" alt="newsphoto" class="newslists">
                                        <figcaption>
                                            <h5 class="morenewsheadings">Lorem ipsumlpa. Vitae</h5>
                                            <p class="newsbox ellips">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores doloribus illo assumenda
                                            </p>
                                            <p class="postInformation">By <b class="postbyy">super admin</b> <br> Jun 20,2022</p>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure>
                                    <a href="" class="wrappedMorenews">
                                        <img src="https://source.unsplash.com/random/?animal" alt="newsphoto" class="newslists">
                                        <figcaption>
                                            <h5 class="morenewsheadings">Lorem ipsumlpa. Vitae</h5>
                                            <p class="newsbox ellips">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores doloribus illo assumenda
                                            </p>
                                            <p class="postInformation">By <b class="postbyy">super admin</b> <br> Sept 12,2020</p>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
                            <div class="col-md-4">
                                <figure>
                                    <a href="" class="wrappedMorenews">
                                        <img src="https://source.unsplash.com/random/?food" alt="newsphoto" class="newslists">
                                        <figcaption>
                                            <h5 class="morenewsheadings">Lorem ipsumlpa. Vitae</h5>
                                            <p class="newsbox ellips">
                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Asperiores doloribus illo assumenda
                                            </p>
                                            <p class="postInformation">By <b class="postbyy">super admin</b> <br> Oct 7,2021</p>
                                        </figcaption>
                                    </a>
                                </figure>
                            </div>
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
                                <img src="https://source.unsplash.com/random/?nature" alt="newspfoto" class="imgstyledd" style="width:100%">
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
                                <img src="https://source.unsplash.com/random/?entertainment" alt="newspfoto" style="width:100%" class="imgstyledd">
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
                                <img src="https://source.unsplash.com/random/?economy" alt="newspfoto" style="width:100%" class="imgstyledd">
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


    <script src="{{asset('assets/news/js/slider.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>


