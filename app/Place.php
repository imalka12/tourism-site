<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Place extends Model
{
    use Spatial;

    /**
     * Fields carrying spatial data
     *
     * @var array
     */
    protected $spatial = ['location'];
    
        /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title', 'location'];

    public $timestamps = false;


    /**
     * Place belongs to many itineraries.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itineraries()
    {
    	return $this->belongsToMany(Itinerary::class, 'itinerary_place');
    }

}
