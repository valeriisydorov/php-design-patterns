<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\FactoryMethod;


/**
 * Class CreatorOne
 * @package DesignPatterns\Behavioral\FactoryMethod
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
