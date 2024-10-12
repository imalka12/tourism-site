<?php

namespace App\Repositories\Contracts;

interface OfferRepositoryInterface
{
    /**
     * Get offers
     * 
     * @return Collection<Itinerary> $itineraries
     * A list of itineraries
     */
    public function getOffers();
}
