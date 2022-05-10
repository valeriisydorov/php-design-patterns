<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Interface AbstractFactory
 * @package DesignPatterns\Creational\AbstractFactory
 */
interface AbstractFactory
{
    /**
     * @return AbstractProductOne
     */
    public function createProductOne(): AbstractProductOne;

    /**
     * @return AbstractProductTwo
     */
    public function createProductTwo(): AbstractProductTwo;
}
