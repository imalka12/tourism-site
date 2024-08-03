<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['customer_name', 'country', 'no_of_people', 'comments', 'image_1', 'image_2', 'image_3', 'date_visited'];

    public function images()
    {
        $images = [];

        if (!empty($this->image_1)) {
            $images[] = $this->image_1;
        }
        if (!empty($this->image_2)) {
            $images[] = $this->image_2;
        }
        if (!empty($this->image_3)) {
            $images[] = $this->image_3;
        }

        return $images;
    }
}
