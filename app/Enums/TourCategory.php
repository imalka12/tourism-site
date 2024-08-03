<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static SRI_LANKA()
 * @method static static MALDIVES()
 * @method static static OTHER()
 */
final class TourCategory extends Enum
{
    const SRI_LANKA = 'SRI_LANKA';
    const MALDIVES = 'MALDIVES';
    const OTHER = 'OTHER';
}
