<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * Class TransportOptionType
 *
 * @method static static DOMESTIC_PLANE()
 * @method static static TRAIN()
 * @method static static BUS()
 * @method static static VAN()
 * @method static static CAR()
 * @method static static SUV()
 * @method static static CAMP4X4()
 *
 * @package App\Enums
 */
final class TransportOptionType extends Enum
{
    const DOMESTIC_PLANE = 'DOMESTIC_PLANE';
    const TRAIN = 'TRAIN';
    const BUS = 'BUS';
    const VAN = 'VAN';
    const CAR = 'CAR';
    const SUV = 'SUV';
    const CAMP4X4 = 'CAMP4X4';
}
