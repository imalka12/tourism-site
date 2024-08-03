@extends('layouts.web-secondary')

@section('page-content')
<div class="container py-3">
    @foreach ($testimonials as $testimonial)
    <div class="row mb-3">
        <div class="col-xl-5">
            <h3 class="text-uppercase" style="font-family: 'Titillium Web', sans-serif;">{{$testimonial->customer_name}}</h3>
            <p style="font-family: 'Titillium Web', sans-serif;font-size: 16px;">
                <strong>Country :</strong> {{$testimonial->country}}
            </p>
            <p style="font-family: 'Titillium Web', sans-serif;font-size: 16px;">
                <strong>No of People :</strong> {{$testimonial->no_of_people}}
            </p>
            <p style="font-family: 'Titillium Web', sans-serif;font-size: 16px;">
                <strong>Date Visited :</strong> {{ date('dS F Y', strtotime($testimonial->date_visited)) }}
            </p>
            <div class="testimonial_content">
                {!! $testimonial->comments !!}
            </div>
        </div>
        <div class="col-xl-7">
            @php
            $images = $testimonial->images();
            $isFirst = true;
            $teid = md5($testimonial->id);
            @endphp
            @if (count($images) > 1)
            <div class="carousel slide" data-ride="carousel" id="carousel_{{$teid}}">
                <div class="carousel-inner" role="listbox">
                    @foreach ($images as $image)
                    <div class="carousel-item {{$isFirst ? 'active' : ''}}">
                        <img class="img-fluid w-100 d-block" src="{{imageUrl($image, ['w' => 700, 'h' => 420, 'fit' => 'crop', 'fm' => 'pjpg'])}}" alt="Testimonial images by {{$testimonial->customer_name}}">
                    </div>
                    @php
                    $isFirst = false;
                    @endphp
                    @endforeach
                </div>
                <div>
                    <a class="carousel-control-prev" href="#carousel_{{$teid}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel_{{$teid}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @else
            @if (!empty($testimonial->image_1))
            <img class="img-fluid w-100 d-block" src="{{imageUrl($testimonial->image_1, ['w' => 700, 'h' => 420, 'fit' => 'crop', 'fm' => 'pjpg'])}}" alt="Testimonial images by {{$testimonial->customer_name}}">
            @endif
            @endif
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12 my-3">
                {{ $testimonials->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
