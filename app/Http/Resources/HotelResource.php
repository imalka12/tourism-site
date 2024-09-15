<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'hotel_id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image,
            'star_rating' => $this->star_rating,
            'slug' => $this->slug,
            'meta_description' => $this->meta_description,
            'meta_keywords' => $this->meta_keywords,
            'city_id' => $this->city_id,
            'gallery_id' => $this->gallery_id,
        ];
    }
}
