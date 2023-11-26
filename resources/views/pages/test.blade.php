@extends('layouts.home')
@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/media.css')}}">

<link rel="stylesheet" href="{{asset('assets/news/css/payment.css')}}">

@endpush
@section('h-content')
<h2 class="customText">PAYMENT CONFIRMATION</h2>

    <div class="container-cus">

        <div class="printer-top"></div>

        <div class="paper-container">
            <div class="printer-bottom"></div>

            <div class="paper">
                <div class="main-contents">
                    <div class="success-icon">&#10004;</div>
                    <div class="success-title">
                        Payment Complete
                    </div>
                    <div class="success-description">
                        Thank you for completing the payment and subscribing! You will shortly receive an email of your payment.
                    </div>
                    <div class="order-details">
                        <div class="order-number-label">SUBSCRIBED PLAN</div>
                        <div class="order-number">{{$data['plan']}}</div>

                        <div class="complement">Thank You!</div>
                <p>
                  <a href="{{route('home')}}">Click here</a>
                </p>

                    </div>
                </div>
                <div class="jagged-edge"></div>
            </div>
        </div>
    </div>

@include('includes.news.foot')
@endsection
