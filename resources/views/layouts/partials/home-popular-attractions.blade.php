<div class="container home-attractions-section">
    <div class="home-attractions-bg"
        style="background-image: url('assets/img/attractions-bg.jpg');background-position: center;background-size: cover;background-repeat: no-repeat;">
        <div class="row">
            <div class="col d-lg-inline">
                <div class="row">
                    <div class="col attractions-left-text-area">
                        <span class="attractions-left-text-area">Most Popular Attractions in</span>
                        <span class="attrections-sl-text">Sri Lanka</span>
                    </div>
                    <div class="col-lg-6 d-none d-sm-none d-lg-block visit-tambapanni">
                        <!--<img class="img-fluid lazyload" data-src="assets/img/visit-tambapanni.png">-->
                    </div>
                </div>
                <div class="d-none d-sm-none d-lg-block attractions-left-bottom"
                    style="font-family: 'Titillium Web', sans-serif;">
                    <h1 style="padding-left: 15px;color: #ffffff;font-size: 30px;">Welcome to Sri Lanka</h1>
                    <p style="color: #ffffff;padding-left: 15px;">Endless beaches, timeless ruins, welcoming people,
                        oodles of elephants, rolling surf, cheap prices, fun trains, famous tea and flavourful food make
                        Sri Lanka irresistible.</p>
                </div>
            </div>
            <div class="col">
                <div class="carousel slide" data-ride="carousel" id="attraction_types_home_carousel"
                    style="margin: 30px;">
                    <div class="carousel-inner" role="listbox">
                        @php $c1in1 = 0; @endphp
                        @foreach ($attractionTypes as $attractionType)
                            <div class="carousel-item {{ $c1in1 == 0 ? 'active' : '' }}">
                                <img class="img-fluid w-100 d-block lazyload"
                                    data-src="{{ imageUrl($attractionType->image, ['w' => 535, 'h' => 619, 'fit' => 'crop']) }}"
                                    alt="{{ $attractionType->title }}">
                                <div class="text-center attractions-slider-text-bg">
                                    <h1 class="text-center"
                                        style="font-family: 'Alfa Slab One', cursive;font-weight: normal;color: #ffffff;letter-spacing: 1px;font-size: 27px;text-shadow: 0 0 3px #1e1e1e;">
                                        {{ $attractionType->title }}
                                    </h1>
                                    <p lang="en" class="text-center"
                                        style="color: rgb(255,255,255);font-family: 'Titillium Web', sans-serif;">
                                        {{ substr($attractionType->description, 0, 100) }}...
                                        {{-- {{ $attractionType->description }} --}}
                                    </p>
                                    <a href="{{ route('site.attraction-type', $attractionType->slug) }}"
                                        class="btn btn-lg findmore-white" role="button"
                                        style="font-family: 'Titillium Web', sans-serif;">Find Out More</a>
                                </div>
                            </div>
                            @php $c1in1++; @endphp
                        @endforeach
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#attraction_types_home_carousel" role="button"
                            data-slide="prev"></a>
                        <a class="carousel-control-next" href="#attraction_types_home_carousel" role="button"
                            data-slide="next"></a>
                    </div>
                    <ol class="carousel-indicators">
                        @php $c1in = 0; @endphp
                        @foreach ($attractionTypes as $attractionType)
                            <li data-target="#attraction_types_home_carousel" data-slide-to="{{ $c1in }}"
                                {{ $c1in == 0 ? 'class="active"' : '' }}></li>
                            @php $c1in++; @endphp
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
