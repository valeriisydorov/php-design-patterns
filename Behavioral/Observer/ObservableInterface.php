<?php
declare(strict_types=1);

namespace DesignPatterns\Behavioral\Observer;

/**
 * Interface ObservableInterface
 * @package DesignPatterns\Behavioral\Observer
 */
interface ObservableInterface
{
    /**
     * @param ObserverInterface $observer
     */
    public function attach(ObserverInterface $observer): void;

    /**
     * @param ObserverInterface $observer
     */
    public function detach(ObserverInterface $observer): void;

    public function notify(): void;
}
