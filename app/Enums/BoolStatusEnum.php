<?php

declare(strict_types=1);

namespace App\Enums;

enum BoolStatusEnum:string
{
    case ACTIVE = '1';
    case INACTIVE = '0';
}
