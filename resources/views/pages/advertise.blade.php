@extends('layouts.home')

@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/advertise.css')}}">

@endpush

@section('h-content')

<div class="container">
    <div class="wrapper">
        <hr class="dividers">
            <h4 class="titled">Advertising</h4>
        <hr class="dividers">
    </div>
    <div>
        <p class="content">
            We are delighted to introduce our on the web medium to enable you reach a great number of your potential market. <br> <br> With our in-depth coverage of investigative stories and factual entertainment contents broadcasted on all our platforms with reach everywhere around the world, we offer you the unique advantage of maximum effect to your business. <br> When you advertise with us, you stand to benefit the following: <br> <br>
            You have immediate access to a national and global readership through a state-of-the-art medium, the World Wide Web. <br>  Relatively modest advert rates with the flexibility of choosing the duration desired.
                <br> You have a choice of using still or animated advert designs/logos/icons, or acombination of the two. <br> You have flexibility of design formats and sizes to suit your taste and special needs.
        </p> <br> <br>

        <p>
            For more information, email us at <a href="mailto:advertising@journal.africa">advertising@journal.africa</a>
        </p>

    </div>
</div>

@include('includes.news.foot')
@endsection
