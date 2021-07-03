<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\Iterator;


/**
 * Class Iterator
 * @package DesignPatterns\Behavioral\Iterator
 */
class Iterator implements IteratorInterface
{
    /**
     * @var
     */
    private $collection;

    /**
     * @var int
     */
    private $index;

    /**
     * Iterator constructor.
     * @param $collection
     */
    public function __construct($collection)
    {
        $this->collection = $collection;
        $this->index = 0;
    }

    public function first(): void
    {
        $this->index = 0;
    }

    public function next(): void
    {
        $this->index++;
    }

    /**
     * @return mixed
     */
    public function currentItem()
    {
        return $this->collection[$this->index];
    }

    /**
     * @return bool
     */
    public function isDone(): bool
    {
        return $this->index >= count($this->collection);
    }
}
