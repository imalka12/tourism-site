<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Spatial;

class City extends Model
{
	use Spatial;

    /**
     * Fields carrying spatial data
     *
     * @var array
     */
	protected $spatial = ['location'];

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image', 'location', 'active_status', 'slug', 'meta_description', 'meta_keywords'];

    public function activities()
    {
        return $this->hasMany(CityActivity::class, 'city_id', 'id');  
    }

}
