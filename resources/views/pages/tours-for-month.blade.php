@extends('layouts.web-secondary')

@section('page-content')
<div class="container">
        <div class="row" style="margin-left: 15px;">
            <div class="col home-package-area" style="padding-bottom: 15px;">
                <span class="tour-month-subheading">Sri Lanka Holiday Packages<br></span>
                <span class="tour-month-heading">In {{$monthName}}</span>
            </div>
        </div>
        <div class="row" style="/*padding-top: 50px;*/padding-bottom: 50px;">
            @forelse ($itineraries as $tour)
            <div class="col-md-3 col-lg-3 col-xl-3">
                <img class="img-fluid" src="{{ imageUrl($tour->image, ['w' => 283, 'h' => 368, 'fit' => 'crop']) }}">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center" style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">{{$tour->title}}</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button" style="font-family: 'Titillium Web', sans-serif;" href="{{route('site.itinerary', $tour->slug)}}">Find Out More</a>
                </div>
                <div class="month-conent-section">
                    <h3 class="month-heading">Tour Overview</h3>
                    <p class="month-text">{{$tour->meta_description}}</p>
                </div>
            </div>
            @empty
            <div class="col-md-12 col-lg-12 col-xl-12">
                <h4 class="text-center">Sorry, no tours available for {{$monthName}} month.</h4>
            </div>
            @endforelse
        </div>
    </div>
@endsection
