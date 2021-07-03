<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\Iterator;


/**
 * Interface IteratorInterface
 * @package DesignPatterns\Behavioral\Iterator
 */
interface IteratorInterface
{
    /**
     * @inheritDoc
     */
    public function first(): void;

    /**
     * @inheritDoc
     */
    public function next(): void;

    /**
     * @inheritDoc
     */
    public function currentItem();

    /**
     * @inheritDoc
     */
    public function isDone(): bool;
}
