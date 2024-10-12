<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    /**
     * GalleryImage belongs to Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
