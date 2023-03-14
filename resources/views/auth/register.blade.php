{{-- @extends('layouts.app')

@section('content')
    <section class="position-relative py-4 py-xl-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Register</h2>
                    <p class="w-lg-50"><span style="color: rgb(108, 117, 125);">Enter your Email address, Username and
                            Password for credentials.</span><br></p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-5">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="bs-icon-xl bs-icon-circle bs-icon-primary bs-icon my-4"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                                    viewBox="0 0 16 16" class="bi bi-person">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z">
                                    </path>
                                </svg>
                            </div>

                            <form class="text-center col-lg-10" method="POST" action="{{ route('register') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3">
                                    <input class="form-control @error('name') is-invalid @enderror" type="name"
                                        name="name" placeholder="Name" required="" autofocus=""
                                        value="{{ old('name') }}">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email"
                                        name="email" placeholder="Email" required="" value="{{ old('email') }}">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input class="form-control @error('username') is-invalid @enderror" type="text"
                                        name="username" placeholder="Username" required="" value="{{ old('username') }}">

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="avatar" class="d-flex justify-content-center mb-2">Avatar (optional)</label>
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror"
                                        name="avatar" id="avatar" onchange="previewImage()" />
                                    @error('avatar')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input class="form-control @error('password') is-invalid @enderror" type="password"
                                        name="password" placeholder="Password" required="" autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                        type="password" name="password_confirmation" placeholder="Confirm Password"
                                        required="" autocomplete="new-password">

                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <button class="btn btn-primary d-block w-100" type="submit">Register</button>
                                </div><a href="login.html">Already had Account? login Here</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
 --}}

 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('assets/news/css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c52819d552.js" crossorigin="anonymous"></script>
    <title>Register</title>
</head>
<body>
    <div class="nav-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="links">
                        <ul class="headers">
                            <li><a class="nav-link">REGISTER</a></li>
                            <li><a class="nav-link">LOGIN</a></li>
                            <li><a class="nav-link">CONTACT</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="news-slider">
                        <ul class="slide-show">
                            <li>
                                <p>Lorem ipsum aperiam l</p>
                            </li>
                            <li>
                                <button class="ctr-btn"><</button>
                            </li>
                            <lI>
                                <button class="ctr-btn">></button>
                            </lI>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <ul class="icon-wrap">
                            <li class="icons">
                                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href=""><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                            </li>
                            <li class="icons">
                                <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="signup-forms">
        <div class="centere">
            <h2 class="headings">Login & Registration</h2>
            <div class="paged">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span id="text">Home / Login & Registration</span>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <strong>LOGIN TO YOUR ACCOUNT</strong>
                    <form method="POST" action="{{ route('register') }}">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username Or Email</label>
                          <input type="email" class="form-control" @error('name') is-invalid @enderror" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Rememeber me</label>
                        </div>
                        <button type="submit" class="login">Submit</button>
                    </form>
                    <p class="reset"><a href="">Forget username/password</a></p>
                    <div>
                        <ul class="logins">
                            <li class="loginList">
                                <button class="facebooked">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                    Login with facebook
                                </button>
                            </li>
                            <li class="loginList">
                                <button class="twittered">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    Login with twitter
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div>
                        <strong>REGISTER NOW</strong>
                        <form method="POST" action="{{ route('register') }}">
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">First name</label>
                              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Username / Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Repeat Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2">
                              </div>
                            <button type="submit" class="regsiter-btn">Register Now</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
@include('includes.news.footer')

