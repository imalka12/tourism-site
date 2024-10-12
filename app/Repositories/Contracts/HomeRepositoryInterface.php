<?php

namespace App\Repositories\Contracts;

use App\Enums\TransportOptionType;
use App\Models\Hotel;
use App\Models\Review;
use App\Models\TransportOption;
use Illuminate\Support\Collection;

interface HomeRepositoryInterface
{

    /**
     * Get tripadvisor review
     *
     * @return Collection<Review> $reviews
     */
    public function getTripAdvisorReviews();

    /**
     * Get lametayel review
     *
     * @return Collection<Review> $reviews
     */
    public function getLametayelReviews();

    /**
     * Get transportation options
     *
     * @return Collection<TransportOption> $transportOptions
     */
    public function getTransportationOptions();


    /**
     * Get transport option by type
     *
     * @param TransportOptionType $type
     * @return TransportOption $transportOption
     */
    public function getTransportOptionByType(TransportOptionType $type);

    /**
     * Get hotel details
     *
     * @return Collection<Hotel> $hotels
     */
    public function getHotels();

    /**
     * Get hotels categorized by the cities
     *
     * @return array $array
     */
    public function getHotelsByCities();
}
