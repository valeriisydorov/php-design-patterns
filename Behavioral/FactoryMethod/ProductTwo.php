<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\FactoryMethod;


/**
 * Class ProductTwo
 * @package DesignPatterns\Behavioral\FactoryMethod
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
