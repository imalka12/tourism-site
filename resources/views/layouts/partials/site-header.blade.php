{{--@dd(itinerary_list_by_tour_types());--}}

<style>
    .fix-header {
        position: fixed;
        width: 100%;
        background: #fff;
        background-color: #fff;
        z-index: +999;
        box-shadow: 0px -7px 14px 0px;
    }

    .goog-te-menu-value {
        font-family: 'Titillium Web', sans-serif;
        text-transform: uppercase;
    }

    /* ============ desktop view ============ */
    @media all and (min-width: 992px) {
        .navbar .nav-item .dropdown-menu {
            display: none;
        }

        .navbar .nav-item:hover .nav-link {
            background-color: #edefec;
            color: #FFFFFF;
        }

        .navbar .nav-item:hover .dropdown-menu {
            display: block;
        }

        .navbar .nav-item .dropdown-menu {
            margin-top: 0;
        }
    }

    .navbar {
        padding-bottom: 0;
    }

    .navitem-with-dropdown {
        font-size: 14px;
        font-family: 'Titillium Web', sans-serif;
        color: #000;
        padding-top: 14px;
    }

    .nav-item {
        padding-top: -10px;
    }

    .active_nav {
        background-color: #edefec;
        color: #FFFFFF;
    }

    .nav-link {
        font-size: 13px;
        font-family: 'Titillium Web', sans-serif;
        color: #000 !important;
        padding-bottom: 12px;
    }

    #site-header-navbar-wrapper {
        padding-left: 15px;
        width: 100%;
        margin: 0 auto;
    }

    #site-header-social-links {
        padding-left: 0px;
        padding-right: 0;
        margin: 0px 0px 0px -10px;
    }

    /*enable multilevel dropdown*/
    .dropdown-menu .dropdown-toggle:after {
        border-top: .3em solid transparent;
        border-right: 0;
        border-bottom: .3em solid transparent;
        border-left: .3em solid;
    }

    .dropdown-menu .dropdown-menu {
        margin-left: 0;
        margin-right: 0;
    }

    .dropdown-menu li {
        position: relative;
    }

    .nav-item .submenu {
        display: none !important;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .nav-item .submenu-left {
        right: 100%;
        left: auto;
    }

    .dropdown-menu>li:hover {
        background-color: #f1f1f1
    }

    .dropdown-menu>li:hover>.submenu {
        display: block !important;
    }

    .internal-menu::after {
        content: "";
        display: inline-block;
        margin-left: 5px;
        /* Adjust the space between the text and the arrow */
        vertical-align: middle;
        border-top: 5px solid transparent;
        /* Size of the arrow */
        border-bottom: 5px solid transparent;
        /* Size of the arrow */
        border-left: 5px solid #000;
        /* Color and size of the arrow */
    }

    .dropdown-item {
        font-size: 13px;
        font-family: 'Titillium Web', sans-serif;
    }

    .internal-menu::after {
        font-size: 13px !important;
    }

    /* ============ desktop view .end// ============ */
</style>

<header class="">
    <div class="container d-none d-sm-none d-md-none d-lg-none d-xl-block">
        <div class="row headertop-space">
            <div class="col-xl-2">
                <div class="row header-top-left" style="width: 410px;">
                    <!-- <div class="col">
                        <div>
                            <p class="header-top-social-header">Follow us on</p>
                        </div>
                        <div> -->
                    <!-- <a href="{{ setting('social.facebook') }}">
                                <img class="img-fluid header-top-social-icons" src="{{ asset('assets/img/fb.png') }}">
                            </a> -->
                    <!-- <a href="#">
                                <img class="img-fluid header-top-social-icons" src="{{ asset('assets/img/fb.png') }}">
                            </a>
                            <a href="#">
                                <img class="img-fluid header-top-social-icons" src="{{ asset('assets/img/twitter.png') }}">
                            </a>
                            <a href="#">
                                <img class="img-fluid header-top-social-icons" src="{{ asset('assets/img/instagram.png') }}">
                            </a>
                            <a href="#">
                                <img class="img-fluid header-top-social-icons" src="{{ asset('assets/img/gplus.png') }}">
                            </a>
                        </div>
                    </div> -->
                    <!-- <div class="col header-top-translate-area">
                        <div id="google_translate_element"></div>
                    </div> -->
                </div>
            </div>
            <div class="col-xl-6 text-center">
                <a href="{{ route('site.home') }}"><img class="img-fluid logo-new" style="width: 200px; margin-top: 2px; margin-bottom:2px;" src="{{ asset('assets/img/ET-logo-new.png') }}"></a>
            </div>
            <div class="col-xl-4">
                <div class="row header-top-left" style="width: 410px;">
                    <div class="col header-top-translate-area_right">
                        <h4 class="header-top-contact_right" style="font-size: 1.4rem; ">+94 770 238 632</h4>
                    </div>
                    <div class="col">
                        <div>
                            <p class="header-top-social-header" style="margin-right: 7px; margin-top: 25px">Call US
                                Now
                                <a href="#">
                                    <img class="header-top-right-icon ml-2" src="{{ asset('assets/img/whatzapp.png') }}">
                                </a>
                                <a href="#">
                                    <img class="header-top-right-icon" src="{{ asset('assets/img/viber.png') }}">
                                </a>
                            </p>
                        </div>
                        <!-- <div style="text-align: right; margin-top: -8px;"> -->
                            <!-- <a href="whatsapp://send?abid=+94770238632&text=Hello">
                                <img class="header-top-right-icon" src="{{ asset('assets/img/whatzapp.png') }}">
                            </a>
                            <a href="viber://chat/?number=%2B+94770238632">
                                <img class="header-top-right-icon" src="{{ asset('assets/img/viber.png') }}">
                            </a>
                            <a href="https://line.me/R/">
                                <img class="header-top-right-icon" src="{{ asset('assets/img/line.png') }}">
                            </a> -->

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-none d-sm-none d-md-none d-lg-none d-xl-block main-menu-area">
        <div class="row">
            <div class="col-xl-12">
                <nav class="navbar navbar-light navbar-expand-xl text-center" style="padding-left: 0;">
                    <div class="container">
                        <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse header-menu-space left-header-space" id="navcol-1">
                            <ul class="nav navbar-nav">
                                <li class="nav-item {{ request()->routeIs('site.home') ? 'active_nav' : '' }}" role="presentation">
                                    <a class="nav-link text-uppercase" href="{{ route('site.home') }}">
                                        <img class="nav-home-image" src="{{ asset('assets/img/home-button.png') }}">
                                    </a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('site.tours-by-month') ? 'active_nav' : '' }}" role="presentation">
                                    <a class="nav-link text-uppercase navitem-with-dropdown" href="{{ route('site.tours-by-month') }}">Seasonal Tours</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('site.tailor-made') ? 'active_nav' : '' }}" role="presentation">
                                    <a class="nav-link text-uppercase navitem-with-dropdown" href="{{ route('site.tailor-made') }}">Customize Your Tour</a>
                                </li>
                                <li class="nav-item dropdown {{ request()->routeIs('site.holiday-destinations*') ? 'active_nav' : '' }}">
                                    <a class="dropdown-toggle nav-link text-uppercase navitem-with-dropdown" data-toggle="dropdown" aria-expanded="false" href="#">Tour
                                        Destinations</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach (destinations_list() as $destination)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.holiday-destinations', $destination->slug) }}">{{ $destination->title }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item dropdown {{ request()->routeIs('site.itinerary*') ? 'active_nav' : '' }}">
                                    <a class="dropdown-toggle nav-link text-uppercase navitem-with-dropdown" href="{{ route('site.tours-by-month') }}" data-toggle="dropdown"> Travel packages </a>
                                    <ul class="dropdown-menu">
                                        @foreach (itinerary_list_by_tour_types() as $tour_type)
                                        @if(count($tour_type['itineraries']) > 0)
                                        <li><a class="dropdown-item internal-menu text-uppercase" href="#">
                                                {{ $tour_type['type']->title }}
                                            </a>
                                            <ul class="submenu dropdown-menu">
                                                @foreach($tour_type['itineraries'] as $itinerary)
                                                <li>
                                                    <a class="dropdown-item text-uppercase" href="{{ route('site.itinerary', $itinerary->slug) }}">
                                                        {{ $itinerary->title }}
                                                    </a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        @endif
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item dropdown {{ request()->routeIs('site.activity*') ? 'active_nav' : '' }}">
                                    <a class="dropdown-toggle nav-link text-uppercase navitem-with-dropdown" data-toggle="dropdown" aria-expanded="false" href="#">activities</a>
                                    <div class="dropdown-menu" role="menu">
                                        @foreach (activity_list() as $activity)
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.activity', $activity->slug) }}">{{ $activity->title }}</a>
                                        @endforeach
                                    </div>
                                </li>
                                <li class="nav-item {{ request()->routeIs('site.offers') ? 'active_nav' : '' }}" role="presentation">
                                    <a class="nav-link text-uppercase navitem-with-dropdown" href="{{ route('site.offers') }}">offers</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('site.travel-guide') ? 'active_nav' : '' }}" role="presentation">
                                    <a class="nav-link text-uppercase navitem-with-dropdown" href="{{ route('site.travel-guide') }}">travel guide</a>
                                </li>

                                @php
                                $Crequest = request();
                                $isAboutRoute = $Crequest->routeIs('site.about') || $Crequest->routeIs('site.our-team') || $Crequest->routeIs('site.testimonials');
                                @endphp
                                <li class="nav-item dropdown {{ $isAboutRoute ? 'active_nav' : '' }}">
                                    <a class="dropdown-toggle nav-link text-uppercase navitem-with-dropdown" data-toggle="dropdown" aria-expanded="false" href="#">About Us</a>

                                    <div class="dropdown-menu" role="menu">
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.about') }}">About
                                            us</a>

                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.our-team') }}">Out
                                            Team</a>

                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.testimonials') }}">Feedbacks</a>

                                        {{-- <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        >Vehicle
                                            Fleet</a> --}}
                                    </div>
                                </li>

                                @php
                                $Crequest = request();
                                $isServicesRoute = $Crequest->routeIs('site.transport-options') || $Crequest->routeIs('site.hotels');
                                @endphp
                                <li class="nav-item dropdown {{ $isServicesRoute ? 'active_nav' : '' }}">
                                    <a class="dropdown-toggle nav-link text-uppercase navitem-with-dropdown" data-toggle="dropdown" aria-expanded="false" href="#">Our Services</a>
                                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                                        <!-- <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.useful-links') }}"
                                        >Useful Links</a>-->
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.transport-options') }}">Transport
                                            Services</a>
                                        <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.hotels') }}">Hotel
                                            reservation</a>

                                        {{-- <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        >Family
                                            offers</a> --}}

                                        {{-- <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        >Maldives
                                            Packages</a> --}}

                                        {{-- <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        >MICE</a> --}}

                                        {{-- <a class="dropdown-item text-uppercase" role="presentation" href="#"
                                        >Event
                                            management</a> --}}
                                    </div>
                                </li>
                                <li class="nav-item {{ request()->routeIs('site.contact') ? 'active_nav' : '' }}" role="presentation">
                                    <a class="nav-link text-uppercase navitem-with-dropdown" href="{{ route('site.contact') }}">contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </div>
    <div class="d-xl-none nav-area">
        <div id="site-header-navbar-wrapper" class="container-fluid text-center">
            <nav class="navbar navbar-light navbar-expand-xl text-center">
                <div class="container">
                    <a class="navbar-brand d-xl-none" href="{{ route('site.home') }}">
                        <img src="{{ asset('assets/img/TTLL_logo_S_Web.png') }}" width="125px"></a>
                    <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active text-uppercase" href="{{ route('site.home') }}">Home</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-uppercase" href="{{ route('site.tours-by-month') }}">Seasonal Tours</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-uppercase" href="{{ route('site.tailor-made') }}">Customize Your Tour</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#">Tour Destinations</a>
                                <div class="dropdown-menu" role="menu">
                                    @foreach (destinations_list() as $destination)
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.holiday-destinations', $destination->slug) }}">{{ $destination->title }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#">Travel packages</a>
                                <div class="dropdown-menu" role="menu">
                                    @foreach (itinerary_list() as $itinerary)
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.itinerary', $itinerary->slug) }}">{{ $itinerary->title }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#">activities</a>
                                <div class="dropdown-menu" role="menu">
                                    @foreach (activity_list() as $activity)
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.activity', $activity->slug) }}">{{ $activity->title }}</a>
                                    @endforeach
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-uppercase" href="{{ route('site.offers') }}">Offers</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-uppercase" href="{{ route('site.travel-guide') }}">Travel
                                    Guide</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#">About</a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.about') }}">About us</a>
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.our-team') }}">Out Team</a>
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.testimonials') }}">Feedbacks</a>
                                </div>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link text-uppercase" href="{{ route('site.contact') }}">contact</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="dropdown-toggle nav-link text-uppercase" data-toggle="dropdown" aria-expanded="false" href="#">Services</a>
                                <div class="dropdown-menu dropdown-menu-right" role="menu">
                                    {{-- <a class="dropdown-item text-uppercase" role="presentation"
                                       href="{{ route('site.useful-links') }}">Useful Links</a> --}}
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.transport-options') }}">Transport
                                        Services</a>
                                    {{-- <a class="dropdown-item text-uppercase" role="presentation"
                                       href="#">Vehicle
                                        Fleet</a> --}}
                                    <a class="dropdown-item text-uppercase" role="presentation" href="{{ route('site.hotels') }}">Hotel
                                        Reservation</a>
                                    {{-- <a class="dropdown-item text-uppercase" role="presentation" href="#">Family
                                        offers</a> --}}
                                    {{-- <a class="dropdown-item text-uppercase" role="presentation"
                                       href="#">Maldives
                                        Packages</a> --}}
                                    {{-- <a class="dropdown-item text-uppercase" role="presentation"
                                       href="#">MICE</a> --}}
                                    {{-- <a class="dropdown-item text-uppercase" role="presentation" href="#">Event
                                        Management</a> --}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>



@if (session('response_success'))
<div class="alert alert-success top-notification" style="width: 100%; border-radius: 0px; display:none; text-align: center;">
    {{ session('response_success') }}
</div>
@endif

@if ($errors->any())
<div class="container">
    <div class="alert alert-danger top-notification mb-0" style="width: 100%; border-radius: 0px; display: none;">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
</div>
@endif

<script>
    function handleScroll() {
        var scrollPosition = window.scrollY || window.pageYOffset;
        var headerElement = document.getElementsByTagName('header')[0];
        if (scrollPosition > 150) {
            headerElement.classList.add('fix-header');
        } else {
            headerElement.classList.remove('fix-header');
        }
    }

    window.addEventListener("scroll", handleScroll);
</script>