<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Review type/source constants
 * 
 * @method static static TRIP_ADVISOR()
 * @method static static LAMETAYEL()
 */
final class ReviewType extends Enum
{
    const TRIP_ADVISOR = 'TRIP_ADVISOR';
    const LAMETAYEL = 'LAMETAYEL';
}
