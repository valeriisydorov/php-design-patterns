<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class CreatorOne
 * @package DesignPatterns\Creational\FactoryMethod
 */
class CreatorOne extends Creator
{
    /**
     * @return ProductInterface
     */
    public function create(): ProductInterface
    {
        return new ProductOne();
    }
}
