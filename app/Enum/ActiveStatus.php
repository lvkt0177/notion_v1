<?php

namespace App\Enum;

use App\Traits\EnumOptions;
use App\Traits\EnumValues;

enum ActiveStatus: int
{
    use EnumValues, EnumOptions;

    case ACTIVE = 1;
    case DISABLED = 0;
    
    public function getLabel(): string
    {
        return match ($this) {
            self::ACTIVE => 'Hoạt động',
            self::DISABLED => 'Vô hiệu hóa',
        };
    }
}