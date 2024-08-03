@extends('layouts.web-secondary')

@section('page-content')
    <div class="container">
        <div class="row">
            <div class="col"><img class="img-fluid" src="assets/img/about.jpg"></div>
        </div>
    </div> <!-- end:banner image -->

    <div class="container" style="padding-top: 50px;padding-bottom: 25px;">
        <div class="row">
            <div class="col">
                <h3 class="text-uppercase text-center" style="font-family: 'Titillium Web', sans-serif;">CSR Programs</h3>
            </div>
        </div>
        <div class="row" style="/*padding-top: 50px;*/padding-bottom: 50px;">
            <div class="col-md-3 col-lg-3 col-xl-3">
                <img class="img-fluid" src="{{ imageUrl($tour->image, ['w' => 283, 'h' => 368, 'fit' => 'crop']) }}">
                <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                    <h1 class="text-center" style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">{{$tour->title}}</h1>
                    <a class="btn btn-lg text-uppercase package-findmore" role="button" style="font-family: 'Titillium Web', sans-serif;" href="{{route('site.itinerary', $tour->slug)}}">Find Out More</a>
                </div>
                <div class="month-conent-section">
                    <h3 class="month-heading">CSR Title</h3>
                    <p class="month-text">{{$tour->meta_description}}</p>
                </div>
            </div>
            @empty
            <div class="col-md-12 col-lg-12 col-xl-12">
                <h4 class="text-center">Sorry, no CSR Programs Available.</h4>
            </div>
            @endforelse
        </div>
    </div>

@endsection
