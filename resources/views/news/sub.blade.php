@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/sub.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/submedia.css')}}">
@endpush
@section('h-content')

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
                    <span class="cursored">NGN</span> <span class="cursored">/ USD</span>
                </p>
            </div>
            <div class="subscription-wrapper">
                <div class="sub-type">
                    <div class="card text-center wrap" style="width: 18rem;">
                        <span class="sub-option">Premium Monthly</span>
                        <h4 class="priced">	&#8358;4000/$10</h4>
                        <div class="instance">
                            <p>
                                One month unlimited digital access to an expansive coverage of Africa <br> Billed Monthly
                            </p>
                            <div class="mb-4">
                                <a href="../login.html" class="subscribe-link"><b>Subscribe now</b></a>
                            </div>
                        </div>
                        <div>
                            <p class="cancel mt-2">You can cancel anytime</p>
                            <h5>WHAT YOU GET</h5>
                            <ul>
                                <li class="journalafricasub">
                                    One month unlimited access to the journal africa website and app
                                </li>
                                <li class="journalafricasub">
                                    Access to Daily and Weekly Newsletters
                                </li>
                                <li class="journalafricasub">
                                    Daily update of Africa in Brief
                                </li>
                                <li class="journalafricasub">
                                    Unlimited access to our digital achive
                                </li>
                                <li class="journalafricasub">
                                    Access to journal Africa events  at discounted rates
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="sub-type">
                    <div class="card text-center wrap" style="width: 18rem;">
                        <span class="sub-option">GET A FREE ACCOUNT</span>
                        <div class="instance">
                            <p>
                                Don't want to subscribe to our premium package? <br> Sign up for  free account
                            </p>
                        </div>
                        <div class="mt-4">
                            <h5>WHAT YOU GET</h5>
                            <ul class="mb-5">
                                <li class="journalafricasub free">
                                    Limited access to articles on the journal Africa Website and Apps
                                </li>

                                <li class="journalafricasub free">
                                    Daily update of Africa in Brief
                                </li>
                                <li class="journalafricasub free">
                                    Daily Newsletter
                                </li>
                            </ul>
                            <div class="mb-4">
                                <a href="../login.html" class="subscribe-link"><b>Register now</b></a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="sub-type">
                    <div class="card text-center wrap" style="width: 18rem;">
                        <span class="sub-option">Premium Yearly</span>
                        <h4 class="priced">	&#8358;20000/$40</h4>
                        <div class="instance">
                            <p>
                                One year unlimited digital access to an expansive coverage of Africa <br> Billed Yearly
                            </p>
                            <div class="mb-4">
                                <a href="../login.html" class="subscribe-link"><b>Subscribe now</b></a>
                            </div>
                        </div>
                        <div>
                            <p class="cancel mt-4">You can cancel anytime</p>
                            <h5>WHAT YOU GET</h5>
                            <ul>
                                <li class="journalafricasub">
                                    One year unlimited access to the journal africa website and app
                                </li>
                                <li class="journalafricasub">
                                    Access to Daily and Weekly Newsletters
                                </li>
                                <li class="journalafricasub">
                                    Daily update of Africa in Brief
                                </li>
                                <li class="journalafricasub">
                                    Unlimited access to our digital achive
                                </li>
                                <li class="journalafricasub">
                                    Full Access to journal Africa
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="groupgiftwrapper">
                <div class="container">
                    <div class="groupwrapperflex">
                        <div class="flexed">
                            <strong>Group Subscription</strong>
                            <p>
                                Empower your group or team members with our carefully curated group subscription package at discounted rates
                            </p>
                            <a href="./groupsub.html" class="journalafricalearnmore">Learn more</a>
                        </div>
                        <div class="flexed">
                            <strong>Gift a subscription</strong>
                            <p>
                                Give the gift of Journal Africa and share powerful insights on Africa with your friends, family and colleagues
                            </p>
                            <a href="./subgift.html" class="journalafricalearnmore">Learn more</a>
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

        <div class="support mt-3">
            <p>For More Questions, Contact <b>support@journal.africa</b></p>
        </div>

    @include('includes.news.foot')
    @endsection
