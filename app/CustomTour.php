<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomTour extends Model
{
    protected $fillable = [
        'arrival_date',
        'arrival_time',
        'departure_date',
        'departure_time',
        'adults_count',
        'children_count',
        'room_types',
        'holiday_types',
        'accomodation_types',
        'total_accomodation_budget',
        'typeOfVehicle',
        'specialInterestedActivities',
        'custname',
        'email',
        'phone',
        'skypename',
        'country',
        'special_requirements',
    ];
}
