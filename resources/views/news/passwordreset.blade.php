@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/login.css')}}">
@endpush
@section('h-content')

<div class="signup-forms">
    <div class="centere">
        @include('includes.news.error-alert')
        <h2 class="headings mb-3">Password Reset</h2>
    </div>
    <div class="container mb-5">
        <div class="journalafricanewsformed">
            <div>
              <form class="registerform" action="{{route('reader.password.update')}}" method="POST">

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" name="password">
                  @error('password')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Enter password" name="password">
                    @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                  </div>
                <button type="submit" class="regsiter-btn">Reset password</button>
                @csrf
              </form>
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
                {{-- <img src="{{asset('images/googleplay.png')}}" alt="googleplay" class="appstyle">
                <img src="{{asset('images/ios.jpeg')}}" alt="ios" class="appstyle"> --}}
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
