<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttractionType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'image'];
}
