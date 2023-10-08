@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/sub.css')}}">
@endpush
@section('h-content')

<p class="card-text">

        <div class="container mt-5" id="susbscriptions">
            <div>
                <h2 class="text-center mb-2">
                    Expand your perspective with our in-dept coverage of africa
                </h2>
                <p class="text-center">
                    Choose Your Journal Africa Subscription
                </p>
                <p class="text-center">
                    Pay from Nigeria/Pay from Outside Nigeria <br>
                    <span class="cursored">{{ $plans['data'][0]['currency'] }}</span> <span class="cursored">/ USD</span>
                </p>
            </div>
            <div class="subscription-wrapper">
                <div class="sub-type">
                    <div class="card text-center wrap" style="width: 18rem;">
                        <span class="sub-option">{{ $plans['data'][0]['name'] }}</span>
                        <h4 class="priced"><b>	&#8358;{{ $plans['data'][0]['amount'] / 100 }}</b></h4>
                        <p>You can cancel anytime</p>
                        <b>What You Get</b>
                        <ul>
                            <li class="journalafricasub">One {{ $plans['data'][0]['interval'] }} unlimited access to the journal africa website and app</li>
                            <li class="journalafricasub">Access to Daily and Weekly Newsletters.</li>
                            <li class="journalafricasub">Daily update of Africa in Brief.</li>
                            <li class="journalafricasub">Unlimited access to our digital archive.</li>
                            <li class="journalafricasub">Access to Journal Africa events at discounted rates.</li>
                        </ul>
                      {{--   <a class="btn-style" href="{{route('subscribe')}}">Subscribe now</a> --}}

                        <form action="{{route('subscribe')}}" method="POST">
                            <input type="hidden" name="plan" value="{{$plans['data'][0]['plan_code']}}">
                        <input type="hidden" name="description" value="{{$plans['data'][0]['description']}}">
                        <input type="hidden" name="amount" value="{{$plans['data'][0]['amount']}}">

                            <button type="submit" class="btn-style">Subscribe</button>
                            @csrf
                        </form>
                    </div>
                </div>
                <div class="sub-type">
                    <div class="card text-center wrap regwrap" style="width: 18rem;">
                        <span class="sub-option">Get a Free Account</span>
                        <p>Dont't want to subscribe to our premium package?</p>
                        <p>Sign up to a free account</p>
                        <b>WHAT YOU GET?</b>
                        <ul>
                            <li class="journalafricasub regs">
                                Limited Access to articles on the Journal Africa Website and Apps
                            </li>
                            <li class="journalafricasub">Daily update of Africa in Brief</li>
                        </ul>
                        <a class="btn-style regbtn" href="{{route('reader.register')}}">Register now</a>
                    </div>
                </div>


                @foreach ($plans['data'] as $index => $plan)
                @if ($index > 0) <!-- Skip the first plan -->

                <div class="sub-type">
                    <div class="card text-center wrap" style="width: 18rem;">
                        <span class="sub-option">{{$plan['name']}}</span>
                        <h4 class="priced"><b>	&#8358;{{$plan['amount']}}</b></h4>
                        <p>You can cancel anytime</p>
                        <b>What You Get</b>
                        <ul>
                            <li class="journalafricasub">One {{$plan['interval']}} unlimited access to the journal africa website and app.</li>
                            <li class="journalafricasub">Access to Daily and Weekly Newsletters.</li>
                            <li class="journalafricasub">Daily update of Africa in Brief.</li>
                            <li class="journalafricasub">Unlimited access to our digital archive.</li>
                            <li class="journalafricasub">Access to Journal Africa events at discounted rates.</li>
                        </ul>
                       {{--  <a class="btn-style" href="{{route('subscribe')}}">Subscribe now</a> --}}
                        <form action="{{route('subscribe')}}" method="POST">
                            <input type="hidden" name="plan" value="{{$plan['plan_code']}}">
                        <input type="hidden" name="description" value="{{$plan['description']}}">
                        <input type="hidden" name="amount" value="{{$plan['amount']}}">

                            <button type="submit" class="btn-style">Subscribe</button>
                            @csrf
                        </form>
                    </div>
                </div>

                @endif

                @endforeach


            </div>
            <div class="groupgiftwrapper">
                <div class="container">
                    <div class="groupwrapperflex">
                        <div class="flexed">
                            <strong>Group Subscription</strong>
                            <p>
                                Empower your group or team members with our carefully curated group subscription package at discounted rates
                            </p>
                            <a href="{{route('subscribe.gift')}}" class="journalafricalearnmore">Learn more</a>
                        </div>
                        <div class="flexed">
                            <strong>Gift a subscription</strong>
                            <p>
                                Give the gift of Journal Africa and share powerful insights on Africa with your friends, family and colleagues
                            </p>
                            <a href="{{route('subscribe.group')}}" class="journalafricalearnmore">Learn more</a>
                        </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="whyjournalafrica">
            <div class="container">
                <h5 class="headings">
                    why subscribe to journal africa?
                </h5>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button accordtitlt" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          expansive coverage of africa
                        </button>
                      </h2>
                      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p>
                                Stay on to our incisive coverage of the most important issues shaping the african continent.
                            </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed accordtitlt" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          read beyond the news
                        </button>
                      </h2>
                      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>
                            We help you cut through the noise and get you behind the news to know what is happening and why.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed accordtitlt" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          exclusive and expert curations
                        </button>
                      </h2>
                      <div id="collapseThree" class="accordion-collapse collapse accordtitlt" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <p>
                            Sharpen your understanding with our in-depth analysis and exclusive stories from expert who knows.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

        <div class="subswrapper mt-5">
            <div class="container">
                <p class="text-center subpremium">Understand Africa and the big stories shaping the continent with our correct to detail analysis</p>
                <h6 class="subTitle">subscribe to journal africa now</h6>
                <a href="#susbscriptions" class="backtop">Back To Top</a>
            </div>
        </div>
        @include('includes.news.foot')
@endsection
