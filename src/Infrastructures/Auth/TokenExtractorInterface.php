<?php

declare(strict_types=1);

namespace App\Foundation\Infrastructures\Auth;

interface TokenExtractorInterface
{
    /**
     * 提取token
     */
    public function extractToken(): string;
}
