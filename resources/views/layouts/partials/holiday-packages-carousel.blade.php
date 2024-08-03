<div class="container" style="padding-top: 50px;">
    <div class="row">
        <div class="col inner-other-package-area" style="margin-left: 30px !important;">
            <span class="inner-other-packages-subheading">Find Other<br></span>
            <span class="inner-other-packages-heading">Holiday Packages</span>
        </div>
    </div>
    <div class="row">
        <div class="col mt-5 p-0">
            {{-- owlcarousel --}}
            <div id="tour-packages-carousel-1" class="owl-carousel owl-theme">
                @foreach (tour_types_list() as $tourType)
                    <div class="item">
                        <img class="img-fluid lazyload"
                            data-src="{{ imageUrl($tourType->image, ['w' => 282.5, 'h' => 282.5, 'fit' => 'crop']) }}">
                        <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                            <h1 class="text-center"
                                style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                                {{ $tourType->title }}<br>Holiday</h1>
                            <a class="btn btn-lg text-uppercase package-findmore" role="button"
                                style="font-family: 'Titillium Web', sans-serif;"
                                href="{{ route('site.tours-by-type', $tourType->slug) }}">Find Out More</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="tour-packages-carousel-1-dots"></div>
        </div>
    </div>
</div> <!-- end:other packages -->

@push('custom-css')
    <link defer rel="stylesheet" href="{{ asset('assets/owl.carousel/assets/owl.carousel.min.css') }}">
    <link defer rel="stylesheet" href="{{ asset('assets/owl.carousel/assets/owl.theme.default.min.css') }}">
    <link defer rel="stylesheet" href="{{ asset('assets/css/page-specific/tour-package-types-carousel.css') }}">
@endpush

@push('custom-js')
    <script defer src="{{ asset('assets/owl.carousel/owl.carousel.min.js') }}"></script>
    <script defer src="{{ asset('assets/js/page-specific/tour-types-carousel.js') }}"></script>
@endpush
