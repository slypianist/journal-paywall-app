@extends('layouts.home')
@section('h-content')

<section class="block-inner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Login & Registration</h1>
                <div class="breadcrumbs">
                    <ul>
                        <li><i class="pe-7s-home"></i> <a href="{{route('home')}}" title="">Home</a></li>
                        <li><a href="" title="">Login & Registration</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="login-reg-inner">
    <div class="container">
        <div class="row">
             <div class="col-sm-6">
                <div class="login-form-inner">
                    <h3 class="category-headding ">LOGIN TO YOUR ACCOUNT</h3>
                    <div class="headding-border bg-color-1"></div>
                    <form action="{{route('reader.login')}}" method="post">
                        <label>Username Or Email <sup>*</sup></label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Username or Email" required>
                        <label>Password <sup>*</sup></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="*******" required>
                        <label class="checkbox-inline">
                            <input type="checkbox" value="">Remember me</label>
                        <button type="submit" class="btn btn-style">Login</button>
                        <div class="forget"><a href="#">Forget username/password?</a></div>
                       {{--  <div class="row">
                            <div class="col-sm-6">
                                <div class="social_icon">
                                    <div class="social_icon_box social_icon_box_1">
                                        <div class="icon facebook-icon"></div>
                                        <span class="social_info">Login with facebook</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="social_icon">
                                    <div class="social_icon_box social_icon_box_2">
                                        <div class="icon twitter-icon"></div>
                                        <span class="social_info">Login with twitter</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        @csrf
                    </form>
                </div>
            </div>
            <div class="col-sm-6 align-middle">
                <div class="register-form-inner">
                    <h3 class="category-headding ">REGISTER NOW!</h3>
                    <div class="headding-border bg-color-1"></div>
                    @if ($errors->any())
                                <div class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{$error}}</li>

                                        @endforeach
                                    </ul>
                                </div>

                            @endif
                    <form method="post" action="{{route('reader.register')}}">
                        <label>First Name <sup>*</sup></label>
                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required >
                        <label>Last Name <sup>*</sup></label>
                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required>
                        <label>Email <sup>*</sup></label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Username or Email" required>
                        <label>Password <sup>*</sup></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Write Your Password Here ..." required>
                        <label>Repeat Password <sup>*</sup></label>
                        <input type="password" class="form-control" id="pass" name="confirm-password" placeholder="Rewrite Your Password Here ..." required>
                        {{-- <button type="submit" class="btn btn-style">Register Now!</button> --}}
                        <input type="submit" value="Submit" class="btn btn-style">
                        @csrf
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
