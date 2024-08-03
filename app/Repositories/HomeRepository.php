<?php

namespace App\Repositories;

use App\Enums\TransportOptionType;
use App\Hotel;
use App\Repositories\Contracts\Collection;
use App\Repositories\Contracts\HomeRepositoryInterface;
use App\Review;
use App\Enums\ReviewType;
use App\TransportOption;

class HomeRepository implements HomeRepositoryInterface {

    /**
     * @inheritDoc
     */
    public function getTripAdvisorReviews() {
        return Review::where('type', ReviewType::TRIP_ADVISOR)->get();
    }

    /**
     * @inheritDoc
     */
    public function getLametayelReviews() {
        return Review::where('type', ReviewType::LAMETAYEL)->get();
    }

    /**
     * @inheritDoc
     */
    public function getTransportationOptions()
    {
        return TransportOption::orderBy('type')->get();
    }

    /**
     * @inheritDoc
     */
    public function getTransportOptionByType(TransportOptionType $type)
    {
        return TransportOption::where('type', $type)->first();
    }


    /**
     * @inheritDoc
     */
    public function getHotels()
    {
        return Hotel::with(['gallery', 'city'])->get();
    }

    /**
     * @inheritDoc
     */
    public function getHotelsByCities()
    {
        $cityHotels = [];

        $hotels = Hotel::with(['gallery', 'city'])->get();

        foreach ($hotels as $hotel) {
            if (!array_key_exists('city_' . $hotel->city_id, $cityHotels)) {
                $cityHotels['city_' . $hotel->city->id] = [
                    'city' => $hotel->city,
                    'hotels' => []
                ];
            }

            $cityHotels['city_' . $hotel->city_id]['hotels'][] = $hotel;
        }

        return $cityHotels;
    }


}
