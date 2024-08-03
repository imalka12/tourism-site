@extends('layouts.web-master')

@section('page-content')
    @include('layouts.partials.home-banner')

    @include('layouts.partials.book-tour')

    @include('layouts.partials.home-services')

    @include('layouts.partials.home-testimonials')

    @include('layouts.partials.home-popular-attractions')

    @include('layouts.partials.home-attractions-by-month')

    {{-- @include('layouts.partials.home-tour-types-grid') --}}
    @include('layouts.partials.holiday-packages-carousel')

    @include('layouts.partials.home-blog-fleet')

    <!-- travel-guide:start -->
    <div class="container home-guide-srilanka-sction">
        <div class="row">
            <div class="col">
                <h1 class="text-center home-travel-tip-heading">A Complete Travel Guide of Sri Lanka </h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="text-center home-travel-tip-subheading">Travel Tips for Sri Lankan Holidays</p>
                <p class="text-center home-travel-tip-text">Any trip abroad needs a check-list of what you should have with
                    you to ensure that your visit goes without a hitch. Sri Lanka is no exception and being in the tropics
                    means there are some specific items that we advise you to include:</p>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="text-center home-travel-tip-subheading">When To Visit Sri Lanka</p>
                <p class="text-center home-travel-tip-text">Sri Lanka is a round-the-year destination for the visitors who
                    seek for sun and sea the best time to visit the island is from November to April. The Southwestern
                    coastal area, where the most of the beach resorts are located.Kalpitiya, located in the western ( North
                    Western)coast has been declared a new tourist attraction. Many development projects have also been
                    planned such as hotels and other infrastructure to make the East a new tourist destination in Sri Lanka.
                    The central highlands are pleasantly cool and relatively dry from January to April. The peak season is
                    mid December to mid January and March-April during Easter with a mini peak season in July and August
                    when festivals and pageants are held through the country.</p>
                <a class="btn btn-lg text-uppercase findmore-button" role="button"
                    href="{{ route('site.travel-guide') }}">Find Out More</a>
            </div>
        </div>
    </div>
    <!-- travel-guide:start -->


    @include('layouts.partials.footer-quick-links')
@endsection

@push('custom-css')
    <style>
        .grid-sizer {
            width: 300px;
            height: 300px;
        }

        .grid-item {
            width: 300px;
            height: 300px;
            padding: 15px;
        }

        .grid-item-width2 {
            width: 600px;
            height: 600px;
        }
    </style>
@endpush

@push('custom-js')
    <script defer src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
    <script defer src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.js"></script>
    <script defer src="{{ asset('assets/js/page-specific/home.js') }}"></script>
@endpush
