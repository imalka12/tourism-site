<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Attraction extends Model
{
    use Spatial;

    protected $spatial = ['location'];

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'gallery_id', 'notes', 'city_id', 'location', 'from_date', 'to_date', 'active_status', 'slug', 'meta_description', 'meta_keywords'];

    /**
     * Attraction belongs to City.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    /**
     * Attraction belongs to Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
    	return $this->belongsTo(Gallery::class);
    }

    /**
     * Attraction belongs to many ItineraryDay s.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itineraryDays()
    {
    	return $this->belongsToMany(ItineraryDay::class, 'itinerary_day_attraction');
    }
}
