<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Itinerary;

class Offer extends Model
{
    /**
     * Offer belongs to Itinerary.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itinerary()
    {
        return $this->belongsTo(Itinerary::class);
    }
}
