@extends('layouts.home')

@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/register.css')}}">
@endpush

@section('h-content')

<div class="signup-forms">
<div class="centere">
<h2 class="headings mb-3">CONTACT US</h2>
</div>
<div class="container mb-5">
<div class="row">
<div class="col-md-6">
    <div class="registerInfo">
        <ul class="registred-writeup">
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
          <form class="registerform">
            <div class="mb-3">
              <label for="firstname" class="form-label">First Name</label>
              <input type="text" class="form-control" placeholder="Enter first Name" required>
            </div>
            <div class="mb-3">
              <label for="lastname" class="form-label">Last Name</label>
              <input type="text" class="form-control" placeholder="Enter last name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" placeholder="Enter email" required>
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Message</label>
             <textarea name="message" class="form-control" cols="30" rows="5" placeholder="Enter Message" required></textarea>
            </div>


            <button type="submit" class="regsiter-btn">Send</button>
          </form>

        </div>
      </div>
</div>
</div>
</div>
</div>
@include('includes.news.foot')
@endsection
