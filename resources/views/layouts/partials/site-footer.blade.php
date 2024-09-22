{{-- @include('layouts.partials.footer-quick-links') --}}

<!-- <div class="container logo-foot-section">
    <div class="row">
        <div class="col text-center"><img class="img-fluid" src="{{ asset('assets/img/logo-foot.png') }}"></div>
    </div>
</div> -->
<div class="container footer-section">
    <div class="row">
        <div class="col-md-4 col-lg-4" style="font-size: 14px; border-right: 1px solid #f1f1f1">
            <p class="footer-heading">Explore Thaprobana (Pvt) Ltd.</p>
            <p class="footer-text">Office: 569/A, Puttalam Road,<br>Kurunegala, Sri Lanka.</p>
            <p class="footer-text" style="font-family: 'Titillium Web', sans-serif;">Tel : +94 770 238 632 </p>
            <p class="footer-text" style="font-family: 'Titillium Web', sans-serif;">Skype: explorethaprobana<br></p>
            <p class="footer-text" style="font-family: 'Titillium Web', sans-serif;">Email: info@explorethaprobana.com<br>
            </p>
        </div>
        <div class="col-md-4 col-lg-2">
            <p class="footer-heading"
                style="font-family: &quot;ChunkFive-Regular&quot;;font-weight: bold;font-size: 18px;">Holiday Packages
            </p>
            <ul style="padding-left: 0px;">
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span class="footer-text">Nature & Wildlife</span>
                    </a>
                </li>
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span>Culture & Heritage</span>
                    </a>
                </li>
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span>Adventure</span>
                    </a>
                </li>
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span>Family</span>
                    </a>
                </li>
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span>Hiking / Eco / Camping</span>
                    </a>
                </li>

            </ul>
        </div>
        <div class="col-md-4 col-lg-2" style="border-right: 1px solid #f1f1f1">

            <ul style="padding-left: 0px;">
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span>Cycling</span>
                    </a>
                </li>
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span>Beach </span>
                    </a>
                </li>
                <li style="list-style: none;padding-bottom: 15px;">
                    <a class="footer-text" href="#">
                        <span>Wellness</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-4 col-lg-2" style="border-right: 1px solid #f1f1f1">
            <p class="footer-heading"
                style="font-family: &quot;ChunkFive-Regular&quot;;font-weight: bold;font-size: 18px;">Quick Links</p>
            <ul style="padding-left: 0px;">
                {{-- <li style="list-style: none;padding-bottom: 15px;"><a href="#"><span class="footer-text">Useful Links<br></span></a></li> --}}
                <li style="list-style: none;padding-bottom: 15px; "><a href="{{ route('site.tours-by-month') }}"><span
                            class="footer-text">Seasonal Tours<br></span></a></li>
                <li style="list-style: none;padding-bottom: 15px; "><a href="{{ route('site.tailor-made') }}"><span
                            class="footer-text">Customize Your Tour<br></span></a></li>
                <li style="list-style: none;padding-bottom: 15px; "><a class="footer-text"
                        href="{{ route('site.offers') }}"><span>Offers</span></a></li>
                <li style="list-style: none;padding-bottom: 15px;"><a class="footer-text"
                        href="{{ route('site.travel-guide') }}"><span>Travel
                            Guide</span></a></li>
                <li style="list-style: none;padding-bottom: 15px;"><a class="footer-text"
                        href="{{ route('site.testimonials') }}"><span>Feedbacks</span></a></li>
                <li style="list-style: none;padding-bottom: 15px;"><a class="footer-text"
                        href="{{ route('site.contact') }}"><span>Contact
                            Us </span></a></li>
            </ul>
        </div>
        <div class="col-md-4 col-lg-2">
            <p class="footer-heading"
                style="font-family: &quot;ChunkFive-Regular&quot;;font-weight: bold;font-size: 18px;">Services</p>
            <ul style="padding-left: 0px;">


                <li style="list-style: none;padding-bottom: 15px;"><a class="footer-text"
                        href="{{ route('site.transport-options') }}"><span>Transport
                            Services<br></span></a></li>

                <li style="list-style: none;padding-bottom: 15px;"><a class="footer-text"
                        href="{{ route('site.hotels') }}"><span>Hotel
                            reservation<br></span></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container text-center">
    <!-- <div class="row">
        <div class="col footer-bottom-section-line">
            <p class="footer-logo-heading">Our Memberships &amp; Accreditations :-</p>
            <div class="row">
                <div class="col"><a href="#"><img class="img-fluid lazyload"
                            data-src="{{ asset('assets/img/sltda.jpg') }}"></a></div>
                <div class="col"><a href="#"><img class="img-fluid lazyload"
                            data-src="{{ asset('assets/img/slaito.jpg') }}"></a></div>
                <div class="col"><a href="#"><img class="lazyload"
                            data-src="{{ asset('assets/img/asmet.jpg') }}"></a></div>
            </div>
        </div>
        <div class="col">
            <p class="footer-logo-heading">Review Us On</p>
            <div class="row">
                <div class="col-xl-3 text-left"><a href="#"><img class="img-fluid lazyload"
                            data-src="{{ asset('assets/img/lametayel-footer.jpg') }}"></a></div>
                <div class="col-xl-5 text-left"><a href="#"><img class="img-fluid lazyload"
                            data-src="{{ asset('assets/img/tripadvisor-footer.jpg') }}"></a></div>
                <div class="col-xl-4 text-left"><a href="#"><img class="img-fluid lazyload"
                            data-src="{{ asset('assets/img/trustpilot.jpg') }}"></a></div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col footer-hr-area">
                <hr class="footer-hr">
            </div>
            <div class="col footer-hr-area">
                <hr class="footer-hr">
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center" style="padding-top: 25px;">
        <div class="col-xl-6">
            <p class="footer-logo-heading">Follow us on:-</p>
            <div class="row">
                <div class="col"><a href="#"><img class="img-fluid lazyload"
                            data-src="{{ asset('assets/img/footer-fb.png') }}"></a></div>
                <div class="col"><a href="#"><img class="img-fluid lazyload"
                            data-src="{{ asset('assets/img/footer-instagram.png') }}"></a></div>
                <div class="col"><a href="#"><img class="lazyload"
                            data-src="{{ asset('assets/img/footer-twitter.png') }}"></a></div>
            </div>
        </div>
        <!-- <div class="col-xl-6">
            <p class="footer-logo-heading">Payment Option :-</p>
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-xl-4 text-left"><a href="#"><img class="img-fluid lazyload"
                                    data-src="{{ asset('assets/img/footer-paypal.png') }}"></a></div>
                        <div class="col-xl-4 text-left"><a href="#"><img class="img-fluid lazyload"
                                    data-src="{{ asset('assets/img/footer-visa-master.png') }}"></a></div>
                        <div class="col-xl-4 text-left"><a href="#"><img class="img-fluid lazyload"
                                    data-src="{{ asset('assets/img/footer-payhere.png') }}"></a></div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row d-none">
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/trip-advisor-bw.png') }}"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/twitter-bw.png') }}"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/snaptrip-bw.png') }}"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/facebook-bw.png') }}"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/instagram-bw.png') }}"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/youtube-bw.png') }}"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/google-ratings-bw.png') }}"></div>
        <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-auto"><img class="img-fluid lazyload"
                data-src="{{ asset('assets/img/lametayel-bw.png') }}"></div>
    </div>
</div>
<div class="container" style="padding-top: 25px;padding-bottom: 25px;">
    <div class="row">
        <div class="col">
            <p class="text-center" style="font-size: 11px; text-transform: uppercase;  color: #383838;">All Copyrights
                Reserved by&nbsp;Explore Thaprobana(Pvt) Ltd. - {{ date('Y') }} |

                Concept &amp; Design by <a href="https://www.mybooking.lk" target="_blank">Imalka Wijerathna</a>
            </p>
        </div>
    </div>
</div>
