@extends('layouts.web-secondary')

@section('page-content')
@if (!empty($itinerary->gallery))
<div class="container">
    <div class="row">
        <div class="col">
            <div class="carousel slide" data-ride="carousel" id="itinerary-carousel">
                <div class="carousel-inner" role="listbox">
                    @php
                    $isFirst = true;
                    @endphp
                    @foreach ($itinerary->gallery->galleryImages as $galleryImage)
                    <div class="carousel-item {{ $isFirst ? 'active' : '' }}">
                        <img class="img-fluid w-100 d-block"
                            src="{{ imageUrl($galleryImage->image, ['w' => 1220, 'h' => 584, 'fit' => 'crop']) }}"
                            alt="{{ $galleryImage->title }}">
                    </div>

                    @php
                    $isFirst = false;
                    @endphp
                    @endforeach
                </div>
                <div>
                    <a class="carousel-control-prev" href="#itinerary-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#itinerary-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <div>
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"
                            style="font-family: 'Titillium Web', sans-serif;">OVERVIEW</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2"
                            style="font-family: 'Titillium Web', sans-serif;">ITINERARY</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3"
                            style="font-family: 'Titillium Web', sans-serif;">INCLUDES &amp; EXCLUDES</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4"
                            style="font-family: 'Titillium Web', sans-serif;">HOTELS</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5"
                            style="font-family: 'Titillium Web', sans-serif;">OPTIONAL EXCURTIONS</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-9"
                            style="font-family: 'Titillium Web', sans-serif;">ACTIVITIES</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6"
                            style="font-family: 'Titillium Web', sans-serif;">PRICE GUIDE</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-7"
                            style="font-family: 'Titillium Web', sans-serif;">TRIP PHOTOS</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-8"
                            style="font-family: 'Titillium Web', sans-serif;">TOURMAP</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="tab-1">
                        <div class="row">
                            <div class="col-lg-8 col-xl-8 tour-package-left-area">
                                <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">
                                    {{ ucwords($itinerary->title) }} Overview
                                </h3>
                                <div style="font-family: 'Titillium Web', sans-serif;">
                                    {!! $itinerary->description !!}
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4 tour-package-right-area">
                                <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">
                                    Attractions</h3>
                                <ul
                                    style="font-size: 0.9em; font-family: 'Titillium Web', sans-serif; list-style-type: none;padding: 0px;">
                                    @foreach ($attractions as $attraction)
                                    <li class="mb-2">
                                        <a href="{{ route('site.attraction', $attraction->slug) }}" target="_blank"
                                            title="Click to view information about {{ $attraction->title }}">
                                            {{ $attraction->title }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-2">
                        <div style="padding-top: 50px;">
                            @foreach ($itinerary->itineraryDays as $itineraryDay)
                            <div class="jumbotron">
                                <h3 class="text-uppercase" style="font-family: 'Titillium Web', sans-serif;">Day
                                    {{ $itineraryDay->day_number }}
                                </h3>
                                <p style="font-family: 'Titillium Web', sans-serif;">{{ $itineraryDay->title }}</p>
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3">
                                        @php
                                        $images = $itineraryDay->getAllAttractionImages();
                                        @endphp

                                        @if (count($images) > 1)
                                        <div class="cycle-slideshow">
                                            @foreach ($itineraryDay->getAllAttractionImages() as $image)
                                            <img class="img-fluid"
                                                src="{{ imageUrl($image, ['w' => 267, 'h' => 170, 'fit' => 'crop']) }}">
                                            @endforeach
                                        </div>
                                        @else
                                        <img class="img-fluid"
                                            src="{{ imageUrl($itineraryDay->image, ['w' => 267, 'h' => 170, 'fit' => 'crop']) }}">
                                        @endif
                                    </div>
                                    <div class="col-lg-6 col-xl-5 itinerary-text-area"
                                        style="font-family: 'Titillium Web', sans-serif;">
                                        {!! $itineraryDay->description !!}
                                    </div>
                                    <div class="col-lg-3 col-xl-4 attractions-col">
                                        @if (empty($itineraryDay->attractions))
                                        <p>No attractions to visit on this day.</p>
                                        @else
                                        <h4 style="font-family: 'Titillium Web', sans-serif;">Attractions</h4>
                                        <ul style="font-family: 'Titillium Web', sans-serif;">
                                            @foreach ($itineraryDay->attractions as $attraction)
                                            <li>
                                                <a href="{{ route('site.attraction', $attraction->slug) }}"
                                                    target="_blank"
                                                    title="Click to view information about {{ $attraction->title }}">
                                                    {{ $attraction->title }}
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-3">
                        <div class="row" style="padding-top: 50px;">
                            <div class="col-lg-6 col-xl-6">
                                <h4 style="font-family: 'Titillium Web', sans-serif;">Includes</h4>
                                @if (empty($inexclusions['inclusions']))
                                <p>No inclusions for this tour package.</p>
                                @else
                                <ul style="font-family: 'Titillium Web', sans-serif;">
                                    @foreach ($inexclusions['inclusions'] as $inclusion)
                                    <li>{{ $inclusion->description }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                            <div class="col-lg-6 col-xl-6 exclude-col">
                                <h4 style="font-family: 'Titillium Web', sans-serif;">Excludes</h4>
                                @if (empty($inexclusions['exclusions']))
                                <p>No exclusions for this tour package.</p>
                                @else
                                <ul style="font-family: 'Titillium Web', sans-serif;">
                                    @foreach ($inexclusions['exclusions'] as $inclusion)
                                    <li>{{ $inclusion->description }}</li>
                                    @endforeach
                                </ul>
                                @endif
                            </div>
                            <div class="col">
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-4">
                        <div class="row" style="margin-top: 50px;">
                            <?php
                            if (
                                count(
                                    array_filter($hotels, function ($hotel) {
                                        return $hotel !== null;
                                    }),
                                ) > 0
                            ) {
                            ?>
                                @foreach ($hotels as $hotel)
                                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <img class="img-fluid"
                                                src="{{ imageUrl($hotel->image, ['w' => 283, 'h' => 182, 'fit' => 'crop']) }}">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                            <h3
                                                style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">
                                                {{ $hotel->city->title }}
                                            </h3>
                                            <h5
                                                style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">
                                                {{ $hotel->name }}
                                            </h5>
                                            <div
                                                style="margin-bottom: 0px;font-family: 'Titillium Web', sans-serif;line-height: 20px;">
                                                {!! $hotel->description !!}</div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            <?php
                            }

                            ?>

                        </div>
                        {{-- <div class="row" style="margin-top: 50px;">

                                @foreach ($hotels as $hotel)
                                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                        <div class="row">
                                            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                                <img class="img-fluid"
                                                    src="{{ imageUrl($hotel->image, ['w' => 283, 'h' => 182, 'fit' => 'crop']) }}">
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <h3
                            style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">
                            {{ $hotel->city->title }}
                        </h3>
                        <h5
                            style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">
                            {{ $hotel->name }}
                        </h5>
                        <div
                            style="margin-bottom: 0px;font-family: 'Titillium Web', sans-serif;line-height: 20px;">
                            {!! $hotel->description !!}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> --}}
    </div>
    <div class="tab-pane" role="tabpanel" id="tab-5">
        <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
            @foreach ($activities as $activity)
            <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                <img class="img-fluid d-flex"
                    src="{{ imageUrl($activity->image, ['w' => 387, 'h' => 221, 'fit' => 'crop']) }}"
                    style="margin-right: 0;">
                <h3 class="text-center itenerary-heading">{{ $activity->title }}</h3>
                {!! $activity->description !!}
            </div>
            @endforeach
        </div>
    </div>
    <div class="tab-pane" role="tabpanel" id="tab-6">
        <div class="table-responsive" style="padding-top: 50px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Room
                                Occupancy</strong><br></th>
                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Single</strong>
                        </th>
                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Double</strong>
                        </th>
                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Triple</strong>
                        </th>
                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Child with
                                bed</strong></th>
                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Child without
                                bed</strong></th>
                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Infant</strong>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Main Tour Price per Person</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @if (!empty($itinerary->gallery))
    <div class="tab-pane" role="tabpanel" id="tab-7">
        <div class="row pt-3">
            @foreach ($itinerary->gallery->galleryImages as $image)
            <div class="col-md-3">
                <a data-fancybox="tour_photos"
                    href="{{ imageUrl($image->image, ['w' => 1000]) }}">
                    <img class="thumbnail"
                        src="{{ imageUrl($image->image, ['w' => 286, 'h' => 150, 'fit' => 'crop']) }}"
                        alt="{{ $image->title }}" class="img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif



    <div class="tab-pane" role="tabpanel" id="tab-8">
        <div class="row" style="padding-top: 50px;">
            <div class="col">
                <div id="map-panel"></div>
                {{-- <div id="map"></div> --}}
            </div>
        </div>
    </div>
    <div class="tab-pane" role="tabpanel" id="tab-9">
        <div class="row" style="padding-top: 50px;">
            <div class="col">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad adipisci
                    blanditiis dolore doloremque eaque ex illum incidunt, iure laborum mollitia natus
                    neque nesciunt, placeat praesentium quis sequi velit voluptatum.</p>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>

<div class="container home-bottom-button-section">
    <div class="row">
        <div class="col-12 col-sm-12 col-lg-4 bottom-options-col">
            <p class="bottom-options-text" style="font-family: 'Titillium Web', sans-serif;">Plan Your Holiday</p>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 bottom-options-col">
            <p class="bottom-options-text" style="font-family: 'Titillium Web', sans-serif;">Talk to our expert</p>
        </div>
        <div class="col-12 col-sm-12 col-lg-4 bottom-options-col">
            <p class="bottom-options-text" style="font-family: 'Titillium Web', sans-serif;">make an inquire</p>
        </div>
    </div>
</div><!-- end:home other butons -->




@endsection
@push('custom-css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<style>
    #map-panel {
        width: 100%;
        height: 500px;
    }
</style>
@endpush
@push('custom-js')
<script defer src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle2/2.1.6/jquery.cycle2.min.js"></script>

{{-- <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: {
                    lat: 6.9271,
                    lng: 79.8612
                } // Center the map at a default location
            });

            var directionsService = new google.maps.DirectionsService();
            var directionsRenderer = new google.maps.DirectionsRenderer({
                map: map
            });

            calculateAndDisplayRoute(directionsService, directionsRenderer);
        }

        function calculateAndDisplayRoute(directionsService, directionsRenderer) {
            var waypts = [{
                    location: new google.maps.LatLng(6.9271, 79.8612),
                    stopover: true
                }, // Colombo
                // Add more waypoints as needed
            ];

            directionsService.route({
                origin: new google.maps.LatLng(6.9271, 79.8612), // Colombo
                destination: new google.maps.LatLng(6.9271,
                    79.8612), // Colombo (for simplicity, use the same location as the origin)
                waypoints: waypts,
                optimizeWaypoints: true,
                travelMode: 'DRIVING'
            }, function(response, status) {
                if (status === 'OK') {
                    directionsRenderer.setDirections(response);
                } else {
                    window.alert('Directions request failed due to ' + status);
                }
            });
        }
    </script> --}}

