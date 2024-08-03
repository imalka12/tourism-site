<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static INCLUSION()
 * @method static static EXCLUSION()
 */
final class InclusionType extends Enum
{
    const INCLUSION = "INCLUSION";
    const EXCLUSION = "EXCLUSION";
}
