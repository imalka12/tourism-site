<div class="container holiday-package-section">
    <div class="row">
        <div class="col home-package-area" style="padding-bottom: 15px;">
            <span class="home-packages-subheading">Find Your<br></span>
            <span class="home-packages-heading">Holiday Package</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-xl-12 col-lg-12">
            <div class="grid" id="holiday_types_grid">
                <div class="grid-sizer"></div>
                @php
                    $isFirst = true;
                @endphp
                @foreach ($tourTypes->shuffle()->take(5) as $type)
                    <div class="grid-item grid-item{{ $isFirst ? '-width2' : '' }}">
                        <img class="img-fluid lazyload"
                            data-src="{{ imageUrl($type->image, $isFirst ? ['w' => 570, 'h' => 570, 'fit' => 'crop'] : ['w' => 285, 'h' => 285, 'fit' => 'crop']) }}">
                        <div class="text-center home-package-text-area" style="color: #ffffff;">
                            <h1 class="text-center heading_Findoutmore">
                                {{ sprintf('%s %s', ucwords($type->title), 'Holiday') }}</h1>
                            <a class="btn btn-lg text-uppercase findmore-white" role="button"
                                style="font-family: 'Titillium Web', sans-serif;"
                                href="{{ route('site.tours-by-type', $type->slug) }}">Find Out More</a>
                        </div>
                    </div>
                    @php
                        $isFirst = false;
                    @endphp
                @endforeach
            </div>
        </div>
    </div>
    <!-- Start Find Your Holiday Packages New -->

    <!-- <style>
        .grid-container {
            display: grid;
            grid-template-columns: auto auto;
        }
        .grid-img {
            width: 300px;
            height: 300px;
        }

        .grid-b-img{
            width: 600px;
            height: 600px;
        }

        .home-package-text-area-new {
            /* position: absolute; */
            z-index: 10;
            margin-top: -200px;
            padding: 10px 50px;
        }
    </style>

    <div class="row">
        <div class="col grid-b-img">
            <img class="img-fluid lazyloaded" data-src="https://thetravellanka.com/img/tour-types/April2020/HPyXEP3vpY728FIB7a2G.jpg?w=570&amp;h=570&amp;fit=crop&amp;q=50&amp;fm=webp" src="https://thetravellanka.com/img/tour-types/April2020/HPyXEP3vpY728FIB7a2G.jpg?w=570&amp;h=570&amp;fit=crop&amp;q=50&amp;fm=webp">
                <div class="text-center home-package-text-area-new" style="color: #ffffff;">
                        <h1 class="text-center heading_Findoutmore">Nature Holiday</h1>
                        <a class="btn btn-lg text-uppercase findmore-white" role="button" style="font-family: 'Titillium Web', sans-serif;" href="https://thetravellanka.com/maldives-tours?nature">Find Out More</a>
                </div>
        </div>
        <div class="col" style="width: 600px; height: 600px;">
            <div class="grid-container">
                <div class="grid-img">
                    <img class="img-fluid lazyloaded" data-src="https://thetravellanka.com/img/tour-types/April2020/OGP5Ehq04pP9hAPAryQa.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp" src="https://thetravellanka.com/img/tour-types/April2020/OGP5Ehq04pP9hAPAryQa.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp">
                    <div class="text-center home-package-text-area-new" style="color: #ffffff;">
                        <h1 class="text-center heading_Findoutmore">Local Lifestyle Holiday</h1>
                        <a class="btn btn-lg text-uppercase findmore-white" role="button" style="font-family: 'Titillium Web', sans-serif;" href="https://thetravellanka.com/maldives-tours?local-lifestyle">Find Out More</a>
                    </div>
            </div>
                <div class="grid-img">
                    <img class="img-fluid lazyloaded" data-src="https://thetravellanka.com/img/tour-types/April2020/FeAKTNQ1On01vMWsesjM.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp" src="https://thetravellanka.com/img/tour-types/April2020/FeAKTNQ1On01vMWsesjM.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp">
                    <div class="text-center home-package-text-area-new" style="color: #ffffff;">
                        <h1 class="text-center heading_Findoutmore">Wildlife Holiday</h1>
                        <a class="btn btn-lg text-uppercase findmore-white" role="button" style="font-family: 'Titillium Web', sans-serif;" href="https://thetravellanka.com/maldives-tours?wildlife">Find Out More</a>
                    </div>
            </div>
            <div class="grid-img">
                    <img class="img-fluid lazyloaded" data-src="https://thetravellanka.com/img/tour-types/April2020/Z4qJvfPVRhjOyCKzkJJb.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp" src="https://thetravellanka.com/img/tour-types/April2020/Z4qJvfPVRhjOyCKzkJJb.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp">
                    <div class="text-center home-package-text-area-new" style="color: #ffffff;">
                        <h1 class="text-center heading_Findoutmore">Maldives Tours Holiday</h1>
                        <a class="btn btn-lg text-uppercase findmore-white" role="button" style="font-family: 'Titillium Web', sans-serif;" href="https://thetravellanka.com/maldives-tours?maldives-tours">Find Out More</a>
                    </div>
            </div>
            <div class="grid-img">
                    <img class="img-fluid lazyloaded" data-src="https://thetravellanka.com/img/tour-types/April2020/7rcHFOQTJmFWY9IUIKXr.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp" src="https://thetravellanka.com/img/tour-types/April2020/7rcHFOQTJmFWY9IUIKXr.jpg?w=285&amp;h=285&amp;fit=crop&amp;q=50&amp;fm=webp">
                    <div class="text-center home-package-text-area" style="color: #ffffff;">
                        <h1 class="text-center heading_Findoutmore">Beach Relaxation Holiday</h1>
                        <a class="btn btn-lg text-uppercase findmore-white" role="button" style="font-family: 'Titillium Web', sans-serif;" href="https://thetravellanka.com/maldives-tours?beach-relaxation">Find Out More</a>
                    </div>
            </div>
        </div>
    </div>
</div> -->

    <!-- End Find Your Holiday Packages New -->
</div>
