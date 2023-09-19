@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/login.css')}}">
@endpush
@section('h-content')

<div class="signup-forms">
    <div class="centere">
        @include('includes.news.error-alert')
        <h2 class="headings mb-3">Sign In</h2>
    </div>
    <div class="container mb-5">
        <div class="journalafricanewsformed">
            <div>
              <form class="registerform" action="{{route('reader.login')}}" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Enter email" name="email">
                  @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" name="password">
                  @error('password')
                          <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                </div>
                <button type="submit" class="regsiter-btn">Sign In</button>
                @csrf
              </form>
              <p class="LoggedIn">
                Don't have an account? <a href="{{route('reader.showRegisterForm')}}" class="signedIn">Sign Up</a>
              </p>
            </div>
          </div>
    </div>
</div>

@endsection
