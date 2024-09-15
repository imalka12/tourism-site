<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class Hotel extends Model
{
    use Spatial;

    protected $spatial = ['location'];

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'image', 'gallery_id', 'star_rating', 'location', 'slug', 'meta_description', 'meta_keywords', 'city_id', 'hotel_type'];

    /**
     * Hotel belongs to Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    /**
     * Hotel belongs to a City
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    /**
     * Hotel has many Rooms.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hotelRooms()
    {
        return $this->hasMany(HotelRoom::class);
    }
}
