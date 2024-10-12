<?php

namespace App\Repositories\Contracts;

interface TestimonialsRepositoryInterface
{

    /**
     * Get the list of testimonials
     * 
     * @return Collection<App\Model\Testimonial> $testimonials
     */
    public function getTestimonials();
}
