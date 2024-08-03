@extends('layouts.web-secondary')

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <img class="img-fluid w-100 d-block"
                    src="{{ imageUrl($activity->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop']) }}"
                    alt="{{ $activity->title }}">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">
                                OVERVIEW</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">
                                WHERE YOU CAN DO {{ $activity->title }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" role="tab" data-toggle="tab" href="#tab-3"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">MAP</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <div class="row">
                                <div class="col-xl-12 tour-package-left-area">
                                    <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">
                                        {{ $activity->title }}</h3>
                                    {!! str_replace(
                                        '<p>',
                                        '<p class="tour-package-text" style="font-family: \'Titillium Web\', sans-serif;">',
                                        $activity->description,
                                    ) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 tour-package-left-area">
                                    <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">where
                                        you can do {{ $activity->title }}</h3>

                                    <div class="grid">
                                        @if (!empty($cities) > 0)
                                            @php
                                                $__cities = count($cities) > 5 ? $cities->random(5) : $cities;
                                            @endphp
                                            @foreach ($__cities as $city)
                                                <div class="grid-item">
                                                    <img class="img-fluid"
                                                        src="{{ imageUrl($city->city->image, ['w' => 285, 'h' => 285, 'fit' => 'crop']) }}"
                                                        title="{{ $city->title }}">
                                                    <div class="text-center destination-package-text-area"
                                                        style="color: #ffffff;">
                                                        <h2 class="text-center"
                                                            style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                                                            {{ $city->city->title }}</h2>
                                                        <a class="btn btn-lg text-uppercase findmore-white" role="button"
                                                            style="font-family: 'Titillium Web', sans-serif;"
                                                            href="{{ route('site.city', $city->city->slug) }}">Find Out
                                                            More</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                </div>
                            </div>
                            {{-- <div class="row">
                                <div class="col text-center"><a
                                        class="btn btn-lg text-uppercase destination-findmore-button" role="button"
                                        href="#">Find out more things to do in colombo</a></div>
                            </div> --}}
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
                                @if (!empty($cities))
                                    @foreach ($cities as $city)
                                        <div class="col-md-4 col-lg-4 col-xl-4">
                                            <img class="img-fluid"
                                                src="{{ imageUrl($city->image, ['w' => 387, 'h' => 221, 'fit' => 'crop']) }}"
                                                title="{{ $city->title }}">
                                            <h3 class="text-center itenerary-heading">{{ $city->title }}</h3>
                                            {!! str_replace('<p>', '<p class="package-excurtions-text">', $city->description) !!}
                                            <div class="row">
                                                <div class="col text-center">
                                                    <a class="btn btn-lg text-uppercase top-destination-findmore-button"
                                                        role="button"
                                                        href="{{ route('site.city-activity', $city->slug) }}">Find
                                                        Out
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3"
                            style="font-family: 'Titillium Web', sans-serif;">
                            <div class="row" style="padding-top: 50px;">
                                <div class="col">
                                    <div id="hdest_map"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


@push('custom-css')
    <style>
        .grid-item {
            width: 285px;
            height: 285px;
        }

        .grid-item--width2 {
            width: 570px;
            height: 570px;
        }

        #hdest_map {
            height: 400px;
            width: 100%;
        }
    </style>
@endpush

@push('custom-js')
    <script src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.js"></script>
    <script>
        // var grid = $('.grid').imagesLoaded(function() {
        //     // init Masonry after all images have loaded
        //     grid.masonry({
        //         // options
        //         itemSelector: '.grid-item',
        //         columnWidth: 285
        //     });
        // });
        document.addEventListener('DOMContentLoaded', function() {
            var grid = document.querySelector('.grid');

            imagesLoaded(grid, function() {
                // Initialize Masonry after all images have loaded
                var masonry = new Masonry(grid, {
                    // options
                    itemSelector: '.grid-item',
                    columnWidth: 285
                });
            });
        });

        // Helper function for imagesLoaded
        function imagesLoaded(elem, callback) {
            var images = elem.querySelectorAll('img');
            var loadedImages = 0;

            function imageLoaded() {
                loadedImages++;
                if (loadedImages === images.length) {
                    callback();
                }
            }

            for (var i = 0; i < images.length; i++) {
                images[i].addEventListener('load', imageLoaded);
            }
        }





        function initMap() {
            let coors = {!! json_encode($locations) !!};
            console.log(coors);
            var map = new google.maps.Map(
                document.getElementById('hdest_map'), {
                    zoom: 10,
                    center: coors[0]
                }
            );
            coors.forEach(cor => {
                let infowindow = new google.maps.InfoWindow({
                    content: "<h4>" + cor.title + "</h4>" + cor.description
                });
                let marker = new google.maps.Marker({
                    position: cor,
                    map: map,
                    title: cor.title
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });
        }
    </script>
    {{-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ56wuV8BNG7nSohdnE4Lw8VB-aSoaLvM&callback=initMap"
        type="text/javascript"></script> --}}

    {{-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfCLZ3RSL7K8yEVw-H8lkd2tBCguR38Sc&callback=initMap"
        type="text/javascript"></script> --}}

    {{-- My script for map --}}
    <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCDLozAyhz46pnzIDutVVgLX9JlRuZPro&callback=initMap"
        type="text/javascript"></script>
    {{-- My script for map --}}
@endpush
