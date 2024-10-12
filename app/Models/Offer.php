<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Itinerary as ModelsItinerary;

class Offer extends Model
{
    /**
     * Offer belongs to Itinerary.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function itinerary()
    {
        return $this->belongsTo(ModelsItinerary::class);
    }
}
