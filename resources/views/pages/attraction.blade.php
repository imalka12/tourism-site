@extends('layouts.web-secondary')

@section('page-content')

<div class="container mt-3">
    <div class="row">
        <div class="col">
            @if (isset($attraction->gallery))
                <div class="carousel slide" data-ride="carousel" id="carousel-2">
                    <div class="carousel-inner" role="listbox">
                        @php $isFirst = true; @endphp
                        @forelse ($attraction->gallery->galleryImages as $galleryImage)
                            <div class="carousel-item {{$isFirst ? 'active' : ''}}">
                                <img class="img-fluid w-100 d-block" src="{{imageUrl($galleryImage->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop'])}}" alt="{{$galleryImage->description}}">
                            </div>
                        @php $isFirst = false; @endphp
                        @empty
                            <div class="carousel-item active">
                                <img class="img-fluid w-100 d-block" src="{{imageUrl($attraction->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop'])}}" alt="{{$attraction->title}}">
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
            <img class="img-fluid w-100 d-block" src="{{imageUrl($attraction->image, ['w' => '1220', 'h' => '610', 'fit' => 'crop'])}}" alt="{{$attraction->title}}">
            @endif
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row">
        <div class="col-xl-12 tour-package-left-area">
            <h3 class="tour-package-heading" style="font-family: 'Titillium Web', sans-serif;">{{$attraction->title}}</h3>
            <div>{!! str_replace('<p>', '<p class="tour-package-text" style="font-family: \'Titillium Web\', sans-serif;">', $attraction->description) !!}</div>
        </div>
    </div>
</div>
@endsection
