<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Vehicle extends Model
{
    use Spatial;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title', 'make', 'model', 'yom', 'trim', 'transmission', 'fuel', 'no_of_seats', 'price_per_km', 'transport_option'];
}
