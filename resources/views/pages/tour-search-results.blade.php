@extends('layouts.web-secondary')

@section('page-content')
    <div class="container">
        <div class="row pb-5 mt-5">
            @forelse ($tours as $tour)
                <div class="col-md-3 col-lg-3 col-xl-3">
                    <img class="img-fluid" src="{{ imageUrl($tour->image, ['w' => 283, 'h' => 368, 'fit' => 'crop']) }}">
                    <div class="text-center home-package-text-area-sm" style="color: #ffffff;">
                        <h1 class="text-center"
                            style="font-family: 'Alfa Slab One', cursive;font-weight: normal;font-size: 25px;text-shadow: 0 0 1px #1e1e1e;">
                            {{ $tour->title }}</h1>
                        <a class="btn btn-lg text-uppercase package-findmore" role="button"
                            style="font-family: 'Titillium Web', sans-serif;"
                            href="{{ route('site.itinerary', $tour->slug) }}">Find Out More</a>
                    </div>
                    <div class="month-conent-section">
                        <h3 class="month-heading">Tour Overview</h3>
                        <p class="month-text">{{ $tour->meta_description }}</p>
                    </div>
                </div>
            @empty
                <div class="col-md-12 col-lg-12 col-xl-12">
                    <h4 class="text-center">Sorry, no tours available matching your search critieria. Do you like to search
                        for
                        another type or month?</h4>
                    {{-- <h4 class="text-center">Or, <a href="{{ route('site.tours-for-month', $month) }}">click here to see all
                            tours on
                            {{ ucwords($monthName) }}</a></h4> --}}
                </div>
            @endforelse
        </div>
    </div>
    <div class="container-fluid" style="padding: 50px 35px 40px; margin: 15px 0px; background-color: #759760;">
        <div class="row">
            <div class="col">
                <form action="{{ route('site.search-tours') }}" method="get" id="homepage_tour_search_form">
                    <div class="container-fluid d-none d-sm-none d-md-none d-lg-block d-xl-block">
                        <div class="row">
                            <div class="col-lg-3"></div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-3 banner-search-area">
                                        <div class="banner-search-heading-area">
                                            <p class="banner-search-heading"
                                                style="font-size: 15px; text-transform: uppercase;">
                                                Search More<br /><span
                                                    style="font-size: 30px; line-height: 10px; padding-left: 5px;">Tours</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 banner-search-area">
                                        <div class="booking-form-button-area">
                                            <div class="booking-form-dropdown">
                                                <span class="text-uppercase d-block booking-form-subheading">By</span>
                                                <select class="text-left select-field" name="type" id="type">
                                                    <option class="text-uppercase select-dropdown" value="">Holiday
                                                        Type</option>
                                                    {{-- @foreach ($tourTypes as $tourType)
                                                        <option class="text-uppercase select-dropdown"
                                                            value="{{ $tourType->slug }}">{{ $tourType->title }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 banner-search-area">
                                        <div class="booking-form-button-area">
                                            <div class="booking-form-dropdown">
                                                <span class="text-uppercase d-block booking-form-subheading">By</span>
                                                <select class="text-left select-field" name="month" id="month">
                                                    <option class="text-uppercase select-dropdown" value="">Arrival
                                                        Month</option>
                                                    {{-- @foreach (\App\Enums\MonthOfYear::toSelectArray() as $month => $monthName)
                                                        <option class="text-uppercase select-dropdown"
                                                            value="{{ $month }}">{{ ucfirst($monthName) }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-1" style="padding-right: 0px;padding-left: 0px;">
                                        <button type="submit" class=" btn booking-form-button-area">
                                            <i class="fa fa-search booking-search-icon"
                                                style="color: rgb(255,255,255);font-size: 24px;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
