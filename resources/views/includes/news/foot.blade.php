<footer class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="journalafricafootertitle">about</p>
                <div class="borderheading"></div>
                <ul class="journalafricafooterlist">
                    <li><a href="{{route('about')}}" class="lists">About Us</a></li>
                    <li><a href="{{route('terms')}}" class="lists">Terms and Conditions</a></li>
                    <li><a href="{{route('ethics')}}" class="lists">Code of Ethics</a></li>
                    <li><a href="{{route('policy')}}" class="lists">Privacy Policy</a></li>
                    <li><a href="{{route('copyright')}}" class="lists">Copyright Policy</a></li>
                    <li><a href="{{route('faq')}}" class="lists">FAQs</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="journalafricafootertitle">products</p>
                <ul class="journalafricafooterlist">
                    <li><a href="" class="lists">The company</a></li>
                    <li><a href="" class="lists">Journal Africa Intelligence</a></li>
                    <li><a href="{{route('podcasts.all')}}" class="lists">Podcast</a></li>
                    <li><a href="" class="lists">Gender and human rights</a></li>
                    <li><a href="{{route('advertise')}}" class="lists">Advertising</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <p class="journalafricafootertitle">connect</p>
                <ul class="journalafricafooterlist">
                    <li><a href="" class="lists">Contact Us</a></li>
                    <li><a href="" class="lists">Write for us</a></li>
                    <li><a href="{{route('news.sub')}}" class="lists">Subscription plan</a></li>
                    <li><a href="" class="lists">Newsletter</a></li>
                    {{-- <li><a href="" class="lists">Site map</a></li> --}}
                </ul>
            </div>
            <div class="col-md-3">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/journal-africa-logo.png')}}" alt="" class="journalafricafooterlogo">
                </a>
            </div>
        </div>
    </div>
</footer>
<div class="subfooter">
    <div class="journalafricasubfooterflex">
        <div class="initialflexed">
            <div>
                <p><a href="" class="bordered">Journal Africa Newspaper </a><span class="spannedfooter"> All rights Reserved &#169; 2023</span></p>
            </div>
        </div>
        <div>
            <ul>
                <li class="listssocial twitsocial">
                    <a href=""><i class="fa-brands fa-twitter"></i></a>
                </li>
                <li class="listssocial">
                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li class="listssocial">
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
