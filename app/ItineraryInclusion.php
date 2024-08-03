<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItineraryInclusion extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['itinerary_id', 'description', 'type', 'active_status'];

    /**
     * ItineraryInclusion belongs to Itinerary.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itinerary()
    {
    	return $this->belongsTo(Itinerary::class);
    }
}
