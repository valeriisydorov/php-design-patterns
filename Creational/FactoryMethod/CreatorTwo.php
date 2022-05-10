<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class CreatorTwo
 * @package DesignPatterns\Creational\FactoryMethod
 */
class CreatorTwo extends Creator
{
    /**
     * @return ProductInterface
     */
    public function create(): ProductInterface
    {
        return new ProductTwo();
    }
}
