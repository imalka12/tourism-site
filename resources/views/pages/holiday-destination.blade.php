@extends('layouts.web-secondary')

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="carousel slide" data-ride="carousel" id="carousel-2">
                    <div class="carousel-inner" role="listbox">
                        @php
                            $ind = 0;
                        @endphp
                        @forelse ($destination->gallery->galleryImages as $galleryImage)
                            <div class="carousel-item {{ $ind == 0 ? 'active' : '' }}">
                                <img class="img-fluid w-100 d-block"
                                    src="{{ imageUrl($galleryImage->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop']) }}"
                                    alt="{{ $galleryImage->description }}">
                            </div>
                            @php
                                $ind++;
                            @endphp
                        @empty
                            <div class="carousel-item active">
                                <img class="img-fluid w-100 d-block"
                                    src="{{ imageUrl($destination->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop']) }}"
                                    alt="{{ $destination->title }}">
                            </div>
                        @endforelse
                    </div>
                    <div>
                        <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    <ol class="carousel-indicators d-none">
                        <li data-target="#carousel-2" data-slide-to="0" class="active"></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div style="margin-top: 15px;">
                    <ul class="nav nav-tabs" id="holiday_destination_tabs">
                        <li class="nav-item">
                            <a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" role="tab" data-toggle="tab" href="#tab-2"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">Top
                                Locations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" role="tab" data-toggle="tab" href="#tab-3"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">Things To
                                Do</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" role="tab" data-toggle="tab" href="#tab-4"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">Hotels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" role="tab" data-toggle="tab" href="#tab-5"
                                style="font-family: 'Titillium Web', sans-serif; text-transform: uppercase;">Map</a>
                        </li>
                    </ul>
                    <div class="tab-content">


                        {{-- New Developemnt --}}
                        <div class="tab-pane active" role="tabpanel" id="tab-1">
                            <div class="row" style="padding-top: 50px; padding-bottom: 50px;">
                                @php
                                    $__activities = count($activities) > 5 ? $activities->random(5) : $activities;
                                @endphp
                                @foreach ($__activities as $activity)
                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
                                        <img class="img-fluid"
                                            src="{{ imageUrl($activity->image, ['w' => '387', 'h' => '221', 'fit' => 'crop']) }}">
                                        <div class="text-center destination-package-text-area" style="color: #ffffff;">
                                            <h2 class="text-center"
                                                style="font-family: 'Alfa Slab One', cursive; font-weight: normal; font-size: 25px; text-shadow: 2px 2px 4px #1e1e1e;">
                                                {{ $activity->activity_name }}</h2>
                                            <a class="btn btn-lg text-uppercase findmore-white" role="button"
                                                style="font-family: 'Titillium Web', sans-serif;text-shadow: 2px 2px 4px #1e1e1e;"
                                                href="{{ route('site.city-activity', $activity->slug) }}">Find Out More</a>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- New Developemnt --}}

                        <div class="tab-pane" role="tabpanel" id="tab-2">
                            <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
                                @foreach ($cities as $city)
                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                        <img class="img-fluid"
                                            src="{{ imageUrl($city->image, ['w' => '387', 'h' => '221', 'fit' => 'crop']) }}">
                                        <h3 class="text-center itenerary-heading">{{ $city->title }}</h3>
                                        <div>
                                            {!! str_replace('<p>', '<p class="page-excursions-text">', $city->description) !!}
                                        </div>
                                        <div class="row">
                                            <div class="col text-center">
                                                <a class="btn btn-lg text-uppercase top-destination-findmore-button"
                                                    role="button" href="{{ url('city/' . $city->slug) }}">Find Out
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-3">
                            <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
                                @forelse ($activities as $activity)
                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                        <img class="img-fluid"
                                            src="{{ imageUrl($activity->image, ['w' => '387', 'h' => '221', 'fit' => 'crop']) }}">
                                        <h3 class="text-center itenerary-heading">{{ $activity->title }}</h3>
                                        <div>
                                            {!! str_replace('<p>', '<p class="package-excursions-text">', $activity->description) !!}
                                        </div>

                                        <div class="row">
                                            <div class="col text-center">
                                                <a class="btn btn-lg text-uppercase top-destination-findmore-button"
                                                    role="button"
                                                    href="{{ route('site.city-activity', $activity->slug) }}">Find Out
                                                    More</a>
                                            </div>
                                        </div>


                                        {{-- <a class="btn btn-lg text-uppercase findmore-white" role="button"
                                            style="font-family: 'Titillium Web', sans-serif;"
                                            href="{{ route('site.city-activity', $activity->slug) }}">Find Out More</a> --}}
                                    </div>
                                @empty
                                    <div class="col-md-4 col-lg-4 col-xl-4">
                                        <p>No activities details available for this destination.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-4">
                            <div class="row" style="margin-top: 50px;">
                                @foreach ($hotels as $hotel)
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"
                                                style="padding-top: 10px;">
                                                <img class="img-fluid"
                                                    src="{{ imageUrl($hotel->image, ['w' => '283', 'h' => '182', 'fit' => 'crop']) }}">
                                            </div>
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                <h3
                                                    style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">
                                                    {{ $hotel->city_name }}</h3>
                                                <h5
                                                    style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">
                                                    {{ $hotel->name }}</h5>
                                                <div
                                                    style="margin-bottom: 0px;font-family: 'Titillium Web', sans-serif;line-height: 20px;">
                                                    {!! $hotel->description !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="tab-5"
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
    <script defer src="https://unpkg.com/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
    <script defer src="https://unpkg.com/imagesloaded@4.1.4/imagesloaded.pkgd.js"></script>
    <script defer src="{{ asset('assets/js/page-specific/holiday-destination.js') }}"></script>
    {{-- <script>
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
    </script> --}}
    <script>
        function initMap() {
            let coors = {!! json_encode($locations) !!};
            console.log(coors);
            var map = new google.maps.Map(
                document.getElementById('hdest_map'), {
                    zoom: 10,
                    center: new google.maps.LatLng(coors[0].lat, coors[0].lng) // Use LatLng object
                }
            );
            coors.forEach(cor => {
                let infowindow = new google.maps.InfoWindow({
                    content: "<h4>" + cor.title + "</h4>" + cor.description
                });
                let marker = new google.maps.Marker({
                    position: new google.maps.LatLng(cor.lat, cor.lng), // Use LatLng object
                    map: map,
                    title: cor.title
                });
                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
            });
        }
    </script>
    {{-- <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ56wuV8BNG7nSohdnE4Lw8VB-aSoaLvM&callback=initMap"
        type="text/javascript"></script> --}}
    <script defer src="https://maps.googleapis.com/maps/api/js?key={{ config('voyager.googlemaps.key') }}&callback=initMap"
        type="text/javascript"></script>
@endpush
