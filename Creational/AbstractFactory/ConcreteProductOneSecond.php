<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ConcreteProductOneSecond
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ConcreteProductOneSecond implements AbstractProductOne
{
    /**
     * @return string
     */
    public function usefulFunctionOne(): string
    {
        return "The result of the ProductOneSecond.";
    }
}
