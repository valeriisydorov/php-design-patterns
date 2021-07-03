<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\Iterator;


/**
 * Interface CollectionInterface
 * @package DesignPatterns\Behavioral\Iterator
 */
interface CollectionInterface
{
    /**
     * @return IteratorInterface
     */
    public function getIterator(): IteratorInterface;
}
