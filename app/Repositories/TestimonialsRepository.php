<?php

namespace App\Repositories;

use App\Repositories\Contracts\TestimonialsRepositoryInterface;
use App\Models\Testimonial;

class TestimonialsRepository implements TestimonialsRepositoryInterface
{

    /**
     * @inheritDoc
     */
    public function getTestimonials($perPage = 3)
    {
        $testimonials = Testimonial::paginate($perPage);
        $testimonials->withPath('testimonials');
        return $testimonials;
    }
}
