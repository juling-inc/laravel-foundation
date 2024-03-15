<?php

declare(strict_types=1);

namespace Juling\Foundation\Exceptions;

use Juling\Foundation\Contracts\CodeEnumInterface;
use Exception;

class CustomException extends Exception
{
    public function __construct(CodeEnumInterface|string $e, $code = 0, $previous = null)
    {
        if ($e instanceof CodeEnumInterface) {
            parent::__construct($e->getDescription(), $e->getValue(), $previous);
        } else {
            parent::__construct($e, $code, $previous);
        }
    }
}
