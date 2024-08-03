<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CityActivity extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['city_id', 'activity_id', 'title', 'description', 'image', 'notes', 'from_date', 'to_date', 'active_status', 'slug', 'meta_description', 'meta_keywords'];

    /**
     * CityActivity belongs to City.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
    	return $this->belongsTo(City::class);
    }

    /**
     * CityActivity belongs to Activity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function activity()
    {
    	return $this->belongsTo(Activity::class);
    }

    public function getFromMonthName()
    {
        return Carbon::parse($this->from_date)->monthName;
    }

}
