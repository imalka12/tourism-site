<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static BREAD_AND_BREAKFAST()
 * @method static static HALF_BOARD()
 * @method static static FULL_BOARD()
 * @method static static EARLY_BREAKFAST()
 * @method static static PICNIC_LUNCH()
 */
final class MealPlan extends Enum
{
    const BREAD_AND_BREAKFAST = "BREAD_AND_BREAKFAST";
    const HALF_BOARD = "HALF_BOARD";
    const FULL_BOARD = 'FULL_BOARD';
    const EARLY_BREAKFAST = 'EARLY_BREAKFAST';
    const PICNIC_LUNCH = 'PICNIC_LUNCH';
}
