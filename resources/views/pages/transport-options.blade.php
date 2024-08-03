@extends('layouts.web-secondary')

@section('page-content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @foreach($transportOptions as $option)
                <div class="row mb-5">
                    <div class="col-2">
                        <img src="{{imageUrl($option->image, ['w' => 200, 'h' => 200, 'fit' => 'crop'])}}" alt="Image for {{$option->title}}">
                    </div>
                    <div class="col-10">
                        <div class="col home-package-area" style="">
                            <span class="tour-month-subheading">{{ucwords(\Illuminate\Support\Str::plural($typeNames[$option->type]))}}<br></span>
                            <span class="tour-month-heading">{{$option->title}}</span>
                        </div>
                        <p class="px-1 ml-5">{{$option->description}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
