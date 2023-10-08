@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/sub.css')}}">
@endpush
@section('h-content')

        <div class="giftsimg mt-5">
            <div class="container">
                <h2 class="headings">Give the gift of <b class="journalafrica">Journal Africa</b> </h2>
                <div class="btnwrap">
                    <span class="currencbtn nairacurrncy">&#8358;</span>
                    <span class="currencbtn">$</span>
                </div>
                <div class="giftimgwrap">
                    <img src="images/giftbox.png" alt="gift subscription" class="gifts">
                </div>
            </div>
        </div>

        <div class="giftypewrapper">
            <div class="container">
                <div class="groupwrapperflex">
                    <div class="flexed giftflexed">
                        <strong>Quaterly Subscription</strong>
                        <p>
                            Empower your group or team members with our carefully curated group subscription package at discounted rates
                        </p>
                        <b>&#8358;4000</b>
                    </div>
                    <div class="flexed giftflexed">
                        <strong>Monthly Subscription</strong>
                        <p>
                            Empower your group or team members with our carefully curated group subscription package at discounted rates
                        </p>
                        <b>&#8358;1000</b>
                    </div>
                </div>
                <div class="senderwrapper mt-4">
                    <div class="flexedform">
                        <div class="sender">
                            <b >Who is this gift from?</b>
                            <p>
                                Already have an account?<a href="../login.html"> Sign in</a> for faster checkout
                            </p>
                            <form class="senderform">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="">First name: </label>
                                    <div class="col-sm-10">
                                    <input type="text" nameclass="form-control form-control-sm" class="inputs form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="colFormLabel">Your Email address: </label>
                                    <div class="col-sm-10">
                                        <input type="email" nameclass="form-control form-control-sm" class="inputs form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="flexedform">
                            <div class="sender">
                                <b>Recipient Information</b>
                                <form class="senderform">
                                    <div class="row mb-3">
                                        <label for="colFormLabel">Recipient email address:</label>
                                        <div class="col-sm-10">
                                            <input type="email" nameclass="form-control form-control-sm" class="inputs form-control">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="colFormLabelSm" class="">Message:</label>
                                        <div class="col-sm-10">
                                        <textarea type="text" nameclass="form-control form-control-sm" class="inputs form-control"></textarea>
                                        </div>
                                    </div>
                                    <small>Leave them a note to receive with their gift</small>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn paymentbtn">Continue to payment</button>
            </div>
        </div>
        @include('includes.news.foot')
@endsection