{{-- {{ dd($waypoints) }} --}}


<script>
    // var __coords = {!! json_encode($waypoints) !!};
    // var __coords = [{
    //         "lat": "6.9271",
    //         "lng": "79.8612",
    //         "title": "Colombo"
    //     },
    //     {
    //         "lat": "7.8731",
    //         "lng": "80.7718",
    //         "title": "Kandy"
    //     },
    //     {
    //         "lat": "6.9271",
    //         "lng": "79.8612",
    //         "title": "Colombo (Destination)"
    //     }
    // ];
    // var zoomTimeInterval_ms = 1000;

    // function initMap() {
    //     var directionsService = new google.maps.DirectionsService; // gets directions
    //     var directionsRenderer = new google.maps.DirectionsRenderer; // renders on map
    //     // console.log(directionsService);
    //     // console.log('OKkk');
    //     var map = new google.maps.Map(document.getElementById('map-panel'), {
    //         zoom: 6, // adjust zoom afterwards
    //         center: {
    //             lat: parseFloat(__coords[0].lat),
    //             lng: parseFloat(__coords[0].lng)
    //         } // center to the first location
    //     });
    //     directionsRenderer.setMap(map); // set map for the directions renderer
    //     calculateAndDisplayRoute(directionsService, directionsRenderer);
    // }

    // // the smooth zoom function
    // function smoothZoom(map, max, cnt) {
    //     if (cnt >= max) {
    //         return;
    //     } else {
    //         z = google.maps.event.addListener(map, 'zoom_changed', function(event) {
    //             google.maps.event.removeListener(z);
    //             self.smoothZoom(map, max, cnt + 1);
    //         });
    //         setTimeout(function() {
    //             map.setZoom(cnt)
    //         }, zoomTimeInterval_ms);
    //     }
    // }

    // function calculateAndDisplayRoute(directionsService, directionsRenderer) {
    //     console.log(directionsService);
    //     alert('OO');
    //     var waypts = [];
    //     __coords.forEach(wp => {
    //         waypts.push({
    //             location: new google.maps.LatLng(parseFloat(wp.lat), parseFloat(wp.lng)), // lat, lang
    //             // stopover: true
    //         });
    //     });

    //     var origin = {
    //         lat: parseFloat(__coords[0].lat),
    //         lng: parseFloat(__coords[0].lng)
    //     };
    //     var destination = {
    //         lat: parseFloat(__coords[__coords.length - 1].lat),
    //         lng: parseFloat(__coords[__coords.length - 1].lng)
    //     };

    //     console.log(origin, destination);
    //     // console.log('KKKK');

    //     directionsService.route({
    //         origin: origin,
    //         // destination: 'colombo, sri lanka',
    //         destination: destination,
    //         waypoints: waypts,
    //         optimizeWaypoints: true,
    //         travelMode: 'DRIVING'
    //     }, function(response, status) {
    //         alert(status);
    //         if (status === 'OK') {
    //             directionsRenderer.setDirections(response);
    //             let map_ = directionsRenderer.getMap();
    //             setTimeout(function() {
    //                 map_.setZoom(8)
    //             }, zoomTimeInterval_ms);
    //             console.log("status is OK");
    //             console.log(status);
    //         } else {
    //             window.alert('Directions request failed due to ' + status);
    //             console.log("status is not OK");
    //             console.log(status);
    //         }
    //     });
    // }
