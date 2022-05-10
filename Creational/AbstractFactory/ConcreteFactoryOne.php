<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ConcreteFactoryOne
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ConcreteFactoryOne implements AbstractFactory
{
    /**
     * @return AbstractProductOne
     */
    public function createProductOne(): AbstractProductOne
    {
        return new ConcreteProductOneFirst();
    }

    /**
     * @return AbstractProductTwo
     */
    public function createProductTwo(): AbstractProductTwo
    {
        return new ConcreteProductTwoFirst();
    }
}
