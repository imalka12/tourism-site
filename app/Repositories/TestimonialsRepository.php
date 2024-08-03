<?php

namespace App\Repositories;

use App\Repositories\Contracts\TestimonialsRepositoryInterface;
use App\Testimonial;

class TestimonialsRepository implements TestimonialsRepositoryInterface {

    /**
     * @inheritDoc
     */
    public function getTestimonials($perPage = 3) {
        $testimonials = Testimonial::paginate($perPage);
        $testimonials->withPath('testimonials');
        return $testimonials;
    }

}