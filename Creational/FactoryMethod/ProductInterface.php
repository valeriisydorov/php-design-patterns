<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\FactoryMethod;


/**
 * Interface ProductInterface
 * @package DesignPatterns\Behavioral\FactoryMethod
 */
interface ProductInterface
{
    /**
     * @return string
     */
    public function operation(): string;
}
