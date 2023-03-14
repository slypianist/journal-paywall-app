@section('content')
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
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Username Or Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
                        <form>
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
</body>
</html>
@endsection
