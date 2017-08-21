<?php

namespace Pw\Repository\Contracts;

use Illuminate\Support\Collection;

/**
 * Interface TransformerInterface
 *
 * @author    Purwadi <purwadie97@gmail.com>
 * @copyright Copyright (c) Purwadi
 * @package   Pw\Repository\Contracts
 */
interface TransformerInterface
{
    /**
     * Create new transformer instance with given collection of items.
     *
     * @param Collection $collection
     */
    public function __construct(Collection $collection);

    /**
     * Transform given item.
     *
     * @param mixed $item
     *
     * @return mixed
     */
    public function transform($item);

    /**
     * Execute transform on each collection element given in contructor.
     *
     * @return Collection
     */
    public function execute();
}
