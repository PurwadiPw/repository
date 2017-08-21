<?php

namespace Pw\Repository\Services;

use Illuminate\Contracts\Container\Container as Application;
use Illuminate\Support\Collection;
use Pw\Repository\Contracts\ServiceInterface;
use Pw\Repository\Contracts\TransformerInterface;
use Pw\Repository\Exceptions\InvalidTransformer;
use Pw\Repository\Repository;

/**
 * Class TransformService
 *
 * @author    Purwadi <purwadie97@gmail.com>
 * @copyright Copyright (c) Purwadi
 * @package   Pw\Repository\Services
 */
class TransformService implements ServiceInterface
{
    /**
     * Contains Laravel Application instance.
     *
     * @var Application
     */
    protected $app;

    /**
     * Contains a repository instance.
     *
     * @var Repository
     */
    protected $repository;

    /**
     * Create a new transform service instance.
     *
     * @param Application $app
     * @param Repository  $repository
     */
    public function __construct(Application $app, Repository $repository)
    {
        $this->app        = $app;
        $this->repository = $repository;
    }

    /**
     * Execute transform method on specified transformer.
     *
     * @param Collection $collection
     *
     * @return Collection
     * @throws InvalidTransformer
     */
    public function executeOn(Collection $collection)
    {
        if (empty($collection) || $collection->first() === null) {
            return $collection;
        }

        $transformer = $this->repository->transformer;

        if (!(new \ReflectionClass($transformer))->implementsInterface(TransformerInterface::class)) {
            throw new InvalidTransformer();
        }

        /** @var TransformerInterface $transformer */
        $transformer = new $transformer($collection);

        return $transformer->execute();
    }
}
