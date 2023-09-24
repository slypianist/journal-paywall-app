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
        @foreach ($plans as $plan)

        <div class="sub-type">
            <div class="card text-center wrap" style="width: 18rem;">
                <span class="sub-option">{{$plan->name}}</span>
                <p class="journalafricasub">
                    {{$plan->description}}
                </p>
                <h4 class="priced">	&#8358;{{$plan->amount}}</h4>
                <a class="btn-style" href="">Subscribe now</a>
            </div>
        </div>

        @endforeach



    </div>
</div>

@endsection
