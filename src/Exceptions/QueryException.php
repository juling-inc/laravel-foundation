<?php

declare(strict_types=1);

namespace Juling\Foundation\Exceptions;

use Juling\Foundation\Contracts\EnumMethodInterface;
use Juling\Foundation\Enums\BusinessErrorEnum;

class QueryException extends CustomException
{
    public function __construct(EnumMethodInterface|string $e = null, $code = 0, $previous = null)
    {
        if (is_null($e)) {
            $enum = BusinessErrorEnum::QUERY_ERROR;
            $e = $enum->getDescription();
            $code = $enum->getValue();
        }

        parent::__construct($e, $code, $previous);
    }
}