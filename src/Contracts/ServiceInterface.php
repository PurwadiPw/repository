<?php

namespace Pw\Repository\Contracts;

use Illuminate\Contracts\Container\Container as Application;
use Pw\Repository\Repository;

/**
 * Interface ServiceInterface
 *
 * @author  Purwadi <purwadie97@gmail.com>
 * @package Pw\Repository\Contracts
 */
interface ServiceInterface
{
    /**
     * Create a new service instance.
     *
     * @param Application $app
     * @param Repository  $repository
     */
    public function __construct(Application $app, Repository $repository);
}
