<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

	/**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'description', 'image', 'gallery_id', 'active_status', 'slug', 'meta_description', 'meta_keywords'];

    /**
     * Activity belongs to Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gallery()
    {
    	return $this->belongsTo(Gallery::class);
    }
}
