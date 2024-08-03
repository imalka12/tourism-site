<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HolidayDestination extends Model
{
	/**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'description', 'image', 'gallery_id', 'active_status', 'slug', 'meta_description', 'meta_keywords'];

	/**
	 * HolidayDestination belongs to Gallery.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function gallery()
	{
		return $this->belongsTo(Gallery::class);
	}

	/**
     * Cities belongs to Holiday Destinations.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cities()
    {
    	return $this->belongsToMany(City::class, 'city_holiday_destination');
    }

}
