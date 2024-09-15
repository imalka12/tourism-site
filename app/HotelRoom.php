<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class HotelRoom extends Model
{
    use Spatial;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['image', 'type', 'hotel_id', 'meal_plan'];

    /**
     * Room belongs to Hotel.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
