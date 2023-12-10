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
            <img src="../subscription/images/giftbox.png" alt="gift subscription" class="gifts">
        </div>
    </div>
</div>

<form class="giftypewrapper mt-5" method="" action="">
    <div class="container">
        <div class="groupwrapperflex">
            <div class="flexed giftflexed quatsub">
                <strong>Quaterly Subscription</strong>
                <p>
                    Empower your group or team members with our carefully curated group subscription package at discounted rates
                </p>
                <b>&#8358;4000</b> <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                      Quaterly
                    </label>
                  </div>

            </div>
            <div class="flexed giftflexed">
                <strong>Monthly Subscription</strong>
                <p>
                    Empower your group or team members with our carefully curated group subscription package at discounted rates
                </p>
                <b>&#8358;1000</b> <br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
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
                        Already have an account?<a href="../login.html"> Sign in</a> for faster checkout
                    </p>
                    <div class="senderform">
                        <div class="row mb-3">
                            <label for="colFormLabelSm" class="">First name</label>
                            <div class="col-sm-10">
                            <input type="text" nameclass="form-control form-control-sm" class="inputs">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabel">Your Email address</label>
                            <div class="col-sm-10">
                                <input type="email" nameclass="form-control form-control-sm" class="inputs">
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
                                    <input type="email" class="form-control inputs">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="colFormLabelSm" class="">Message</label>
                                <div class="col-sm-10">
                                <textarea type="text" class="form-control inputs" ></textarea>
                                </div>
                            </div>
                            <small>Leave them a note to receive with their gift</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn paymentbtn">Continue to payment</button>
    </div>
</form>
        @include('includes.news.foot')
@endsection
