<div>
    <style>
        .searchBox_header {
            height: 23px;
            font-size: 17px;
            text-transform: uppercase;
            font-weight: 500;
            font-family: 'Titillium Web', sans-serif;
        }

        .searchBox_content {
            background-color: #0F766E;
            height: 78px;
        }

        .Customize_tour_button {
            background-color: #52703a;
            border-radius: 0;
            border: none;
            font-size: 14px;
            text-transform: uppercase;
            margin-top: 23px;
            color: #FFFFFF;
        }

        .Customize_tour_button:hover {
            background-color: #667f51;
            color: #FFFFFF;
        }

        .Customize_tour_button:active {
            background-color: #5e8e38;
        }
    </style>
    <div class="container d-none d-sm-none d-md-none d-lg-block d-xl-block book-tour-section">
        <form action="{{ route('site.search-tours') }}" method="get" id="homepage_tour_search_form">
            <div class="col-md-12" style="background-color: #ffffffcf;">
                <div class="row">
                    <div class="col-md-6" style="right: 2px">
                        <div class="row">
                            <div class="col-md-12 searchBox_header ">Our Pre-designed Tours</div>
                            <div class="col-md-12 searchBox_content">
                                <div class="row">
                                    <div class="col-md-5" style="padding-top: 10px;">
                                        <span class="text-uppercase d-block booking-form-subheading">By</span>
                                        <select class="text-left select-field" name="type" id="type">
                                            <option class="text-uppercase select-dropdown" value="">Holiday
                                                Type</option>
                                            @foreach ($tourTypes as $tourType)
                                            <option class="text-uppercase select-dropdown" value="{{ $tourType->slug }}">{{ $tourType->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-5" style="padding-top: 10px;">
                                        <span class="text-uppercase d-block booking-form-subheading">By</span>
                                        <select class="text-left select-field" name="month" id="month">
                                            <option class="text-uppercase select-dropdown" value="">Arrival
                                                Month</option>
                                            @foreach (\App\Enums\MonthOfYear::toSelectArray() as $month => $monthName)
                                            <option class="text-uppercase select-dropdown" value="{{ $month }}">{{ ucfirst($monthName) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2" style="background-color:#d2ad4c; height: 78px;">
                                        <button type="submit" class=" btn booking-form-button-area" style="padding-top: 15px;">
                                            <i class="fa fa-search booking-search-icon" style="color: rgb(255,255,255);font-size: 24px;"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 searchBox_header">Customize Your own Tour</div>
                            <div class="col-md-12 searchBox_content" style="background-color:#374151;">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ route('site.tailor-made') }}" class="btn btn-lg Customize_tour_button " style="width: 100%; background-color:#374151;">Give
                                            us your Preference <i class="fas fa-chevron-right" style="color: #d2ad4c;"></i></a>
                                    </div>
                                    {{-- <div class="col-md-6">
                                            <a href="{{ route('site.tailor-made') }}"
                                    class="btn btn-lg Customize_tour_button"
                                    style="margin-top: 10px;">Create Your Own Tour <i class="fas fa-chevron-right" style="color: #d2ad4c;"></i></a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>