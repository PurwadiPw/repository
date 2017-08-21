<?php

namespace Pw\Repository\Exceptions;

/**
 * Class InvalidRepositoryModel
 *
 * @author    Purwadi <purwadie97@gmail.com>
 * @copyright Copyright (c) Purwadi
 * @package   Pw\Repository\Exceptions
 */
class InvalidRepositoryModel extends \Exception
{
    /**
     * Create a new InvalidRepositoryModel instance.
     *
     * @param string $model
     * @param int    $interface
     */
    public function __construct($model, $interface)
    {
        parent::__construct("Class '{$model}' must be an instance of '{$interface}'.");
    }
}
