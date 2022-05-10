<?php
declare(strict_types=1);


namespace DesignPatterns\Creational\FactoryMethod;


/**
 * Interface ProductInterface
 * @package DesignPatterns\Creational\FactoryMethod
 */
interface ProductInterface
{
    /**
     * @return string
     */
    public function operation(): string;
}
