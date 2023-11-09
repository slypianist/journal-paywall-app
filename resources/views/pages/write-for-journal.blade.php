@extends('layouts.home')

@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">

<link rel="stylesheet" href="{{asset('assets/news/css/write.css')}}">


@endpush

@section('h-content')

<div class="container">
    <div class="wrapper">
        <hr class="dividers">
            <h4 class="titled">write for us</h4>
        <hr class="dividers">
        <div>
            <h4 class="jounalTitl">Writing for journal africa</h4>
            <p>
                Journal Africa is open to the plurality and diversity of ideas that are backed with hard facts and evidence. <br> <br>
                We accept two categories of people interested in writing for our platform.
            </p>
        </div>
        <div class="writers-Categories">
            <b>Regular Writers -</b><p>
                Journal Africa maintains a register of writers who contributes regularly to its publication in any of the listed categories - Discover Africa (Destinations, People, Lifestyle and Culture), Politics and Government, Business and economy, Policy and Development, In-depth Africa, Gender and Human Rights. <br> <br> Such writers must be people with in-depth knowledge, expertise and experience in their chosen categories and their contributions must be well researched with hard facts and evidences. <br> <br> Contributors interested in this category must submit i) a pitch detailing the category and what they will be writing about, ii. Submit a short bio of themselves for review and approval. <br> <br> Regular writers should send their pitches to info@journal.africa with writers pitch as the subject. The editorial team will review the pitch and contact the writer as soon as possible. Please note that only authors of accepted pitches shall be contacted.
            </p>
        </div>

        <div class="writers-Categories">
            <b>Guest Writers -</b><p>
                Guest articles are accepted for publication on the Journal Africa platform. Unless on rare occasions, such articles, despite the rigorous editorial process it will go through will be considered as opinion articles and published under our commentary category. We accept 1,000 to 2,500 words article that are original thoughts on the broader issues in the Africa continent and they must have a clear narrative, must not be promotional or branded and must conform with our editorial standard and follow our editorial guidelines.  <br> <br> Guest articles should be submitted to info@journal.africa with guest article as the subject of the email. <br> <br> We look forward to working with you as we tell the real African story. <br> <br> Best regards, <br> The Editor in Chief Journal Africa Newspaper Limited
            </p>
        </div>
    </div>
</div>

@include('includes.news.foot')
@endsection
