<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\FactoryMethod;


/**
 * Class CreatorTwo
 * @package DesignPatterns\Behavioral\FactoryMethod
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
