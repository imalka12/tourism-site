<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransportOption extends Model
{
    protected $fillable = ['type', 'title', 'description', 'image'];
}
