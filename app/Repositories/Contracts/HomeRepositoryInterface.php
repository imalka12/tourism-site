<?php

namespace App\Repositories\Contracts;

use App\Enums\TransportOptionType;
use App\Hotel;
use App\Review;
use App\TransportOption;
use Illuminate\Support\Collection;
use phpDocumentor\Reflection\Types\Array_;

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
