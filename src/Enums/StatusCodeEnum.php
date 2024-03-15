<?php

declare(strict_types=1);

namespace Juling\Foundation\Enums;

use Juling\Foundation\Contracts\CodeEnumInterface;

/**
 * 状态
 */
enum StatusCodeEnum: int implements CodeEnumInterface
{
    use EnumMethods;

    /**
     * 正常
     */
    case Normal = 1;

    /**
     * 禁用
     */
    case Disabled = 2;

    /**
     * 锁定
     */
    case Locked = 3;
}
