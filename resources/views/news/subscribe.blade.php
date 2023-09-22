@extends('layouts.home')
@push('styles')
<link rel="stylesheet" href="{{asset('assets/news/css/subscribe.css')}}">
@endpush
@section('h-content')

<div class="container mt-5">
    <div>
        <h2 class="text-center mb-5">Let's put you ahead with the news</h2>
    </div>
    <div class="subscription-wrapper">
        <div class="sub-type">
            <div class="card text-center wrap" style="width: 18rem;">
                <span class="sub-option">Annual Subscription</span>
                <p class="journalafricasub">
                    12 month access to unlimited exclusive reports, expert curation, podcast and expansive coverage of Africa.
                </p>
                <h4 class="priced">	&#8358;44000</h4>
                <a class="btn-style" href="../login.html">Subscribe now</a>
            </div>
        </div>
        <div class="sub-type">
            <div class="card text-center wrap" style="width: 18rem;">
                <span class="sub-option">Quarterly Subscription</span>
                <p class="journalafricasub">
                    12 month access to unlimited exclusive reports, expert curation, podcast and expansive coverage of Africa.
                </p>
                <h4 class="priced">	&#8358;12000</h4>
                <a class="btn-style" href="../login.html">Subscribe now</a>
            </div>
        </div>
        <div class="sub-type">
            <div class="card text-center wrap" style="width: 18rem;">
                <span class="sub-option">Monthly Subscription</span>
                <p class="journalafricasub">
                    12 month access to unlimited exclusive reports, expert curation, podcast and expansive coverage of Africa.
                </p>
                <h4 class="priced">	&#8358;4450</h4>
                <a class="btn-style" href="../login.html">Subscribe now</a>
            </div>
        </div>
    </div>
</div>

@endsection
