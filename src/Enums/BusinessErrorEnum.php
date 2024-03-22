<?php

declare(strict_types=1);

namespace Juling\Foundation\Enums;

use Juling\Foundation\Contracts\EnumMethodInterface;

/**
 * 业务错误枚举
 */
enum BusinessErrorEnum: int implements EnumMethodInterface
{
    use EnumMethods;

    /**
     * 查询失败
     */
    case QUERY_ERROR = 10001;

    /**
     * 新增失败
     */
    case CREATE_ERROR = 10002;

    /**
     * 更新失败
     */
    case UPDATE_ERROR = 10003;

    /**
     * 删除失败
     */
    case DESTROY_ERROR = 10004;
}
