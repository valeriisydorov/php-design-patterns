<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\AbstractFactory;

/**
 * Class ConcreteProductTwoFirst
 * @package DesignPatterns\Creational\AbstractFactory
 */
class ConcreteProductTwoFirst implements AbstractProductTwo
{
    /**
     * @return string
     */
    public function usefulFunctionTwo(): string
    {
        return "The result of the ProductTwoFirst.";
    }

    /**
     * @param AbstractProductOne $collaborator
     * @return string
     */
    public function anotherUsefulFunctionTwo(AbstractProductOne $collaborator): string
    {
        $result = $collaborator->usefulFunctionOne();

        return "The result of the ProductTwoFirst collaborating with ({$result})";
    }
}
