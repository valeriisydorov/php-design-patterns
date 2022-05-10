<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class Creator
 * @package DesignPatterns\Creational\FactoryMethod
 */
abstract class Creator
{
    /**
     * @return ProductInterface
     */
    abstract public function create(): ProductInterface;

    /**
     * @return string
     */
    public function execute(): string
    {
        $product = $this->create();
        return (new \ReflectionClass(new static()))->getShortName() . "'s code has worked with " . $product->operation();
    }
}
