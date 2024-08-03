@extends('layouts.web-secondary')

@section('page-content')
<div class="container">
    <div class="row" style="/*padding-top: 50px;*/padding-bottom: 50px; margin-top: 50px;">
        @forelse ($attractions as $attraction)
        <div class="col-md-3 col-lg-3 col-xl-3">
            <img class="img-fluid" src="{{ imageUrl($attraction->image, ['w' => 283, 'h' => 368, 'fit' => 'crop']) }}">
            <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                <h2 class="text-center" style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">{{$attraction->title}}</h2>
                <a class="btn btn-lg text-uppercase package-findmore" role="button" style="font-family: 'Titillium Web', sans-serif;" 
                href="{{route('site.attraction', $attraction->slug)}}">Find Out More</a>
            </div>
        </div>
        @empty
        <div class="col-md-12 col-lg-12 col-xl-12">
            <h4 class="text-center">Sorry, no attractions available for {{$attractionType->title}} type.</h4>
        </div>
        @endforelse
    </div>
</div>
@endsection
