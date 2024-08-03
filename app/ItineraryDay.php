<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;


class ItineraryDay extends Model
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
    protected $fillable = ['itinerary_id', 'title', 'description', 'image', 'day_number', 'location', 'hotel_id', 'active_status'];

    /**
     * ItineraryDay belongs to Itinerary.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itinerary()
    {
        return $this->belongsTo(Itinerary::class);
    }

    /**
     * ItineraryDay belongs to Hotel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }

    /**
     * ItineraryDay belongs to many Attractions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function attractions()
    {
        return $this->belongsToMany(Attraction::class, 'itinerary_day_attraction');
    }

    /**
     * ItineraryDay belongs to many Attractions.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'itinerary_day_activity');
    }

    /**
     * Get all attraction images for this itinerary day
     * @return mixed
     */
    public function getAllAttractionImages()
    {
        $images = $this->attractions->pluck('image');
        if ($this->image) {
            $images->push($this->image);
        }
        return $images->unique();
    }
}
