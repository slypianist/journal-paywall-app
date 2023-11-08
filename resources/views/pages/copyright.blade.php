@extends('layouts.home')

@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">

<link rel="stylesheet" href="{{asset('assets/news/css/copyright.css')}}">

@endpush

@section('h-content')

<div class="container">
    <div class="wrapper">
        <hr class="dividers">
            <h4 class="titled">journal africa newspaper copyright policy</h4>
        <hr class="dividers">
        <div>
            <p>
                This policy sets out how users are permitted to use our content and also explains the types of use that require a licence from Journal Africa. This policy forms part of our terms and conditions. <br> <br>
                We reserve the right to change this copyright policy from time to time by publishing an updated policy on Journal.Africa or associated websites, which shall become effective and replace any previous policy with effect from publication.
            </p>
            <strong>What is Copyright?</strong>
            <p>
                Copyright law gives the copyright owner, in this case, Journal Africa Newspaper Limited (“Journal Africa”) the exclusive right to control the use of copyright-protected works. All of the material published on Journal Africa and any other platform is protected by copyright law and should only be used with permission from Journal Africa or as set out below. <br> <br>
                Usage of any of our works without our permission may, therefore, infringe our copyright which can result in personal and corporate liability.
            </p>
           <div>
                <strong>
                    How may I use content produced by Journal Africa?
                </strong>
                <span>You may do the following</span>
                <ul class="journalAfrica-content">
                    <li>
                        View our content for your personal use on any device of your choice e.g. mobile phone, laptop, tablet or other electronic devices.
                    </li>
                    <li>
                        Print single copies of articles on paper for your personal use.
                    </li>
                    <li>
                        Share links to articles by using any sharing tools we make available.
                    </li>
                </ul>
           </div>
           <div>
                <strong>
                    How may I republish or redistribute Journal Africa content?
                </strong>
                <p>
                    Except as set out above, you may not copy Journal Africa content from Journal Africa website or any third party source of Journal Africa content such as social media and aggregators. <br> <br> You may not republish or redistribute full-text articles, for example by pasting them into emails or republishing them in any media, including websites, newsletters or more.
                </p>
           </div>
           <div>
                <strong>Am I allowed to copy or summarise limited parts of Journal Africa full text content?</strong>
                <p>
                    You may not republish or redistribute extracts or full-text articles (except as permitted by any sharing tools we make available).
                </p>
           </div>
           <div>
                <strong>How am I allowed to link to Journal Africa content?</strong>
                <p>
                    You cannot do anything other than making use of the content as set out above unless you buy the appropriate licence. By way of example only, this means that you cannot
                </p>
                <ul class="journalAfrica-content">
                    <li>
                        Copy, publish or redistribute full-text articles, photographs, graphics, tables or images in any way (except as permitted by any sharing tools we make available).
                    </li>
                    <li>
                        Create derivative works from our content, unless you are creating summarising the content                        </li>
                    <li>
                        Remove the copyright or trademark notice from any copies of Journal Africa content
                    </li>
                    <li>
                        Frame, harvest or scrape Journal Africa content or otherwise access Journal Africa content for similar purposes.
                    </li>
                </ul> <br> <br>
                <p>
                    To purchase a license, please email <a href="mailto:contact@journal.africa">contact@journal.africa</a>
                </p>
           </div>
        </div>
    </div>
</div>

@include('includes.news.foot')
@endsection
