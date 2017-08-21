<?php

namespace Pw\Repository\Contracts;

use Illuminate\Database\Eloquent\Builder;

/**
 * Interface CriteriaInterface
 *
 * @author    Purwadi <purwadie97@gmail.com>
 * @copyright Copyright (c) Purwadi
 * @package   Pw\Repository\Contracts
 */
interface CriteriaInterface
{
    /**
     * Execute criteria on given query builder.
     *
     * @param Builder $query
     *
     * @return mixed
     */
    public function execute(Builder $query);
}
