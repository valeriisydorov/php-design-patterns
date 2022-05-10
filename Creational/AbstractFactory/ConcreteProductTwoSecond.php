<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ConcreteProductTwoSecond
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ConcreteProductTwoSecond implements AbstractProductTwo
{
    /**
     * @return string
     */
    public function usefulFunctionTwo(): string
    {
        return "The result of the ProductTwoSecond.";
    }

    /**
     * @param AbstractProductOne $collaborator
     * @return string
     */
    public function anotherUsefulFunctionTwo(AbstractProductOne $collaborator): string
    {
        $result = $collaborator->usefulFunctionOne();

        return "The result of the ProductTwoSecond collaborating with ({$result})";
    }
}
