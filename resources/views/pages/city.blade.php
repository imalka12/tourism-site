@extends('layouts.web-secondary')

@section('page-content')

<div class="container">
    <div class="row">
        <div class="col">
            @if (isset($city->gallery))
                <div class="carousel slide" data-ride="carousel" id="carousel-2">
                    <div class="carousel-inner" role="listbox">
                        @php $isFirst = true; @endphp
                        @forelse ($city->gallery->galleryImages as $galleryImage)
                            <div class="carousel-item {{$isFirst ? 'active' : ''}}">
                                <img class="img-fluid w-100 d-block" src="{{imageUrl($galleryImage->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop'])}}" alt="{{$galleryImage->description}}">
                            </div>
                        @php $isFirst = false; @endphp
                        @empty
                            <div class="carousel-item active">
                                <img class="img-fluid w-100 d-block" src="{{imageUrl($city->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop'])}}" alt="{{$city->title}}">
                            </div>
                        @endforelse
                    </div>
 
                    <div>
                        <a class="carousel-control-prev" href="#carousel-2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            @else
            <img class="img-fluid w-100 d-block" src="{{imageUrl($city->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop'])}}" alt="{{$city->title}}">
            @endif
        </div>
    </div>
</div>
{{-- city details --}}
<div class="container">
    <div class="row">
        <div class="col-xl-12 tour-package-left-area">
            <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">{{$city->title}}</h3>
            <div>{!! str_replace('<p>', '<p class="tour-package-text" style="font-family: \'Titillium Web\', sans-serif;">', $city->description) !!}</div>
        </div>
    </div>
</div>

{{-- activities --}}
<div class="container">
    <div class="row" style="padding-top: 50px;padding-bottom: 50px;">
        @foreach ($activities as $activity)
        <div class="col-md-4 col-lg-4 col-xl-4">
            <img class="img-fluid" src="{{imageUrl($activity->image, ['w' => '387', 'h' => '221', 'fit' => 'crop'])}}">
            <h3 class="text-center itenerary-heading">{{$activity->title}}</h3>
            {!! str_replace('<p>', '<p class="package-excurtions-text">', $activity->description) !!}
            <a class="btn btn-lg text-uppercase top-destination-findmore-button" role="button" href="{{route('site.city-activity', $activity->slug)}}">Find Out More</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
