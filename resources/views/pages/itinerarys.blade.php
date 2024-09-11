@extends('layouts.web-secondary')

@section('page-content')
@if(!empty($itinerary->gallery))
<div class="container">
    <div class="row">
        <div class="col">
            <div class="carousel slide" data-ride="carousel" id="itinerary-carousel">
                <div class="carousel-inner" role="listbox">
                    @php
                    $isFirst = true;
                    @endphp
                    @foreach ($itinerary->gallery->galleryImages as $galleryImage)
                    <div class="carousel-item {{$isFirst ? 'active' : ''}}">
                        <img class="img-fluid w-100 d-block" src="{{imageUrl($galleryImage->image, ['w' => 1220, 'h' => 584, 'fit' => 'crop'])}}" alt="{{$galleryImage->title}}">
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
                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1" style="font-family: 'Titillium Web', sans-serif;">OVERVIEW</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2" style="font-family: 'Titillium Web', sans-serif;">ITINERARY</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3" style="font-family: 'Titillium Web', sans-serif;">INCLUDES &amp; EXCLUDES</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4" style="font-family: 'Titillium Web', sans-serif;">HOTELS</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5" style="font-family: 'Titillium Web', sans-serif;">OPTIONAL EXCURTIONS</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6" style="font-family: 'Titillium Web', sans-serif;">PRICE GUIDE</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-7" style="font-family: 'Titillium Web', sans-serif;">TRIP PHOTOS</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-8" style="font-family: 'Titillium Web', sans-serif;">TOURMAP</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="tab-1">
                        <div class="row">
                            <div class="col-lg-8 col-xl-8 tour-package-left-area">
                                <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">{{ucwords($itinerary->title)}} Overview </h3>
                                <div style="font-family: 'Titillium Web', sans-serif;">
                                    {!! $itinerary->description !!}
                                </div>
                            </div>
                            <div class="col-lg-4 col-xl-4 tour-package-right-area">
                                <h3 class="tour-package-heading" 
                                style="font-family: 'Titillium Web', sans-serif;">Attractions</h3>
                                <ul style="font-size: 0.9em; font-family: 'Titillium Web', sans-serif; list-style-type: none;padding: 0px;">
                                    @foreach ($attractions as $attraction)
                                    <li>{{$attraction->title}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-2">
                        <div style="padding-top: 50px;">
                            @foreach ($itinerary->itineraryDays as $itineraryDay)
                            <div class="jumbotron">
                                <h3 class="text-uppercase" style="font-family: 'Titillium Web', sans-serif;">Day {{$itineraryDay->day_number}}</h3>
                                <p style="font-family: 'Titillium Web', sans-serif;">{{$itineraryDay->title}}</p>
                                <div class="row">
                                    <div class="col-lg-3 col-xl-3"><img class="img-fluid" src="{{imageUrl($itineraryDay->image, ['w' => 267, 'h' => 170, 'fit' => 'crop'])}}"></div>
                                    <div class="col-lg-6 col-xl-5 itinerary-text-area" style="font-family: 'Titillium Web', sans-serif;">
                                        {!! $itineraryDay->description !!}
                                    </div>
                                    <div class="col-lg-3 col-xl-4 attractions-col">
                                        @if (empty($itineraryDay->attractions))
                                        <p>No attractions to visit on this day.</p>
                                        @else
                                        <h4 style="font-family: 'Titillium Web', sans-serif;">Attractions</h4>
                                        <ul style="font-family: 'Titillium Web', sans-serif;">
                                            @foreach ($itineraryDay->attractions as $attraction)
                                            <li>{{$attraction->title}}</li>
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
                                    <li>{{$inclusion->description}}</li>
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
                                    <li>{{$inclusion->description}}</li>
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
                            @foreach ($hotels as $hotel)
                            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <img class="img-fluid" src="{{imageUrl($hotel->image, ['w' => 283, 'h' => 182, 'fit' => 'crop'])}}">
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                                        <h3 style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">{{$hotel->city->title}}</h3>
                                        <h5 style="font-family: 'Titillium Web', sans-serif;font-weight: normal;margin-bottom: 0px;">{{$hotel->name}}</h5>
                                        <div style="margin-bottom: 0px;font-family: 'Titillium Web', sans-serif;line-height: 20px;">{!! $hotel->description !!}</div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-5">
                        <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
                            @foreach ($activities as $activity)
                            <div class="col-md-4 col-lg-4 col-xl-4 text-center">
                                <img class="img-fluid d-flex" src="{{imageUrl($activity->image, ['w' => 387, 'h' => 221, 'fit' => 'crop'])}}" style="margin-right: 0;">
                                <h3 class="text-center itenerary-heading">{{$activity->title}}</h3>
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
                                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Room Occupancy</strong><br></th>
                                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Single</strong></th>
                                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Double</strong></th>
                                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Triple</strong></th>
                                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Child with bed</strong></th>
                                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Child without bed</strong></th>
                                        <th style="font-family: 'Titillium Web', sans-serif;"><strong>Infant</strong></th>
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
                    <div class="tab-pane" role="tabpanel" id="tab-7">
                        <div class="row pt-3">
                            @foreach ($itinerary->gallery->galleryImages as $image)
                                <div class="col-md-3">
                                    <a data-fancybox="tour_photos" href="{{imageUrl($image->image, ['w' => 1000])}}">
                                        <img class="thumbnail" src="{{imageUrl($image->image, ['w' => 286, 'h'=> 150, 'fit' => 'crop'])}}" alt="{{$image->title}}" class="img-fluid">
                                    </a>
                                </div>
                                @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="tab-8">
                        <div class="row" style="padding-top: 50px;">
                            <div class="col">
                                <div id="floating-panel">
                                <b>Start: </b>
                                <select id="start">
                                <option value="chicago, il">Chicago</option>
                                <option value="st louis, mo">St Louis</option>
                                <option value="joplin, mo">Joplin, MO</option>
                                <option value="oklahoma city, ok">Oklahoma City</option>
                                <option value="amarillo, tx">Amarillo</option>
                                <option value="gallup, nm">Gallup, NM</option>
                                <option value="flagstaff, az">Flagstaff, AZ</option>
                                <option value="winona, az">Winona</option>
                                <option value="kingman, az">Kingman</option>
                                <option value="barstow, ca">Barstow</option>
                                <option value="san bernardino, ca">San Bernardino</option>
                                <option value="los angeles, ca">Los Angeles</option>
                                </select>
                                <b>End: </b>
                                <select id="end">
                                <option value="chicago, il">Chicago</option>
                                <option value="st louis, mo">St Louis</option>
                                <option value="joplin, mo">Joplin, MO</option>
                                <option value="oklahoma city, ok">Oklahoma City</option>
                                <option value="amarillo, tx">Amarillo</option>
                                <option value="gallup, nm">Gallup, NM</option>
                                <option value="flagstaff, az">Flagstaff, AZ</option>
                                <option value="winona, az">Winona</option>
                                <option value="kingman, az">Kingman</option>
                                <option value="barstow, ca">Barstow</option>
                                <option value="san bernardino, ca">San Bernardino</option>
                                <option value="los angeles, ca">Los Angeles</option>
                                </select>
                                </div>
                                <div id="map"></div>
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
        height: 100%;
    }
</style>
@endpush
@push('custom-js')
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService();
        var directionsRenderer = new google.maps.DirectionsRenderer();
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: {lat: 41.85, lng: -87.65}
        });
        directionsRenderer.setMap(map);

        var onChangeHandler = function() {
          calculateAndDisplayRoute(directionsService, directionsRenderer);
        };
        document.getElementById('start').addEventListener('change', onChangeHandler);
        document.getElementById('end').addEventListener('change', onChangeHandler);
      }

      function calculateAndDisplayRoute(directionsService, directionsRenderer) {
        directionsService.route(
            {
              origin: {query: document.getElementById('start').value},
              destination: {query: document.getElementById('end').value},
              travelMode: 'DRIVING'
            },
            function(response, status) {
              if (status === 'OK') {
                directionsRenderer.setDirections(response);
              } else {
                window.alert('Directions request failed due to ' + status);
              }
            });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('voyager.googlemaps.key') }}&callback=initMap">
    </script>
    @endpush