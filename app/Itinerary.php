<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'meal_plan', 'information_file', 'gallery_id', 'active_status', 'tour_type_id'];

    /**
     * Itinerary belongs to Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    /**
     * Itinerary has many ItineraryDays
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itineraryDays()
    {
        return $this->hasMany(ItineraryDay::class);
    }

    /**
     * Itinerary has many ItineraryInclusions
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function itineraryInclusions()
    {
        return $this->hasMany(ItineraryInclusion::class);
    }

    /**
     * Itinerary has many Offers
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    /**
     * Itinerary belongs to many Places.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function places()
    {
        return $this->belongsToMany(Place::class, 'itinerary_place');
    }

    public function months()
    {
        $only_months = json_decode($this->only_months);
        $_return = [];
        foreach ($only_months as $month) {
            $_return[$month] = strtolower($month);
        }
        return $_return;
    }

    public function tourType()
    {
        return $this->belongsTo(TourType::class);
    }
}
