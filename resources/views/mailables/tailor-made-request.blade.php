@extends('layouts.web-mailable')

@section('contents')
    <h3>Tailor-made tour request</h3>

{{--     "arrival_date" => "2023-09-08"
  "arrival_time" => "00:00"
  "departure_date" => "2023-09-08"
  "departure_time" => "00:00"
  "adults_count" => "1"
  "children_count" => "1"
  "room_types" => array:1 [▼
    0 => "single"
  ]
  "holiday_types" => array:6 [▼
    "nature" => "3"
    "history" => "3"
    "adventure" => "3"
    "wildlife" => "3"
    "local_lifestyle" => "3"
    "holiday_types" => "3"
  ]
  "accomodation_types" => array:1 [▼
    0 => "Guest Houses"
  ]
  "typeOfVehicle" => "Economy Saloon Car"
  "custname" => "Isuru Ranawaka"
  "email" => "isu3ru@gmail.com"
  "phone" => "+94712912826"
  "skypename" => "mybookinglk"
  "country" => "Sri Lanka"
  "special_requirements" => "this is a test. please ignore."
  "total_accomodation_budget" => "0"--}}

    <p><strong>Arrival Date: </strong>{{$arrival_date ?? '-'}}</p>
    <p><strong>Arrival Time: </strong>{{$arrival_time ?? '-'}}</p>
    <p><strong>Departure Date: </strong>{{$departure_date ?? '-'}}</p>
    <p><strong>Departure Time: </strong>{{$departure_time ?? '-'}}</p>
    <p><strong>Adults Count: </strong>{{$adults_count ?? '-'}}</p>
    <p><strong>Children Count: </strong>{{$children_count ?? '-'}}</p>
    <p><strong>Rooms Count: </strong>{{$rooms_count ?? '-'}}</p>
    <p><strong>Room Types: </strong>{{$room_types ?? '-'}}</p>
    <p><strong>Holiday Types: </strong>{{$holiday_types ?? '-'}}</p>
    <p><strong>Accomodation Types: </strong>{{$accomodation_types ?? '-'}}</p>
    <p><strong>Type of Vehicle: </strong>{{$typeOfVehicle ?? '-'}}</p>
    <p><strong>Customer Name: </strong>{{$custname ?? '-'}}</p>
    <p><strong>Email: </strong>{{$email ?? '-'}}</p>
    <p><strong>Phone: </strong>{{$phone ?? '-'}}</p>
    <p><strong>Country: </strong>{{$country ?? '-'}}</p>
    <p><strong>Special Requirements: </strong>{{$special_requirements ?? '-'}}</p>
    <p><strong>Total Accomodation Budget: </strong>{{$total_accomodation_budget ?? '-'}}</p>

    <p><strong>IP Address: </strong>{{user_ip_address()}}</p>
@endsection
