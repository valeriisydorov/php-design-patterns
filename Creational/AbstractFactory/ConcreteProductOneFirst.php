<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ConcreteProductOneFirst
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ConcreteProductOneFirst implements AbstractProductOne
{
    /**
     * @return string
     */
    public function usefulFunctionOne(): string
    {
        return "The result of the ProductOneFirst.";
    }
}
