@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/sub.css')}}">
@endpush
@section('h-content')

        <div class="wrapper" id="groupsubform">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div class="journalafricgroupsubwrap">
                            <img src="images/groupsub.jpg" alt="group subscription" class="groupsubimg">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="subtn mt-5">
                            <strong>Provide your information</strong>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo</p>
                            <form>
                                <div class="row form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Business Email" aria-label="Business Email">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Business Phone" aria-label="Business Phone">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Job Title" aria-label="Job Title">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Company" aria-label="Company">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Industry" aria-label="Industry">
                                    </div>
                                    <div class="col">
                                      <input type="text" class="form-control" placeholder="Country" aria-label="Country">
                                    </div>
                                </div>
                                <div class="row form-row">
                                    <div class="col">
                                        <select id="subscription amount" class="form-select">
                                            <option selected>Subscription Qty</option>
                                            <option>10-20 Subscriptions</option>
                                            <option>21-50 Subscriptions</option>
                                            <option>51-100 Subscriptions</option>
                                        </select>
                                    </div>
                                    <div class="col">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" id="gridCheck">
                                      <label class="form-check-label labeled" for="gridCheck">
                                        I would like to receive updates and information about Corporate Subscriptions, recommended content and special offers from Journal Africa.
                                      </label>
                                    </div>
                                </div>
                                <div class="centerbtn">
                                    <button type="submit" class="regsiter-btn">Get Pricing</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="subenefitswrap mt-5">
            <div class="container">
                <h2 class="subenefitTitle">subscription benefits</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="content">
                            <div class="subenefiticon"><i class="fa-solid fa-mug-hot"></i></div>
                            <strong class="benefitsub">Benefit</strong>
                            <div class="benefit">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil unde libero doloribus iure laboriosam dicta architecto miodi saepe!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content">
                            <div class="subenefiticon"><i class="fa-solid fa-mug-hot"></i></div>
                            <strong class="benefitsub">Benefit</strong>
                            <div class="benefit">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil unde libero doloribus iure laboriosam dicta architecto miodi saepe!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content">
                            <div class="subenefiticon"><i class="fa-solid fa-mug-hot"></i></div>
                            <strong class="benefitsub">Benefit</strong>
                            <div class="benefit">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil unde libero doloribus iure laboriosam dicta architecto miodi saepe!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="content">
                            <div class="subenefiticon"><i class="fa-solid fa-mug-hot"></i></div>
                            <strong class="benefitsub">Benefit</strong>
                            <div class="benefit">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil unde libero doloribus iure laboriosam dicta architecto miodi saepe!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content">
                            <div class="subenefiticon"><i class="fa-solid fa-mug-hot"></i></div>
                            <strong class="benefitsub">Benefit</strong>
                            <div class="benefit">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil unde libero doloribus iure laboriosam dicta architecto miodi saepe!
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="content">
                            <div class="subenefiticon"><i class="fa-solid fa-mug-hot"></i></div>
                            <strong class="benefitsub">Benefit</strong>
                            <div class="benefit">
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil unde libero doloribus iure laboriosam dicta architecto miodi saepe!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricebtn">
                    <a class="button" href="#groupsubform">Get Pricing</a>
                </div>
            </div>
        </div>

        @include('includes.news.foot')
    @endsection
