<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
	/**
	 * Fields that can be mass assigned.
	 *
	 * @var array
	 */
	protected $fillable = ['hotel_id', 'type', 'image', 'price', 'description', 'gallery_id', 'active_status'];

	/**
	 * HotelRoom belongs to Hotel.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function hotel()
	{
		return $this->belongsTo(Hotel::class);
	}

	/**
	 * HotelRoom belongs to Gallery.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function gallery()
	{
		return $this->belongsTo(Gallery::class);
	}
}
