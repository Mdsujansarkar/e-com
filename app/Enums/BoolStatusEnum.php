<?php

declare(strict_types=1);

namespace App\Enums;

enum BoolStatusEnum:int
{
    case ACTIVE = 1;
    case INACTIVE = 0;
}
