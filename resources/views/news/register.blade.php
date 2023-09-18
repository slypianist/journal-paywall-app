@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/register.css')}}">
@endpush
@section('h-content')

<div class="signup-forms">
    <div class="centere">
        <h2 class="headings mb-3">Create Account</h2>
    </div>
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="registerInfo">
                    <ul>
                        <li>
                            Read beyond the news.
                        </li>
                        <li>
                            Explore indepth analysis and correct to details content.
                        </li>
                        <li>
                            Access exclusive stories, expert curation and expansive coverage on Journal Africa website and Mobile App.
                        </li>
                        <li>
                            Listen to live radio and podcast on Journal Africa website and Mobile App.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="journalafricanewsformed">
                    <div>
                      <form class="registerform" action="{{route('reader.register')}}" method="POST">
                        <div class="mb-3">
                          <label for="first_name" class="form-label">First Name</label>
                          <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" placeholder="Enter first Name" name="first_name">
                          @error('first_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                          <label for="last_name" class="form-label">Last Name</label>
                          <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Enter last name" name="last_name">
                          @error('last_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="Enter email" name="email">
                          @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="*********" name="password">
                          @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="*********" name="password_confirmation">
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                          </div>
                        <div class="mb-3">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                          <label class="form-check-label" for="flexCheckChecked">
                            <p class="wrapped">I agree to the <a href="" class="journalafricaterms">Terms and Conditions and Privacy Policy</a> </p>
                          </label>
                        </div>
                        <button type="submit" class="regsiter-btn">Sign up</button>
                        @csrf
                      </form>

                      <p class="LoggedIn">
                        Already have an account? <a href="{{route('reader.showLoginForm')}}" class="signedIn">Sign In</a>
                      </p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection
