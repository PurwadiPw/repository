<?php

namespace Pw\Repository\Exceptions;

use Pw\Repository\Criteria;
use Pw\Repository\Contracts\CriteriaInterface;

/**
 * Class InvalidCriteria
 *
 * @author  Purwadi <purwadie97@gmail.com>
 * @copyright Copyright (c) Purwadi
 * @package Pw\Repository\Exceptions
 */
class InvalidCriteria extends \Exception
{
    /**
     * Contains criteria full qualified class path to abstract class.
     *
     * @var string
     */
    private $abstract = Criteria::class;

    /**
     * Contains criteria full qualified class path to interface.
     *
     * @var string
     */
    private $interface = CriteriaInterface::class;

    /**
     * Create a new invalid criteria exception instance.
     */
    public function __construct()
    {
        parent::__construct(sprintf(
            "Criteria must extends '%s' abstract class or implements '%s' interface.",
            $this->abstract,
            $this->interface
        ));
    }
}
