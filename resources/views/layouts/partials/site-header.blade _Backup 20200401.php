@if (session('response_success'))
<div class="alert alert-success top-notification" style="width: 100%; border-radius: 0px; display:none;">
    {{session('response_success')}}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger top-notification" style="width: 100%; border-radius: 0px; display: none;">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<style>
    .goog-te-menu-value{
        font-family: 'Titillium Web', sans-serif; 
    }
    /* ============ desktop view ============ */
@media all and (min-width: 992px) {
    .navbar .nav-item .dropdown-menu{ display: none; }
    .navbar .nav-item:hover .nav-link{   }
    .navbar .nav-item:hover .dropdown-menu{ display: block; }
    .navbar .nav-item .dropdown-menu{ margin-top:0; }
}   
/* ============ desktop view .end// ============ */
</style>
<header>
    <div class="container d-none d-sm-none d-md-none d-lg-none d-xl-block">
        <div class="row headertop-space">
            <div class="col-xl-5">
                <div class="row header-top-left" style="width: 445px;">
                    <div class="col">
                        <div>
                            <p class="header-top-social-header">Follow us on</p>
                        </div>
                        <div>
                            <a href="{{setting('social.facebook')}}">
                                <img class="img-fluid header-top-social-icons" src="{{asset('assets/img/fb.png')}}">
                            </a>
                            <a href="{{setting('social.twitter')}}">
                                <img class="img-fluid header-top-social-icons" src="{{asset('assets/img/twitter.png')}}">
                            </a>
                            <a href="{{setting('social.instagram')}}">
                                <img class="img-fluid header-top-social-icons" src="{{asset('assets/img/instagram.png')}}">
                            </a>
                            <a href="{{setting('social.google')}}">
                                <img class="img-fluid header-top-social-icons" src="{{asset('assets/img/gplus.png')}}">
                            </a>
                            <a href="{{setting('social.youtube')}}">
                                <img class="img-fluid header-top-social-icons" src="{{asset('assets/img/youtube.png')}}">
                            </a>
                        </div>
                    </div>
                    <div class="col header-top-translate-area">
                        <div id="google_translate_element"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 text-center">
                <a href="{{route('site.home')}}"><img class="img-fluid logo-new" src="{{asset('assets/img/TTL_WebLogo.png')}}"></a>
            </div>
           <!-- <div class="col-xl-2 text-center">
                <a href="{{route('site.home')}}"><img class="img-fluid logo-new" src="{{asset('assets/img/TTLL_logo_S_Web.png')}}"></a>
            </div>-->
            <div class="col-xl-5">
                <div class="row text-right">
                    <div class="col-xl-8" style="padding-right: 0px;">
                        <p class="header-topright-heading">Call Now</p>
                    </div>
                    <div class="col-xl-4" style="padding-left: 0px;padding-right: 0;margin: 0px;margin-left: -10px;">
                        <div>
                            <a href="whatsapp://send?abid=+94722377377&text=Hello">
                                <img class="header-top-right-icon" src="{{asset('assets/img/whatzapp.png')}}">
                            </a>
                            <a href="viber://chat/?number=%2B+94722377377">
                                <img class="header-top-right-icon" src="{{asset('assets/img/viber.png')}}">
                            </a>
                            <a href="https://line.me/R/">
                                <img class="header-top-right-icon" src="{{asset('assets/img/line.png')}}">
                            </a>
                            <a href="tel:+94722377377">
                                <img class="header-top-right-icon" src="{{asset('assets/img/imo.png')}}">
                            </a>
                            <a href="tel:+94722377377">
                                <img class="header-top-right-icon" src="{{asset('assets/img/video.png')}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="text-right header-top-contact-area">
                            <h4 class="header-top-contact">+94&nbsp; 722&nbsp; 377&nbsp; 377</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div>
                            <p class="header-top-email">Email: <a href="mailto:info@thetravellanka.com">info@thetravellanka.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none d-sm-none d-md-none d-lg-none d-xl-block main-menu-area" style="padding-right: 0px;padding-left: 0px;">
        <div class="row">
            <div class="col-xl-6" style="padding-right: 0px;padding-left: 0px;">
                <nav class="navbar navbar-light navbar-expand-xl text-center" style="padding-left: 0;">
                    <div class="container">
                        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse header-menu-space" id="navcol-1">
                            <ul class="nav navbar-nav left-header-space">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active text-uppercase" href="{{route('site.home')}}" style="font-size: 20px;font-family: 'Titillium Web', sans-serif;">
                                        <img class="nav-home-image" src="{{asset('assets/img/home-button.png')}}">
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;padding-top: 14px;">Holiday Destinations</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach(destinations_list() as $destination)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.holiday-destinations', $destination->slug)}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">{{$destination->title}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;padding-top: 14px;">holiday packages</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach (itinerary_list() as $itinerary)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.itinerary', $itinerary->slug)}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">{{$itinerary->title}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.tours-by-month')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;padding-top: 14px;">Tours by month</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;padding-top: 14px;">activities</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach (activity_list() as $activity)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.activity', $activity->slug)}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">{{$activity->title}}</a>
                                        @endforeach
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="col-xl-6">
                <nav class="navbar navbar-light navbar-expand-xl text-center" style="float: right;padding-right: 0;">
                    <div class="container">
                        <div class="collapse navbar-collapse header-menu-space" id="navcol-1">
                            <ul class="nav navbar-nav right-header-space">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.tailor-made')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;padding-top: 14px;">Tailor-made</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.offers')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;padding-top: 14px;">offers</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.travel-guide')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;padding-top: 14px;">travel guide</a>
                                </li>
                                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;padding-top: 14px;">About</a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.about')}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">About us</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.our-team')}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Out Team</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.testimonials')}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Testimonials</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"  style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Vehicle Fleet</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;padding-top: 14px;">Services</a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                       <!-- <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.useful-links')}}"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Useful Links</a>-->
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.transport-options')}}"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Transport Services</a>
                                        
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.hotels')}}"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Hotel reservation</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Family offers</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Maldives Packages</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">MICE</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Event management</a>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.contact')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;padding-top: 14px;">contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="d-xl-none nav-area">
        <div class="container-fluid text-center" style="padding-left: 15px;width: 100%;margin: 0 auto;">
            <nav class="navbar navbar-light navbar-expand-xl text-center">
                <div class="container">
                    <a class="navbar-brand d-xl-none" href="{{route('site.home')}}">
                        <img src="{{asset('assets/img/TTLL_logo_S_Web.png')}}" width="125px"></a>
                        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active text-uppercase" href="{{route('site.home')}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;">Holiday Destinations</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach(destinations_list() as $destination)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.holiday-destinations', $destination->slug)}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">{{$destination->title}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;">holiday packages</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach (itinerary_list() as $itinerary)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.itinerary', $itinerary->slug)}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">{{$itinerary->title}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.tours-by-month')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;">Tours by month</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;">activities</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach (activity_list() as $activity)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.activity', $activity->slug)}}"  style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">{{$activity->title}}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.tailor-made')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;">Tailor-made</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.offers')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;">Offers</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.travel-guide')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;">Travel Guide</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;">About</a>
                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.about')}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">About us</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.our-team')}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Out Team</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.testimonials')}}" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Testimonials</a>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{route('site.contact')}}" style="color: #000000;font-size: 14px;font-family: 'Titillium Web', sans-serif;">contact</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#" style="font-size: 14px;font-family: 'Titillium Web', sans-serif;color: #000;padding-top: 14px;">Services</a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{route('site.useful-links')}}"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Useful Links</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Transport Services</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Vehicle Fleet</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Hotel reservation</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Family offers</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Maldives Packages</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">MICE</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        style="font-size: 14px;font-family: 'Titillium Web', sans-serif;">Event management</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
