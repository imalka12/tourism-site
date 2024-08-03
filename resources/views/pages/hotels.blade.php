@extends('layouts.web-secondary')

@section('page-content')
    <div class="container">
        <div class="row">
            @foreach($cityHotels as $city)
                <div class="row">
                    <div class="col-xl-12">
                        <h3 class="tour-package-heading"
                            style="font-family: 'Titillium Web', sans-serif;">{{($city['city'])->title}}</h3>
                    </div>
                </div>

                <div class="row">
                    @foreach($city['hotels'] as $hotel)
                        <div class="col-md-3">
                            <div class="hotel-wrapper m-2">
                                <img class="img-responsive lazyload"
                                     data-src="{{imageUrl($hotel->image, ['w' => '270', 'h' => '227', 'fit' => 'crop'])}}"
                                     alt="Image for hotel {{$hotel->name}}">
                                <h3 class="month-heading">{{$hotel->name}}</h3>
                                <p class="month-text">
                                    {!! rating_stars($hotel->star_rating, ['fa_golden_star'], 'i') !!}
                                </p>
                                {!! str_replace('<p>', '<p class="month-text" style="text-align: justify;">', $hotel->description) !!}
                            </div>
                        </div>
                    @endforeach
                </div>

            @endforeach
        </div>
    </div>
@endsection
