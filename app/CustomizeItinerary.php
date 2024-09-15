<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class CustomizeItinerary extends Model
{
    use Spatial;

    protected $spatial = ['customize_itineraries'];

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'number_of_adults',
        'number_of_children',
        'country',
        'email',
        'telephone',
        'image',
        'budget',
        'total_days',
        'start',
        'end',
        'activity_ids',
        'tour_type_ids',
        'room_type',
        'meal_type',
        'number_of_rooms',
        'vehicle_id'
    ];
}
