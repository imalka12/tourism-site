@extends('layouts.web-secondary')

@section('page-content')
    <div class="container" style="/*padding-top: 50px;*/padding-bottom: 50px;">
        <div class="row" style="padding-bottom: 30px;">
            @foreach($tourTypes as $type)
                <div class="col-lg-4">
                    <div style="height: 400px; width: 100%; margin-top: 30px!important;">
                        <img class="img-fluid"
                             src="{{ imageUrl($type->image, ['w' => '400', 'h' => '400', 'fit' => 'cover']) }}"
                             style="object-fit: cover; width: 100%; height: 400px;">
                        <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                            <h1 class="text-center"
                                style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                                {{ $type->title }}</h1>
                            <a class="btn btn-lg text-uppercase package-findmore" role="button"
                               style="font-family: 'Titillium Web', sans-serif;"
                               href="{{ route('site.tours-by-type', $type->slug) }}">Find Out More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
