@extends('layouts.web-secondary')

@section('page-content')
<div class="container" style="padding-top: 50px;padding-bottom: 25px;">
        <div class="row">
            <div class="col">
                <h3 class="text-uppercase text-center" style="font-family: 'Titillium Web', sans-serif;">Our Team</h3>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-top: 10px;">
            <p class="text-center">
            Since 2024, the team at Explore Thaprobana has continuously evolved, combining experience and a commitment to exceeding our clients' expectations. Our team is young, enthusiastic, professionally qualified, and dedicated to providing exceptional service. We genuinely care about our clients' needs and strive to ensure their satisfaction. It is our people and their travel expertise that set us apart. Our specialists effortlessly share their knowledge, tailoring amazing experiences that meet every requirement, giving you complete peace of mind for your vacation in Sri Lanka.</p>
        </div>
        <div class="row justify-content-center" style="padding-top: 50px;">
            @foreach ($teamMembers as $teamMember)
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-3 text-center mt-5">
                    <img class="img-fluid team-img rounded-circle" src="{{imageUrl($teamMember->image, ['w' => 200, 'h' => 200, 'fit' => 'crop', 'fm' => 'pjpg'])}}">
                    <h4 class="mt-2">{{$teamMember->name}}</h4>
                    <div class="team_descr text-uppercase text-justify" style="font-family: 'Titillium Web', sans-serif; color: #898989;">
                        {!! $teamMember->description !!}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
