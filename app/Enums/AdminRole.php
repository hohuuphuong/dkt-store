<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ADMIN()
 * @method static static SUPER_ADMIN()
 */
final class AdminRole extends Enum
{
    const ADMIN = 1;
    const SUPER_ADMIN = 2;
}
