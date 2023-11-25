@extends('layouts.home')
@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/brief.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/briefmedia.css')}}">

@endpush
@section('h-content')

<div class="briefwrap mt-5">
    <div class="container">
        <div class="headingsTag">
            <h1> Africa In Brief</h1>
            <p>
                Subscribe and enjoy insightful analysis.
                Cancel at any time
            </p>
           {{--  <small>Updated 1hr ago</small> --}}
        </div>
        <hr>
        <ul class="newsbrief">
            @foreach ($posts as $post)
            <li class="brieflist">

                    {!!$post->body!!}

            </li>
            <hr>

            @endforeach


        </ul>
        <div class="">
            <p class="text-center">
                Already have an account? <a href="{{route('reader.showLoginForm')}}">Log in</a>
            </p>
            <div class="briefsubscribe">
                <h5 class="fullheading">Get the full story</h5>
                <p class="subInfo">
                    Subscribe and enjoy insightful analysis.
                    <br> Cancel anytime
                </p>
                <button class="brief-sub-btn">Subscribe</button>
                <div class="newsafrica-briefpros mt-4">
                    <ul >
                        <li>
                            <p>
                                Lorem ipsum dolor sit, velit quaerat laboriosam ipsam eos est nostrum error voluptas!
                            </p>
                        </li>
                        <li>
                            <p>
                                Lorem ipsum dolor sit, velit quaerat laboriosam ipsam eos est nostrum error voluptas!
                            </p>
                        </li>
                        <li>
                            <p>
                                Lorem ipsum dolor sit, velit quaerat laboriosam ipsam eos est nostrum error voluptas!
                            </p>
                        </li>
                    </ul>
                    <hr>
                    <h5 class="contin">Or Continue reading this article</h5>
                    <a href="{{route('reader.showRegisterForm')}}" class="subRegister">Register Now</a>
                </div>
            </div>

        </div>
    </div>
</div>


@include('includes.news.foot')
@endsection
