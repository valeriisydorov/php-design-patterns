<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\Observer;


/**
 * Interface ObserverInterface
 * @package DesignPatterns\Behavioral\Observer
 */
interface ObserverInterface
{
    /**
     * @param Observable $observable
     */
    public function update(Observable $observable): void;
}
