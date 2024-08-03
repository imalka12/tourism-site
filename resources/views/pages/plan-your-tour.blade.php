@php use Carbon\Carbon; @endphp
@extends('layouts.web-secondary')

@section('page-content')

    <div class="container" id="form-wrapper">
        <div class="alert alert-info">Please fill all fields marked with <span style="color: red">*</span> symbol.</div>

        <form action="{{ route('site.tailor-made-submit') }}" id="planyourtourform" name="planyourtourform"
              method="post"
              class="needs-validation" novalidate>
            @csrf
            <div class="card card-body mb-3">
                <h4 class="card-title">Tour Details</h4>
                <div class="form-row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="arrival_date" data-required>Arrival Date:</label>
                            <div class="controls">
                                {{-- <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                    value="{{ old('arrival_date'), date('Y-m-d') }}" required="required"> --}}
                                <input type="date" class="form-control" id="arrival_date" name="arrival_date"
                                       value="{{ old('arrival_date', Carbon::now()->format('Y-m-d')) }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="arrival_time">Arrival Time:</label>
                            <div class="controls">
                                <input type="time" class="form-control" id="arrival_time" name="arrival_time"
                                       value="{{ old('arrival_time', '00:00') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="departure_date" data-required>Departure Date:</label>
                            <div class="controls">
                                <input type="date" class="form-control" id="departure_date" name="departure_date"
                                       value="{{ old('departure_date', Carbon::now()->addWeek()->format('Y-m-d')) }}"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="form-group">
                            <label for="departure_time">Departure Time:</label>
                            <div class="controls">
                                <input type="time" class="form-control" id="departure_time" name="departure_time"
                                       value="{{ old('departure_time', '00:00') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="adults_count" data-required>No. of Adults:</label>
                            <div class="controls">
                                <input type="number" name="adults_count" id="adults_count" class="form-control"
                                       min="0" max="100" step="1" value="{{ old('adults_count', 0) }}"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="children_count" data-required>No. of Children: </label>
                            <div class="controls">
                                <input type="number" name="children_count" id="children_count" class="form-control"
                                       min="0" max="100" step="0" value="{{ old('children_count', 0) }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="rooms_count" data-required>No. of Rooms:</label>
                            <div class="controls">
                                <input type="number" name="rooms_count" id="rooms_count" class="form-control"
                                       min="1" max="100" step="1" value="{{ old('rooms_count', 0) }}"
                                       required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="form-group pl-3">
                            <label for="room_type">Room Type:</label>
                            <div class="controls mt-2">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="room_single"
                                           name="room_types[]"
                                           value="single" {{ in_array('single', old('room_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="room_single">Single</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="room_double"
                                           name="room_types[]" value="double"
                                        {{ in_array('double', old('room_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="room_double">Double</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="room_triple"
                                           name="room_types[]" value="triple"
                                        {{ in_array('triple', old('room_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="room_triple">Triple</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="room_family"
                                           name="room_types[]" value="family"
                                        {{ in_array('family', old('room_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="room_family">Family</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 border-top pt-3 mt-3">
                        <h5>What kind of Holiday do you prefer?</h5>
                        <p>please <strong>mark your preference levels for each category mentioned below as a percentage
                                level
                                for each area</strong>, and we will present you a customized plan as of your preference
                            level for the
                            category.</p>
                        <label for="" data-required>Holiday Types</label>
                        <div class="form-row">
                            <div class="col-lg-2">
                                <label for="customRange2">Nature <span data-perc="nature"></span></label>
                                <input type="range" class="custom-range holiday_type_ranges" min="0"
                                       max="10" value="{{ old('holiday_types.nature', 0) }}" id="holiday_type_nature"
                                       name="holiday_types[nature]" data-changerel="nature">
                            </div>
                            <div class="col-lg-2">
                                <label for="customRange2">Culture <span data-perc="culture"></span></label>
                                <input type="range" class="custom-range holiday_type_ranges" min="0"
                                       max="10" value="{{ old('holiday_types.history', 0) }}"
                                       id="holiday_type_history_and_culture" name="holiday_types[culture]"
                                       data-changerel="culture">
                            </div>
                            <div class="col-lg-2">
                                <label for="customRange2">Adventure <span data-perc="adventure"></span></label>
                                <input type="range" class="custom-range holiday_type_ranges" min="0"
                                       max="10" value="{{ old('holiday_types.adventure', 0) }}"
                                       id="holiday_type_adventure" name="holiday_types[adventure]"
                                       data-changerel="adventure">
                            </div>
                            <div class="col-lg-2">
                                <label for="customRange2">Wild life <span data-perc="wildlife"></span></label>
                                <input type="range" class="custom-range holiday_type_ranges" min="0"
                                       max="10" value="{{ old('holiday_types.wildlife', 0) }}"
                                       id="holiday_type_wildlife" name="holiday_types[wildlife]"
                                       data-changerel="wildlife">
                            </div>
                            <div class="col-lg-2">
                                <label for="customRange2">Local Lifestyle <span
                                        data-perc="local_lifestyle"></span></label>
                                <input type="range" class="custom-range holiday_type_ranges" min="0"
                                       max="10" value="{{ old('holiday_types.local_lifestyle', 0) }}"
                                       id="holiday_type_local_lifestyle" name="holiday_types[local_lifestyle]"
                                       data-changerel="local_lifestyle">
                            </div>
                            <div class="col-lg-2">
                                <label for="customRange2">Beach Relaxation <span
                                        data-perc="beach_relaxation"></span></label>
                                <input type="range" class="custom-range holiday_type_ranges" min="0"
                                       max="10" value="{{ old('holiday_types.holiday_types', 0) }}"
                                       id="holiday_type_beach_relaxation" name="holiday_types[beach_relaxation]"
                                       data-changerel="beach_relaxation">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body mb-3">
                <h4 class="card-title">Tour Preferences</h4>
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <label>What kind of accomodation do you prefer?</label>
                        <div class="form-group">

                            <div class="controls">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="acmd_guest_houses"
                                           name="accomodation_types[]" value="Guest Houses"
                                        {{ in_array('Guest Houses', old('accomodation_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="acmd_guest_houses">Guest Houses</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="acmd_23stars"
                                           name="accomodation_types[]" value="2/3 Star Hotels"
                                        {{ in_array('2/3 Star Hotels', old('accomodation_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="acmd_23stars">2/3 Star Hotels</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="acmd_eco_green"
                                           name="accomodation_types[]" value="Eco & Green style Hotels"
                                        {{ in_array('Eco & Green style Hotels', old('accomodation_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="acmd_eco_green">Eco & Green style
                                        Hotels</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="acmd_34stars"
                                           name="accomodation_types[]" value="3/4 Star Hotels"
                                        {{ in_array('3/4 Star Hotels', old('accomodation_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="acmd_34stars">3/4 Star Hotels</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="acmd_5_boutique"
                                           name="accomodation_types[]" value="5 Star Boutique Hotels"
                                        {{ in_array('5 Star Boutique Hotels', old('accomodation_types', [])) ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="acmd_5_boutique">5 Star Boutique
                                        Hotels</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <label for="total_accomodation_budget">Mixture of all above with a total budget of USD ($)
                                :</label>
                            <input type="number" name="total_accomodation_budget" id="total_accomodation_budget"
                                   class="form-control d-inline-block w-25"
                                   value="{{ old('total_accomodation_budget', 0) }}">
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <div class="d-inline-block mr-1">What is your preferred meal plan? :</div>
                            <label class="d-inline-block mr-2">
                                <input id="room-requirements_bb" name="preferedAccommodationOther" type="radio"
                                       value="Bed and Breakfast" checked>
                                Bed and Breakfast (BB)
                            </label>
                            <label class="d-inline-block mr-2">
                                <input id="room-requirements_hb" name="preferedAccommodationOther" type="radio"
                                       value="Half Board">
                                Half Board (HB)
                            </label>
                            <label class="d-inline-block mr-2">
                                <input id="room-requirements_fb" name="preferedAccommodationOther" type="radio"
                                       value="Fullboard">
                                Full Board (FB)
                            </label>
                            <label class="d-inline-block mr-2">
                                <input id="room-requirements_ainc" name="preferedAccommodationOther" type="radio"
                                       value="AllInclusive">
                                All Inclusive
                            </label>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12">
                        <label><strong>What type of vehicle you are looking for?</strong></label>

                        <div class="form-row">
                            <div class="col-lg-3">
                                <label class="radio-inline" data-toggle="tooltip" data-placement="top"
                                       title="for 03 passengers / Average price of 40$ per day for 8+ days tour"
                                       for="typeOfVehicleEconomySaloon">
                                    <input id="typeOfVehicleEconomySaloon" name="typeOfVehicle" type="radio"
                                           value="Economy Saloon Car"
                                        {{ old('typeOfVehicle') == 'Economy Saloon Car' ? 'checked' : '' }}>
                                    Economy Saloon Car
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline" data-toggle="tooltip" data-placement="top"
                                       title="for 03 passengers / Average price of 50$/60$ per day for 8+ days tour"
                                       for="typeOfVehicleLuxurySaloon">
                                    <input id="typeOfVehicleLuxurySaloon" name="typeOfVehicle" type="radio"
                                           value="Luxury Saloon Car"
                                        {{ old('typeOfVehicle') == 'Luxury Saloon Car' ? 'checked' : '' }}>
                                    Luxury Saloon Car
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline" data-toggle="tooltip" data-placement="top"
                                       title="for families with 02 small kids / Average price of 45$/50$ per day for 8+ days tour"
                                       for="typeOfVehicleWagonCar">
                                    <input id="typeOfVehicleWagonCar" name="typeOfVehicle" type="radio"
                                           value="Wagon Car" {{ old('typeOfVehicle') == 'Wagon Car' ? 'checked' : '' }}>
                                    Wagon
                                    Car
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline" data-toggle="tooltip" data-placement="top"
                                       for="typeOfVehicleMiniCoachSmall"
                                       title="for 02-06 Passengers / Average price of 50$/55$ per day for 8+ days tour">
                                    <input id="typeOfVehicleMiniCoach" name="typeOfVehicle" type="radio"
                                           value="Mini Coach Small"
                                        {{ old('typeOfVehicle') == 'Mini Coach' ? 'checked' : '' }}>
                                    Mini Coach
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline" data-toggle="tooltip" data-placement="top"
                                       for="typeOfVehicleCoach"
                                       title="for 15 Passengers / Average price of 100$/130$ per day for 8+ days tour ">
                                    <input id="typeOfVehicleCoach" name="typeOfVehicle" type="radio" value="Coach"
                                        {{ old('typeOfVehicle') == 'Coach' ? 'checked' : '' }}>
                                    Coach
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline" data-toggle="tooltip" data-placement="top"
                                       title="max 03 AdultsOR 02 Adults+02 Kids per vehicle"
                                       for="typeOfVehicleOffRoad4x4">
                                    <input id="typeOfVehicleOffRoad4x4" name="typeOfVehicle" type="radio"
                                           value="Off-road 4x4 vehicle"
                                        {{ old('typeOfVehicle') == 'Off-road 4x4 vehicle' ? 'checked' : '' }}> Off-road
                                    4x4
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline" data-toggle="tooltip" data-placement="top"
                                       title="max 03 AdultsOR 02 Adults+02 Kids per vehicle"
                                       for="typeOfVehicleOffRoad4x4">
                                    <input id="typeOfVehicleOffRoad4x4" name="typeOfVehicle" type="radio"
                                           value="Off-road 4x4 vehicle"
                                        {{ old('typeOfVehicle') == 'Off-road 4x4 vehicle' ? 'checked' : '' }}> Off-road
                                    4x4
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 hide">
                        <strong><label for="room-requirements"></label></strong>
                        <div>
                            <div class="camping" style="display: none;">
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                                  value="Motorbike"
                                            {{ in_array('Motorbike', (array) old('campingVehicle')) ? 'checked' : '' }}>
                                        Motorbike</label>
                                </div>
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                                  value="Paddling Bike"
                                            {{ in_array('Paddling Bike', (array) old('campingVehicle')) ? 'checked' : '' }}>
                                        Paddling Bike</label>
                                </div>
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                                  value="ATV / Quad Bike"
                                            {{ in_array('ATV / Quad Bike', (array) old('campingVehicle')) ? 'checked' : '' }}>
                                        ATV / Quad Bike</label>
                                </div>
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                                  value="Surfing Boards"
                                            {{ in_array('Surfing Boards', (array) old('campingVehicle')) ? 'checked' : '' }}>
                                        Surfing Boards</label>
                                </div>
                            </div>
                            {{-- <div class="camping" style="display: none;">
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                            value="Motorbike" {{ in_array('') }}> Motorbike</label>
                                </div>
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                            value="Paddling Bike"> Paddling Bike</label>
                                </div>
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                            value="ATV / Quad Bike"> ATV / Quad Bike</label>
                                </div>
                                <div class="col-lg-6">
                                    <label><input id="room-requirements" name="campingVehicle[]" type="checkbox"
                                            value="Surfing Boards"> Surfing Boards</label>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">
                        <h6>If you are interested we can organize the below activities</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="yoga"
                                        {{ in_array('yoga', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Yoga
                                </label>

                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Massage"
                                        {{ in_array('Massage', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Ayurvedic Treatments/ Massage
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Meditation"
                                        {{ in_array('Meditation', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Meditation
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Cooking Lessons"
                                        {{ in_array('Cooking Lessons', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Cooking Lessons
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Kite Surfing"
                                        {{ in_array('Kite Surfing', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Kite Surfing
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Surfing"
                                        {{ in_array('Surfing', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Surfing
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Star Gazing"
                                        {{ in_array('Star Gazing', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Star Gazing
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Camping"
                                        {{ in_array('Camping', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Camping
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Snorkeling"
                                        {{ in_array('Snorkeling', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Snorkeling
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Diving"
                                        {{ in_array('Diving', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Diving
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Hiking"
                                        {{ in_array('Hiking', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Hiking
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="specialInterestedActivities[]" type="checkbox"
                                           value="Visiting Local School & Houses"
                                        {{ in_array('Visiting Local School & Houses', (array) old('specialInterestedActivities')) ? 'checked' : '' }}>
                                    Visiting Local School &amp; Houses
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h6>Preferred Contact Method</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="preferredContactMethod[]" type="checkbox"
                                           value="Email"
                                        {{ in_array('Email', (array) old('preferredContactMethod')) ? 'checked' : '' }}>
                                    Email
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="preferredContactMethod[]" type="checkbox"
                                           value="Viber"
                                        {{ in_array('Viber', (array) old('preferredContactMethod')) ? 'checked' : '' }}>
                                    Viber
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="preferredContactMethod[]" type="checkbox"
                                           value="Skype"
                                        {{ in_array('Skype', (array) old('preferredContactMethod')) ? 'checked' : '' }}>
                                    Skype
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="preferredContactMethod[]" type="checkbox"
                                           value="Voice Call"
                                        {{ in_array('Voice Call', (array) old('preferredContactMethod')) ? 'checked' : '' }}>
                                    Voice Call
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="preferredContactMethod[]" type="checkbox"
                                           value="Line"
                                        {{ in_array('Line', (array) old('preferredContactMethod')) ? 'checked' : '' }}>
                                    Line
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <label>
                                    <input id="room-requirements" name="preferredContactMethod[]" type="checkbox"
                                           value="WhatsApp"
                                        {{ in_array('WhatsApp', (array) old('preferredContactMethod')) ? 'checked' : '' }}>
                                    WhatsApp
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card card-body mb-3">
                <h4 class="card-title">Personal Information</h4>
                <div class="row">
                    <div class="col-lg-6 mb-2">
                        <label for="custname" data-required="true">Name :</label>
                        <input type="text" class="form-control" name="custname" id="custname"
                               placeholder="Your name" required value="{{ old('custname') }}"/>
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="email" data-required="true">Email :</label>
                        <input id="email" name="email" class="form-control" type="email" placeholder="Email"
                               required value="{{ old('email') }}">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="phone" data-required>Phone</label>
                        <input id="phone" name="phone" class="form-control" type="text" placeholder="Phone"
                               required value="{{ old('phone') }}">
                    </div>
                    <div class="col-lg-6 mb-2">
                        <label for="Country" data-required="true">Country : </label>
                        <select id="country" name="country" class="form-control" required>
                            <option value="" {{ old('country') == '' ? 'selected' : '' }}>Select your country
                            </option>
                            <option value="Afghanistan" {{ old('country') == 'Afghanistan' ? 'selected' : '' }}>
                                Afghanistan
                            </option>
                            <option value="Albania" {{ old('country') == 'Albania' ? 'selected' : '' }}>Albania</option>
                            <option value="Algeria" {{ old('country') == 'Algeria' ? 'selected' : '' }}>Algeria</option>
                            <option value="American Samoa" {{ old('country') == 'American Samoa' ? 'selected' : '' }}>
                                American Samoa
                            </option>
                            <option value="Andorra" {{ old('country') == 'Andorra' ? 'selected' : '' }}>Andorra</option>
                            <option value="Angola" {{ old('country') == 'Angola' ? 'selected' : '' }}>Angola</option>
                            <option value="Anguilla" {{ old('country') == 'Anguilla' ? 'selected' : '' }}>Anguilla
                            </option>
                            <option value="Antigua & Barbuda"
                                {{ old('country') == 'Antigua & Barbuda' ? 'selected' : '' }}>Antigua & Barbuda
                            </option>
                            <option value="Argentina" {{ old('country') == 'Argentina' ? 'selected' : '' }}>Argentina
                            </option>
                            <option value="Armenia" {{ old('country') == 'Armenia' ? 'selected' : '' }}>Armenia</option>
                            <option value="Aruba" {{ old('country') == 'Aruba' ? 'selected' : '' }}>Aruba</option>
                            <option value="Australia" {{ old('country') == 'Australia' ? 'selected' : '' }}>Australia
                            </option>
                            <option value="Austria" {{ old('country') == 'Austria' ? 'selected' : '' }}>Austria</option>
                            <option value="Azerbaijan" {{ old('country') == 'Azerbaijan' ? 'selected' : '' }}>Azerbaijan
                            </option>
                            <option value="Bahamas" {{ old('country') == 'Bahamas' ? 'selected' : '' }}>Bahamas</option>
                            <option value="Bahrain" {{ old('country') == 'Bahrain' ? 'selected' : '' }}>Bahrain</option>
                            <option value="Bangladesh" {{ old('country') == 'Bangladesh' ? 'selected' : '' }}>Bangladesh
                            </option>
                            <option value="Barbados" {{ old('country') == 'Barbados' ? 'selected' : '' }}>Barbados
                            </option>
                            <option value="Belarus" {{ old('country') == 'Belarus' ? 'selected' : '' }}>Belarus</option>
                            <option value="Belgium" {{ old('country') == 'Belgium' ? 'selected' : '' }}>Belgium</option>
                            <option value="Belize" {{ old('country') == 'Belize' ? 'selected' : '' }}>Belize</option>
                            <option value="Benin" {{ old('country') == 'Benin' ? 'selected' : '' }}>Benin</option>
                            <option value="Bermuda" {{ old('country') == 'Bermuda' ? 'selected' : '' }}>Bermuda</option>
                            <option value="Bhutan" {{ old('country') == 'Bhutan' ? 'selected' : '' }}>Bhutan</option>
                            <option value="Bolivia" {{ old('country') == 'Bolivia' ? 'selected' : '' }}>Bolivia</option>
                            <option value="Bonaire" {{ old('country') == 'Bonaire' ? 'selected' : '' }}>Bonaire</option>
                            <option value="Bosnia & Herzegovina"
                                {{ old('country') == 'Bosnia & Herzegovina' ? 'selected' : '' }}>Bosnia & Herzegovina
                            </option>
                            <option value="Botswana" {{ old('country') == 'Botswana' ? 'selected' : '' }}>Botswana
                            </option>
                            <option value="Brazil" {{ old('country') == 'Brazil' ? 'selected' : '' }}>Brazil</option>
                            <option value="British Indian Ocean Ter"
                                {{ old('country') == 'British Indian Ocean Ter' ? 'selected' : '' }}>British Indian
                                Ocean
                                Ter
                            </option>
                            <option value="Brunei" {{ old('country') == 'Brunei' ? 'selected' : '' }}>Brunei</option>
                            <option value="Bulgaria" {{ old('country') == 'Bulgaria' ? 'selected' : '' }}>Bulgaria
                            </option>
                            <option value="Burkina Faso" {{ old('country') == 'Burkina Faso' ? 'selected' : '' }}>
                                Burkina
                                Faso
                            </option>
                            <option value="Burundi" {{ old('country') == 'Burundi' ? 'selected' : '' }}>Burundi</option>
                            <option value="Cambodia" {{ old('country') == 'Cambodia' ? 'selected' : '' }}>Cambodia
                            </option>
                            <option value="Cameroon" {{ old('country') == 'Cameroon' ? 'selected' : '' }}>Cameroon
                            </option>
                            <option value="Canada" {{ old('country') == 'Canada' ? 'selected' : '' }}>Canada</option>
                            <option value="Canary Islands" {{ old('country') == 'Canary Islands' ? 'selected' : '' }}>
                                Canary Islands
                            </option>
                            <option value="Cape Verde" {{ old('country') == 'Cape Verde' ? 'selected' : '' }}>Cape Verde
                            </option>
                            <option value="Cayman Islands" {{ old('country') == 'Cayman Islands' ? 'selected' : '' }}>
                                Cayman Islands
                            </option>
                            <option value="Central African Republic"
                                {{ old('country') == 'Central African Republic' ? 'selected' : '' }}>Central African
                                Republic
                            </option>
                            <option value="Chad" {{ old('country') == 'Chad' ? 'selected' : '' }}>Chad</option>
                            <option value="Channel Islands" {{ old('country') == 'Channel Islands' ? 'selected' : '' }}>
                                Channel Islands
                            </option>
                            <option value="Chile" {{ old('country') == 'Chile' ? 'selected' : '' }}>Chile</option>
                            <option value="China" {{ old('country') == 'China' ? 'selected' : '' }}>China</option>
                            <option value="Christmas Island"
                                {{ old('country') == 'Christmas Island' ? 'selected' : '' }}>Christmas Island
                            </option>
                            <option value="Cocos Island" {{ old('country') == 'Cocos Island' ? 'selected' : '' }}>Cocos
                                Island
                            </option>
                            <option value="Colombia" {{ old('country') == 'Colombia' ? 'selected' : '' }}>Colombia
                            </option>
                            <option value="Comoros" {{ old('country') == 'Comoros' ? 'selected' : '' }}>Comoros</option>
                            <option value="Congo" {{ old('country') == 'Congo' ? 'selected' : '' }}>Congo</option>
                            <option value="Cook Islands" {{ old('country') == 'Cook Islands' ? 'selected' : '' }}>Cook
                                Islands
                            </option>
                            <option value="Costa Rica" {{ old('country') == 'Costa Rica' ? 'selected' : '' }}>Costa Rica
                            </option>
                            <option value="Cote D'Ivoire" {{ old('country') == "Cote D'Ivoire" ? 'selected' : '' }}>Cote
                                D'Ivoire
                            </option>
                            <option value="Croatia" {{ old('country') == 'Croatia' ? 'selected' : '' }}>Croatia</option>
                            <option value="Cuba" {{ old('country') == 'Cuba' ? 'selected' : '' }}>Cuba</option>
                            <option value="Curacao" {{ old('country') == 'Curacao' ? 'selected' : '' }}>Curacao</option>
                            <option value="Cyprus" {{ old('country') == 'Cyprus' ? 'selected' : '' }}>Cyprus</option>
                            <option value="Czech Republic" {{ old('country') == 'Czech Republic' ? 'selected' : '' }}>
                                Czech Republic
                            </option>
                            <option value="Denmark" {{ old('country') == 'Denmark' ? 'selected' : '' }}>Denmark</option>
                            <option value="Djibouti" {{ old('country') == 'Djibouti' ? 'selected' : '' }}>Djibouti
                            </option>
                            <option value="Dominica" {{ old('country') == 'Dominica' ? 'selected' : '' }}>Dominica
                            </option>
                            <option value="Dominican Republic"
                                {{ old('country') == 'Dominican Republic' ? 'selected' : '' }}>Dominican Republic
                            </option>
                            <option value="East Timor" {{ old('country') == 'East Timor' ? 'selected' : '' }}>East Timor
                            </option>
                            <option value="Ecuador" {{ old('country') == 'Ecuador' ? 'selected' : '' }}>Ecuador</option>
                            <option value="Egypt" {{ old('country') == 'Egypt' ? 'selected' : '' }}>Egypt</option>
                            <option value="El Salvador" {{ old('country') == 'El Salvador' ? 'selected' : '' }}>El
                                Salvador
                            </option>
                            <option value="Equatorial Guinea"
                                {{ old('country') == 'Equatorial Guinea' ? 'selected' : '' }}>Equatorial Guinea
                            </option>
                            <option value="Eritrea" {{ old('country') == 'Eritrea' ? 'selected' : '' }}>Eritrea</option>
                            <option value="Estonia" {{ old('country') == 'Estonia' ? 'selected' : '' }}>Estonia</option>
                            <option value="Ethiopia" {{ old('country') == 'Ethiopia' ? 'selected' : '' }}>Ethiopia
                            </option>
                            <option value="Falkland Islands"
                                {{ old('country') == 'Falkland Islands' ? 'selected' : '' }}>Falkland Islands
                            </option>
                            <option value="Faroe Islands" {{ old('country') == 'Faroe Islands' ? 'selected' : '' }}>
                                Faroe
                                Islands
                            </option>
                            <option value="Fiji" {{ old('country') == 'Fiji' ? 'selected' : '' }}>Fiji</option>
                            <option value="Finland" {{ old('country') == 'Finland' ? 'selected' : '' }}>Finland</option>
                            <option value="France" {{ old('country') == 'France' ? 'selected' : '' }}>France</option>
                            <option value="French Guiana" {{ old('country') == 'French Guiana' ? 'selected' : '' }}>
                                French Guiana
                            </option>
                            <option value="French Polynesia"
                                {{ old('country') == 'French Polynesia' ? 'selected' : '' }}>French Polynesia
                            </option>
                            <option value="French Southern Ter"
                                {{ old('country') == 'French Southern Ter' ? 'selected' : '' }}>French Southern Ter
                            </option>
                            <option value="Gabon" {{ old('country') == 'Gabon' ? 'selected' : '' }}>Gabon</option>
                            <option value="Gambia" {{ old('country') == 'Gambia' ? 'selected' : '' }}>Gambia</option>
                            <option value="Georgia" {{ old('country') == 'Georgia' ? 'selected' : '' }}>Georgia</option>
                            <option value="Germany" {{ old('country') == 'Germany' ? 'selected' : '' }}>Germany</option>
                            <option value="Ghana" {{ old('country') == 'Ghana' ? 'selected' : '' }}>Ghana</option>
                            <option value="Gibraltar" {{ old('country') == 'Gibraltar' ? 'selected' : '' }}>Gibraltar
                            </option>
                            <option value="Great Britain" {{ old('country') == 'Great Britain' ? 'selected' : '' }}>
                                Great
                                Britain
                            </option>
                            <option value="Greece" {{ old('country') == 'Greece' ? 'selected' : '' }}>Greece</option>
                            <option value="Greenland" {{ old('country') == 'Greenland' ? 'selected' : '' }}>Greenland
                            </option>
                            <option value="Grenada" {{ old('country') == 'Grenada' ? 'selected' : '' }}>Grenada</option>
                            <option value="Guadeloupe" {{ old('country') == 'Guadeloupe' ? 'selected' : '' }}>Guadeloupe
                            </option>
                            <option value="Guam" {{ old('country') == 'Guam' ? 'selected' : '' }}>Guam</option>
                            <option value="Guatemala" {{ old('country') == 'Guatemala' ? 'selected' : '' }}>Guatemala
                            </option>
                            <option value="Guinea" {{ old('country') == 'Guinea' ? 'selected' : '' }}>Guinea</option>
                            <option value="Guyana" {{ old('country') == 'Guyana' ? 'selected' : '' }}>Guyana</option>
                            <option value="Haiti" {{ old('country') == 'Haiti' ? 'selected' : '' }}>Haiti</option>
                            <option value="Hawaii" {{ old('country') == 'Hawaii' ? 'selected' : '' }}>Hawaii</option>
                            <option value="Honduras" {{ old('country') == 'Honduras' ? 'selected' : '' }}>Honduras
                            </option>
                            <option value="Hong Kong" {{ old('country') == 'Hong Kong' ? 'selected' : '' }}>Hong Kong
                            </option>
                            <option value="Hungary" {{ old('country') == 'Hungary' ? 'selected' : '' }}>Hungary</option>
                            <option value="Iceland" {{ old('country') == 'Iceland' ? 'selected' : '' }}>Iceland</option>
                            <option value="India" {{ old('country') == 'India' ? 'selected' : '' }}>India</option>
                            <option value="Indonesia" {{ old('country') == 'Indonesia' ? 'selected' : '' }}>Indonesia
                            </option>
                            <option value="Iran" {{ old('country') == 'Iran' ? 'selected' : '' }}>Iran</option>
                            <option value="Iraq" {{ old('country') == 'Iraq' ? 'selected' : '' }}>Iraq</option>
                            <option value="Ireland" {{ old('country') == 'Ireland' ? 'selected' : '' }}>Ireland</option>
                            <option value="Isle of Man" {{ old('country') == 'Isle of Man' ? 'selected' : '' }}>Isle of
                                Man
                            </option>
                            <option value="Israel" {{ old('country') == 'Israel' ? 'selected' : '' }}>Israel</option>
                            <option value="Italy" {{ old('country') == 'Italy' ? 'selected' : '' }}>Italy</option>
                            <option value="Jamaica" {{ old('country') == 'Jamaica' ? 'selected' : '' }}>Jamaica</option>
                            <option value="Japan" {{ old('country') == 'Japan' ? 'selected' : '' }}>Japan</option>
                            <option value="Jordan" {{ old('country') == 'Jordan' ? 'selected' : '' }}>Jordan</option>
                            <option value="Kazakhstan" {{ old('country') == 'Kazakhstan' ? 'selected' : '' }}>Kazakhstan
                            </option>
                            <option value="Kenya" {{ old('country') == 'Kenya' ? 'selected' : '' }}>Kenya</option>
                            <option value="Kiribati" {{ old('country') == 'Kiribati' ? 'selected' : '' }}>Kiribati
                            </option>
                            <option value="Korea North" {{ old('country') == 'Korea North' ? 'selected' : '' }}>Korea
                                North
                            </option>
                            <option value="Korea South" {{ old('country') == 'Korea South' ? 'selected' : '' }}>Korea
                                South
                            </option>
                            <option value="Kuwait" {{ old('country') == 'Kuwait' ? 'selected' : '' }}>Kuwait</option>
                            <option value="Kyrgyzstan" {{ old('country') == 'Kyrgyzstan' ? 'selected' : '' }}>Kyrgyzstan
                            </option>
                            <option value="Laos" {{ old('country') == 'Laos' ? 'selected' : '' }}>Laos</option>
                            <option value="Latvia" {{ old('country') == 'Latvia' ? 'selected' : '' }}>Latvia</option>
                            <option value="Lebanon" {{ old('country') == 'Lebanon' ? 'selected' : '' }}>Lebanon</option>
                            <option value="Lesotho" {{ old('country') == 'Lesotho' ? 'selected' : '' }}>Lesotho</option>
                            <option value="Liberia" {{ old('country') == 'Liberia' ? 'selected' : '' }}>Liberia</option>
                            <option value="Libya" {{ old('country') == 'Libya' ? 'selected' : '' }}>Libya</option>
                            <option value="Liechtenstein" {{ old('country') == 'Liechtenstein' ? 'selected' : '' }}>
                                Liechtenstein
                            </option>
                            <option value="Lithuania" {{ old('country') == 'Lithuania' ? 'selected' : '' }}>Lithuania
                            </option>
                            <option value="Luxembourg" {{ old('country') == 'Luxembourg' ? 'selected' : '' }}>Luxembourg
                            </option>
                            <option value="Macau" {{ old('country') == 'Macau' ? 'selected' : '' }}>Macau</option>
                            <option value="Macedonia" {{ old('country') == 'Macedonia' ? 'selected' : '' }}>Macedonia
                            </option>
                            <option value="Madagascar" {{ old('country') == 'Madagascar' ? 'selected' : '' }}>Madagascar
                            </option>
                            <option value="Malaysia" {{ old('country') == 'Malaysia' ? 'selected' : '' }}>Malaysia
                            </option>
                            <option value="Malawi" {{ old('country') == 'Malawi' ? 'selected' : '' }}>Malawi</option>
                            <option value="Maldives" {{ old('country') == 'Maldives' ? 'selected' : '' }}>Maldives
                            </option>
                            <option value="Mali" {{ old('country') == 'Mali' ? 'selected' : '' }}>Mali</option>
                            <option value="Malta" {{ old('country') == 'Malta' ? 'selected' : '' }}>Malta</option>
                            <option value="Marshall Islands"
                                {{ old('country') == 'Marshall Islands' ? 'selected' : '' }}>Marshall Islands
                            </option>
                            <option value="Martinique" {{ old('country') == 'Martinique' ? 'selected' : '' }}>Martinique
                            </option>
                            <option value="Mauritania" {{ old('country') == 'Mauritania' ? 'selected' : '' }}>Mauritania
                            </option>
                            <option value="Mauritius" {{ old('country') == 'Mauritius' ? 'selected' : '' }}>Mauritius
                            </option>
                            <option value="Mayotte" {{ old('country') == 'Mayotte' ? 'selected' : '' }}>Mayotte</option>
                            <option value="Mexico" {{ old('country') == 'Mexico' ? 'selected' : '' }}>Mexico</option>
                            <option value="Midway Islands" {{ old('country') == 'Midway Islands' ? 'selected' : '' }}>
                                Midway Islands
                            </option>
                            <option value="Moldova" {{ old('country') == 'Moldova' ? 'selected' : '' }}>Moldova</option>
                            <option value="Monaco" {{ old('country') == 'Monaco' ? 'selected' : '' }}>Monaco</option>
                            <option value="Mongolia" {{ old('country') == 'Mongolia' ? 'selected' : '' }}>Mongolia
                            </option>
                            <option value="Montserrat" {{ old('country') == 'Montserrat' ? 'selected' : '' }}>Montserrat
                            </option>
                            <option value="Morocco" {{ old('country') == 'Morocco' ? 'selected' : '' }}>Morocco</option>
                            <option value="Mozambique" {{ old('country') == 'Mozambique' ? 'selected' : '' }}>Mozambique
                            </option>
                            <option value="Myanmar" {{ old('country') == 'Myanmar' ? 'selected' : '' }}>Myanmar</option>
                            <option value="Namibia" {{ old('country') == 'Namibia' ? 'selected' : '' }}>Namibia</option>
                            <option value="Nauru" {{ old('country') == 'Nauru' ? 'selected' : '' }}>Nauru</option>
                            <option value="Nepal" {{ old('country') == 'Nepal' ? 'selected' : '' }}>Nepal</option>
                            <option value="Netherland Antilles"
                                {{ old('country') == 'Netherland Antilles' ? 'selected' : '' }}>Netherland Antilles
                            </option>
                            <option value="Netherlands" {{ old('country') == 'Netherlands' ? 'selected' : '' }}>
                                Netherlands (Holland, Europe)
                            </option>
                            <option value="Nevis" {{ old('country') == 'Nevis' ? 'selected' : '' }}>Nevis</option>
                            <option value="New Caledonia" {{ old('country') == 'New Caledonia' ? 'selected' : '' }}>New
                                Caledonia
                            </option>
                            <option value="New Zealand" {{ old('country') == 'New Zealand' ? 'selected' : '' }}>New
                                Zealand
                            </option>
                            <option value="Nicaragua" {{ old('country') == 'Nicaragua' ? 'selected' : '' }}>Nicaragua
                            </option>
                            <option value="Niger" {{ old('country') == 'Niger' ? 'selected' : '' }}>Niger</option>
                            <option value="Nigeria" {{ old('country') == 'Nigeria' ? 'selected' : '' }}>Nigeria</option>
                            <option value="Niue" {{ old('country') == 'Niue' ? 'selected' : '' }}>Niue</option>
                            <option value="Norfolk Island" {{ old('country') == 'Norfolk Island' ? 'selected' : '' }}>
                                Norfolk Island
                            </option>
                            <option value="Norway" {{ old('country') == 'Norway' ? 'selected' : '' }}>Norway</option>
                            <option value="Oman" {{ old('country') == 'Oman' ? 'selected' : '' }}>Oman</option>
                            <option value="Pakistan" {{ old('country') == 'Pakistan' ? 'selected' : '' }}>Pakistan
                            </option>
                            <option value="Palau Island" {{ old('country') == 'Palau Island' ? 'selected' : '' }}>Palau
                                Island
                            </option>
                            <option value="Palestine" {{ old('country') == 'Palestine' ? 'selected' : '' }}>Palestine
                            </option>
                            <option value="Panama" {{ old('country') == 'Panama' ? 'selected' : '' }}>Panama</option>
                            <option value="Papua New Guinea"
                                {{ old('country') == 'Papua New Guinea' ? 'selected' : '' }}>Papua New Guinea
                            </option>
                            <option value="Paraguay" {{ old('country') == 'Paraguay' ? 'selected' : '' }}>Paraguay
                            </option>
                            <option value="Peru" {{ old('country') == 'Peru' ? 'selected' : '' }}>Peru</option>
                            <option value="Philippines" {{ old('country') == 'Philippines' ? 'selected' : '' }}>
                                Philippines
                            </option>
                            <option value="Pitcairn Island" {{ old('country') == 'Pitcairn Island' ? 'selected' : '' }}>
                                Pitcairn Island
                            </option>
                            <option value="Poland" {{ old('country') == 'Poland' ? 'selected' : '' }}>Poland</option>
                            <option value="Portugal" {{ old('country') == 'Portugal' ? 'selected' : '' }}>Portugal
                            </option>
                            <option value="Puerto Rico" {{ old('country') == 'Puerto Rico' ? 'selected' : '' }}>Puerto
                                Rico
                            </option>
                            <option value="Qatar" {{ old('country') == 'Qatar' ? 'selected' : '' }}>Qatar</option>
                            <option value="Republic of Montenegro"
                                {{ old('country') == 'Republic of Montenegro' ? 'selected' : '' }}>Republic of
                                Montenegro
                            </option>
                            <option value="Republic of Serbia"
                                {{ old('country') == 'Republic of Serbia' ? 'selected' : '' }}>Republic of Serbia
                            </option>
                            <option value="Reunion" {{ old('country') == 'Reunion' ? 'selected' : '' }}>Reunion</option>
                            <option value="Romania" {{ old('country') == 'Romania' ? 'selected' : '' }}>Romania</option>
                            <option value="Russia" {{ old('country') == 'Russia' ? 'selected' : '' }}>Russia</option>
                            <option value="Rwanda" {{ old('country') == 'Rwanda' ? 'selected' : '' }}>Rwanda</option>
                            <option value="St Barthelemy" {{ old('country') == 'St Barthelemy' ? 'selected' : '' }}>St
                                Barthelemy
                            </option>
                            <option value="St Eustatius" {{ old('country') == 'St Eustatius' ? 'selected' : '' }}>St
                                Eustatius
                            </option>
                            <option value="St Helena" {{ old('country') == 'St Helena' ? 'selected' : '' }}>St Helena
                            </option>
                            <option value="St Kitts-Nevis" {{ old('country') == 'St Kitts-Nevis' ? 'selected' : '' }}>St
                                Kitts-Nevis
                            </option>
                            <option value="St Lucia" {{ old('country') == 'St Lucia' ? 'selected' : '' }}>St Lucia
                            </option>
                            <option value="St Maarten" {{ old('country') == 'St Maarten' ? 'selected' : '' }}>St Maarten
                            </option>
                            <option value="St Pierre & Miquelon"
                                {{ old('country') == 'St Pierre & Miquelon' ? 'selected' : '' }}>St Pierre & Miquelon
                            </option>
                            <option value="St Vincent & Grenadines"
                                {{ old('country') == 'St Vincent & Grenadines' ? 'selected' : '' }}>St Vincent &
                                Grenadines
                            </option>
                            <option value="Saipan" {{ old('country') == 'Saipan' ? 'selected' : '' }}>Saipan</option>
                            <option value="Samoa" {{ old('country') == 'Samoa' ? 'selected' : '' }}>Samoa</option>
                            <option value="Samoa American" {{ old('country') == 'Samoa American' ? 'selected' : '' }}>
                                Samoa American
                            </option>
                            <option value="San Marino" {{ old('country') == 'San Marino' ? 'selected' : '' }}>San Marino
                            </option>
                            <option value="Sao Tome & Principe"
                                {{ old('country') == 'Sao Tome & Principe' ? 'selected' : '' }}>Sao Tome & Principe
                            </option>
                            <option value="Saudi Arabia" {{ old('country') == 'Saudi Arabia' ? 'selected' : '' }}>Saudi
                                Arabia
                            </option>
                            <option value="Senegal" {{ old('country') == 'Senegal' ? 'selected' : '' }}>Senegal</option>
                            <option value="Serbia" {{ old('country') == 'Serbia' ? 'selected' : '' }}>Serbia</option>
                            <option value="Seychelles" {{ old('country') == 'Seychelles' ? 'selected' : '' }}>Seychelles
                            </option>
                            <option value="Sierra Leone" {{ old('country') == 'Sierra Leone' ? 'selected' : '' }}>Sierra
                                Leone
                            </option>
                            <option value="Singapore" {{ old('country') == 'Singapore' ? 'selected' : '' }}>Singapore
                            </option>
                            <option value="Slovakia" {{ old('country') == 'Slovakia' ? 'selected' : '' }}>Slovakia
                            </option>
                            <option value="Slovenia" {{ old('country') == 'Slovenia' ? 'selected' : '' }}>Slovenia
                            </option>
                            <option value="Solomon Islands" {{ old('country') == 'Solomon Islands' ? 'selected' : '' }}>
                                Solomon Islands
                            </option>
                            <option value="Somalia" {{ old('country') == 'Somalia' ? 'selected' : '' }}>Somalia</option>
                            <option value="South Africa" {{ old('country') == 'South Africa' ? 'selected' : '' }}>South
                                Africa
                            </option>
                            <option value="Spain" {{ old('country') == 'Spain' ? 'selected' : '' }}>Spain</option>
                            <option value="Sri Lanka" {{ old('country') == 'Sri Lanka' ? 'selected' : '' }}>Sri Lanka
                            </option>
                            <option value="Sudan" {{ old('country') == 'Sudan' ? 'selected' : '' }}>Sudan</option>
                            <option value="Suriname" {{ old('country') == 'Suriname' ? 'selected' : '' }}>Suriname
                            </option>
                            <option value="Swaziland" {{ old('country') == 'Swaziland' ? 'selected' : '' }}>Swaziland
                            </option>
                            <option value="Sweden" {{ old('country') == 'Sweden' ? 'selected' : '' }}>Sweden</option>
                            <option value="Switzerland" {{ old('country') == 'Switzerland' ? 'selected' : '' }}>
                                Switzerland
                            </option>
                            <option value="Syria" {{ old('country') == 'Syria' ? 'selected' : '' }}>Syria</option>
                            <option value="Tahiti" {{ old('country') == 'Tahiti' ? 'selected' : '' }}>Tahiti</option>
                            <option value="Taiwan" {{ old('country') == 'Taiwan' ? 'selected' : '' }}>Taiwan</option>
                            <option value="Tajikistan" {{ old('country') == 'Tajikistan' ? 'selected' : '' }}>Tajikistan
                            </option>
                            <option value="Tanzania" {{ old('country') == 'Tanzania' ? 'selected' : '' }}>Tanzania
                            </option>
                            <option value="Thailand" {{ old('country') == 'Thailand' ? 'selected' : '' }}>Thailand
                            </option>
                            <option value="Togo" {{ old('country') == 'Togo' ? 'selected' : '' }}>Togo</option>
                            <option value="Tokelau" {{ old('country') == 'Tokelau' ? 'selected' : '' }}>Tokelau</option>
                            <option value="Tonga" {{ old('country') == 'Tonga' ? 'selected' : '' }}>Tonga</option>
                            <option value="Trinidad & Tobago"
                                {{ old('country') == 'Trinidad & Tobago' ? 'selected' : '' }}>Trinidad & Tobago
                            </option>
                            <option value="Tunisia" {{ old('country') == 'Tunisia' ? 'selected' : '' }}>Tunisia</option>
                            <option value="Turkey" {{ old('country') == 'Turkey' ? 'selected' : '' }}>Turkey</option>
                            <option value="Turkmenistan" {{ old('country') == 'Turkmenistan' ? 'selected' : '' }}>
                                Turkmenistan
                            </option>
                            <option value="Turks & Caicos Is"
                                {{ old('country') == 'Turks & Caicos Is' ? 'selected' : '' }}>Turks & Caicos Is
                            </option>
                            <option value="Tuvalu" {{ old('country') == 'Tuvalu' ? 'selected' : '' }}>Tuvalu</option>
                            <option value="Uganda" {{ old('country') == 'Uganda' ? 'selected' : '' }}>Uganda</option>
                            <option value="Ukraine" {{ old('country') == 'Ukraine' ? 'selected' : '' }}>Ukraine</option>
                            <option value="United Arab Emirates"
                                {{ old('country') == 'United Arab Emirates' ? 'selected' : '' }}>United Arab Emirates
                            </option>
                            <option value="United Kingdom" {{ old('country') == 'United Kingdom' ? 'selected' : '' }}>
                                United Kingdom
                            </option>
                            <option value="United States of America"
                                {{ old('country') == 'United States of America' ? 'selected' : '' }}>United States of
                                America
                            </option>
                            <option value="Uruguay" {{ old('country') == 'Uruguay' ? 'selected' : '' }}>Uruguay</option>
                            <option value="Uzbekistan" {{ old('country') == 'Uzbekistan' ? 'selected' : '' }}>Uzbekistan
                            </option>
                            <option value="Vanuatu" {{ old('country') == 'Vanuatu' ? 'selected' : '' }}>Vanuatu</option>
                            <option value="Vatican City State"
                                {{ old('country') == 'Vatican City State' ? 'selected' : '' }}>Vatican City State
                            </option>
                            <option value="Venezuela" {{ old('country') == 'Venezuela' ? 'selected' : '' }}>Venezuela
                            </option>
                            <option value="Vietnam" {{ old('country') == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                            <option value="Virgin Islands (Brit)"
                                {{ old('country') == 'Virgin Islands (Brit)' ? 'selected' : '' }}>Virgin Islands (Brit)
                            </option>
                            <option value="Virgin Islands (USA)"
                                {{ old('country') == 'Virgin Islands (USA)' ? 'selected' : '' }}>Virgin Islands (USA)
                            </option>
                            <option value="Wake Island" {{ old('country') == 'Wake Island' ? 'selected' : '' }}>Wake
                                Island
                            </option>
                            <option value="Wallis & Futuna Is"
                                {{ old('country') == 'Wallis & Futuna Is' ? 'selected' : '' }}>Wallis & Futuna Is
                            </option>
                            <option value="Yemen" {{ old('country') == 'Yemen' ? 'selected' : '' }}>Yemen</option>
                            <option value="Zaire" {{ old('country') == 'Zaire' ? 'selected' : '' }}>Zaire</option>
                            <option value="Zambia" {{ old('country') == 'Zambia' ? 'selected' : '' }}>Zambia</option>
                            <option value="Zimbabwe" {{ old('country') == 'Zimbabwe' ? 'selected' : '' }}>Zimbabwe
                            </option>
                        </select>
                    </div>
                    <div class="col-lg-12 mb-2">
                        <label for="special-requirements">Special requirements</label>
                        <textarea id="special_requirements" name="special_requirements" class="form-control" cols=""
                                  rows="5"
                                  placeholder="Special requirements">{{ old('special_requirements') }}</textarea>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        </div>
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('custom-css')
    <style>
        #form-wrapper {
            margin: 0px auto;
            width: 90%;
        }

        label[data-required]::after {
            content: '*';
            color: red;
            display: inline-block;
            margin-left: 3px;
            margin-right: 3px;
        }

        .is-invalid.flash {
            animation-duration: 3s;
            animation-name: flash;
        }

        @keyframes flash {
            0% {
                background-color: #ff0000;
            }
            100% {
                background-color: #ffffff;
            }
        }

        /*for mobile devices*/
        @media only screen and (max-width: 600px) {
            #total_accomodation_budget {
                width: 100%;
            }
        }
    </style>
@endpush
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var arrivalDateInput = document.getElementById("arrival_date");
        var departureDateInput = document.getElementById("departure_date");
        departureDateInput.min = arrivalDateInput.value;
        arrivalDateInput.addEventListener("change", function () {
            departureDateInput.value = '';
            departureDateInput.min = arrivalDateInput.value;
        });
    });


</script>
@push('custom-js')
    <script src="{{ asset('assets/js/page-specific/tailor-made.js') }}" defer></script>
@endpush
