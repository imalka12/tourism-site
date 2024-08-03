<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    /**
     * Gallery has many GalleryImages.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleryImages()
    {
    	return $this->hasMany(GalleryImage::class);
    }
}
