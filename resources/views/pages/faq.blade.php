@extends('layouts.home')

@push('styles')

<link rel="stylesheet" href="{{asset('assets/news/css/home.css')}}">
<link rel="stylesheet" href="{{asset('assets/news/css/faq.css')}}">

@endpush

@section('h-content')

<div class="container">
    <div class="wrapper">
        <button class="accordion">Q: What is Journal Africa?</button>
        <div class="panel">
            <p>
                Journal Africa is a Pan-African publication dedicated to providing you with impartial and authoritative news stories. Published as a digital-only subscription service (Journal Africa) and a free to read news service (News Journal Africa), both publications focuses on well research and fact based contents produced by our in-house analysts, reporters spread across the continent and other verified contributors.The Premium service comes in different subscription plans to enable access to premium contents on the site. Please visit our subscription page for more or send a mail to contact@journal.africa
            </p>
        </div>

        <button class="accordion">Q: How can I register an account on journal africa?</button>
        <div class="panel">
            <p>
                Click on the sign up button in the home page&#39;s header and enter your personal details. A confirmation email will be sent to you. Click on the email to confirm and your account will be registered.
            </p>
        </div>

        <button class="accordion">Q: Where can I find my personal account on the website?</button>
        <div class="panel">
            <p>
                If you are not signed in, please click on the button sign in at the top right of your screen. Enter your login details, then click on “My Account at the top right hand corner of your screen and you will be directed to your personal account.
            </p>
        </div>

        <button class="accordion">Q: How can I log in my account?</button>
        <div class="panel">
            <p>
                Click on the button sign in in the homepage&#39;s header or anywhere else on the site. Enter your registered email and password and you will be logged in to your account.
            </p>
        </div>

        <button class="accordion">Q: I have created an account but I can&#39;t login?</button>
        <div class="panel">
            <p>
                You don&#39;t have an active account, in which case, please create an account as you subscribe. You&#39;re a subscriber but you have a problem with your login details, in which case, please ask for a password change. Click on &#39;Forgot password&#39; in the login page and you will receive a new password in your email box.
            </p>
        </div>

        <button class="accordion">Q: I forgot my password, what can I do?</button>
        <div class="panel">
            <p>
                If you have forgotten your password, click on &#39;Forgot password?&#39;  and enter the email address linked to your Journal Africa customer account. You will receive an email with a link to change your password within a minute in this email box.
            </p>
        </div>
        <button class="accordion">Q: How can I change my password?</button>
        <div class="panel">
            <p>
                To change your password, go in your personal account&#39;s My profile section. First, enter your current password. Then choose you new password and confirm it. Do not forget to click on Save.
            </p>
        </div>
        <button class="accordion">Q: Can I access contents on Journal Africa after registering an account?</button>
        <div class="panel">
            <p>
                Creating an account on Journal Africa give you access to free contents in the website and app. However, to access premium contents, you will need to subscribe to one of our subscription offers.
            </p>
        </div>
        <button class="accordion">Q: How can I check when my account subscription will expire?</button>
        <div class="panel">
            <p>
                To find your subscription expiry, you just have to go in your personal account and click on My subscription section. The date of your subscription&#39;s expiration will appear on the screen.
            </p>
        </div>
        <button class="accordion">Q: Can I change my subscription to different subscription offers?</button>
        <div class="panel">
            <p>
                Yes, you can change your subscription from any of the subscription offers (monthly, quarterly or yearly) to any one your choice.
            </p>
        </div>
        <button class="accordion">Q: How do I subscribe to Journal Africa?</button>
        <div class="panel">
            <p>
                1. Click on the button &#39;Subscribe&#39; or &#39;sign up&#39; in the homepage&#39;s header or anywhere else on the site. 2. Choose the subscription offer and the currency you want to pay with. 3. Enter your personal information and your payment detail to subscribe. 4. Verify your subscription from the email link sent to you. 5. Enjoy your subscription on Journal Africa.
            </p>
        </div>
        <button class="accordion">Q: What are the benefits of subscribing to Journal Africa?</button>
        <div class="panel">
            <p>
                A subscription to Journal Africa gives you an unlimited access to the Journal Africa website and mobile app optimized for all screens with in-depth analysis, correct to detail exclusive stories, expert curation and expansive coverage of Africa. You will also receive our exclusive newsletters and special benefits exclusive to premium users only.
            </p>
        </div>
        <button class="accordion">Q: What are the differents subscription offers?</button>
        <div class="panel">
            <p>
                The monthly subscription includes a full access to all Journal Africa digital content and our exclusive newsletters. It also gives you access to special benefits that may be available from time to time. This offer is to be paid every month at the prevailing subscription rate. The quarterly subscription includes a full access to all Journal Africa digital content and our exclusive newsletters. It also gives you access to special benefits that may be available from time to time. This offer is to be paid every quarter at the prevailing subscription rate. The annual subscription includes a full access to all Journal Africa digital content and our exclusive newsletters. It also gives you access to special benefits that may be available from time to time. This offer is to be paid every year at the prevailing subscription rate. The corporate plan is made for a team. Please contact us for a bespoke access deal to fit your needs
            </p>
        </div>
        <button class="accordion">Q: Is my subscription automatically renewable?</button>
        <div class="panel">
            <p>
                Yes, your subscription is renewed automatically at the end of your current subscription depending on the subscription offer you choose.
            </p>
        </div>
        <button class="accordion">Q: How can I cancel my subscription to Journal report?</button>
        <div class="panel">
            <p>
                To cancel your subscription, go into your account, in the My subscription section and click on &#39;Cancel subscription&#39;. You will then receive a confirmation email.
            </p>
        </div>
        <button class="accordion">Q: Can I cancel my subscription?</button>
        <div class="panel">
            <p>
                Yes, you can cancel your subscription at any time, but your current subscription will remain valid until the period of its expiration. To cancel your subscription, please proceed to your personal account section and click on &#39;cancel my account.
            </p>
        </div>
        <button class="accordion">Q: Can I receive a refund after cancelling my subscription?</button>
        <div class="panel">
            <p>
                By purchasing your subscription, you agree that we may start your subscription immediately. If you change your mind and cancel your subscription, you will not be entitled to a refund, but your current subscription will remain valid and active until the stated expiry date and you will not be debited for a renewal.
            </p>
        </div>
        <button class="accordion">Q: Can&#39;t find what you&#39;re looking for</button>
        <div class="panel">
            <p>
                Send us a mail to <a href="contact@journal.africa">contact@journal.africa</a> and one of our customer support advocate will respond to you.
            </p>
        </div>
    </div>
</div>

@include('includes.news.foot')
<script src="{{asset('assets/news/js/accordion.js')}}"></script>
@endsection
