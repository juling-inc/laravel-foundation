<?php

declare(strict_types=1);

namespace Juling\Foundation\Contracts;

use Illuminate\Database\Query\Builder;

interface RepositoryInterface
{
    public function model(): Builder;
}
