@extends('layouts.web-printable')

@section('printable_content')
<h5>Explore Thaprobana (Pvt) Ltd.</h5>
<h1 class="text-center">{{ $destination->title }}</h1>
<p class="text-center"><strong>Holiday Destination</strong></p>
<img class="imgfullwidth" src="{{ public_path('storage/' . $destination->image) }}">
{!! $destination->description !!}

<h2 style="margin: 35px 0px 0px;">Top Destinations</h2>

@foreach ($cities as $city)
<div class="floatedrow clearfix">
    <h3>{{ $city->title }}</h3>
    <img class="floated-img" src="{{ public_path('storage/' . $city->image) }}">
    {!! $city->description !!}
</div>
@endforeach

<h2 style="margin: 35px 0px 0px;">Things To Do</h2>

@foreach ($activities as $activity)
<div class="floatedrow clearfix">
    <h3>{{ $activity->title }}</h3>
    <img class="floated-img" src="{{ public_path('storage/' . $activity->image) }}">
    {!! $activity->description !!}
</div>
@endforeach

<h2 style="margin: 35px 0px 0px;">Hotels</h2>
@foreach ($hotels as $hotel)
<div class="floatedrow clearfix">
    <h3>{{ $hotel->name }} - {{ $hotel->city_name }}</h3>
    <img class="floated-img" src="{{ public_path('storage/' . $hotel->image) }}">
    {!! $hotel->description !!}
</div>
@endforeach
<footer>
    Explore Thaprobana - Holiday Destination
</footer>
@endsection

@section('custom-css')
footer {
position: fixed;
bottom: 0;
width: 100%;
text-align: center;
z-index: 9999999;
}
@endsection