<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Class ProductTwo
 * @package DesignPatterns\Creational\FactoryMethod
 */
class ProductTwo implements ProductInterface
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return (new \ReflectionClass(__CLASS__))->getShortName(). ".\n";
    }
}
