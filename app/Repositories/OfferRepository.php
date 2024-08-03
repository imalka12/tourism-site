<?php

namespace App\Repositories;

use App\Repositories\Contracts\OfferRepositoryInterface;
use App\Offer;
use App\Itinerary;

class OfferRepository implements OfferRepositoryInterface
{
    /**
     * Get offers
     * 
     * @return Collection<App\Itinerary> $itineraries
     * A list of itineraries
     */
    public function getOffers() {
        $currentDate = date('Y-m-d');

        return Offer::where(function($query) use($currentDate) {
            $query->where('start_date', '<=', $currentDate)
            ->where('end_date', '>=', $currentDate);
        })
        ->orWhere('is_indefinite', '1')
        ->with('itinerary')
        ->get();
    }
}
