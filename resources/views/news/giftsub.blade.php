@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/giftsub.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/giftmedia.css')}}">
@endpush
@section('h-content')

<div class="giftsimg mt-5">
    <div class="container">
        <h2 class="headings">Give the gift of <b class="journalafrica">Journal Africa</b> </h2>
        <div class="flexedcurr">
            <div class="form-check checks">
                <label class="form-check-label currlabels" for="currencyRadio1">
                    &#8358;
                </label>
                <input class="form-check-input radios" type="radio" value="" name="currencyRadio" id="currencyRadio1" checked>
            </div>
            <div class="form-check checks">
                <label class="form-check-label currlabels" for="currencyRadio2">
                    $
                </label>
                <input class="form-check-input radios" value="" type="radio" name="currencyRadio" id="currencyRadio2">
            </div>
        </div>
        <div class="giftimgwrap">
            <img src="{{asset('images/giftbox.png')}}" alt="gift subscription" class="gifts">
        </div>
    </div>
</div>

<form class="giftypewrapper mt-5" method="post" action="{{route('gift.subscription')}}">
    <div class="container">
        <div class="groupwrapperflex">
            <div class="flexed giftflexed quatsub">
                <strong>{{ $plans['data'][0]['name']}}</strong>
                <p>
                    Empower your group or team members with our carefully curated group subscription package at discounted rates
                </p>
                <b>&#8358;{{ $plans['data'][0]['amount']}}</b> <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="plan-code" id="flexRadioDefault1" value="{{ $plans['data'][0]['plan_code']}}">
                    <label class="form-check-label" for="flexRadioDefault1">
                        {{ $plans['data'][0]['name']}}
                    </label>
                  </div>

            </div>
            <div class="flexed giftflexed">
                <strong>{{ $plans['data'][1]['name']}}</strong>
                <p>
                    Empower your group or team members with our carefully curated group subscription package at discounted rates
                </p>
                <b>&#8358;{{ $plans['data'][1]['amount']}}</b> <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="plan-code" id="flexRadioDefault2" checked value="{{ $plans['data'][1]['plan_code']}}">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Monthly
                    </label>
                  </div>
            </div>
        </div>
        <div class="senderwrapper mt-4">
            <div class="flexedform">
                <div class="sender">
                    <b >Who is this gift from?</b>
                    <p>
                        Already have an account?<a href="{{route('reader.showLoginForm')}}"> Sign in</a> for faster checkout
                    </p>
                    <div class="senderform">
                        <div class="row mb-3">
                            <label for="colFormLabelSm" class="">Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm inputs" name="sender-name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel">Your Email address</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control form-control-sm inputs" name="sender-email" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flexedform">
                    <div class="sender">
                        <b>Recipient Information</b>
                        <div class="senderform">
                            <div class="row mb-3">
                                <label for="colFormLabel">Recipient email address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control inputs" name="rep-email" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="">Message</label>
                                <div class="col-sm-10">
                                <textarea type="text" class="form-control inputs" required></textarea>
                                </div>
                            </div>
                            <small>Leave them a note to receive with their gift</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="hidden" name="plan" >
        <input type="hidden" name="description" >
        <input type="hidden" name="amount" >
        <button class="btn paymentbtn">Continue to payment</button>
    </div>
    @csrf
</form>
        @include('includes.news.foot')
@endsection
