<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\Iterator;


/**
 * Class Collection
 * @package DesignPatterns\Behavioral\Iterator
 */
class Collection implements CollectionInterface
{
    /**
     * @var array
     */
    private $collection = [];

    /**
     * Collection constructor.
     * @param $collection
     */
    public function __construct(array $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return IteratorInterface
     */
    public function getIterator(): IteratorInterface
    {
        return new Iterator($this->collection);
    }
}