</script>
{{-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQ56wuV8BNG7nSohdnE4Lw8VB-aSoaLvM&callback=initMap"></script> --}}

{{-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCDLozAyhz46pnzIDutVVgLX9JlRuZPro&callback=initMap"></script> --}}




<script>
    var routeCoordinates = {!!json_encode($waypoints) !!};
    // const routeCoordinates = [{
    //         lat: 6.9271,
    //         lng: 79.8612,
    //         title: "Colombo"
    //     },
    //     {
    //         lat: 8.3410,
    //         lng: 80.4118,
    //         title: "Anuradhapura"
    //     },
    //     {
    //         lat: 8.3535,
    //         lng: 80.4970,
    //         title: "Mihintale"
    //     },
    //     {
    //         lat: 7.2906,
    //         lng: 80.6337,
    //         title: "Kandy"
    //     },
    //     {
    //         lat: 6.9271,
    //         lng: 79.8612,
    //         title: "Colombo (Destination)"
    //     }
    // ];

    const convertedCoordinates = routeCoordinates.map(coord => ({
        lat: parseFloat(coord.lat),
        lng: parseFloat(coord.lng),
        // title: coord.title
    }));

    function initMap() {
        const map = new google.maps.Map(document.getElementById('map-panel'), {
            center: convertedCoordinates[0], // Set the center to the first coordinate
            zoom: 8, // Adjust the zoom level as needed
        });
        // Create a polyline to represent the route
        const routePath = new google.maps.Polyline({
            path: convertedCoordinates,
            geodesic: true,
            strokeColor: '#FF0000', // Set the color of the route
            strokeOpacity: 1.0,
            strokeWeight: 2,
        });
        routePath.setMap(map);
    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key={{ config('voyager.googlemaps.key') }}&callback=initMap"></script>
@endpush