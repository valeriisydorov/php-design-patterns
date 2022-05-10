<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ConcreteFactoryTwo
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ConcreteFactoryTwo implements AbstractFactory
{

    /**
     * @return AbstractProductOne
     */
    public function createProductOne(): AbstractProductOne
    {
        return new ConcreteProductOneSecond();
    }

    /**
     * @return AbstractProductTwo
     */
    public function createProductTwo(): AbstractProductTwo
    {
        return new ConcreteProductTwoSecond();
    }
}
