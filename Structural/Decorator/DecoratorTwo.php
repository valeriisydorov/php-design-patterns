<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Decorator;


/**
 * Class DecoratorTwo
 * @package DesignPatterns\Structural\Decorator
 */
class DecoratorTwo extends Decorator
{
    public function operation(): string
    {
        return parent::operation() . ', Bob';
    }
}
