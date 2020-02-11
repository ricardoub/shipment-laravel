<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ScopeType extends Enum
{
    const BLOCKED = 1;
    const OWN     = 2;
    const GROUP   = 3;
    const UNIT    = 4;
    const LINKED  = 5;
    const MANAGER = 6;
    const COMPANY = 7;
    const AUDITOR = 8;
    const SYSTEM  = 9;
}

