<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Decorator;


/**
 * Class DecoratorOne
 * @package DesignPatterns\Structural\Decorator
 */
class DecoratorOne extends Decorator
{
    public function operation(): string
    {
        return parent::operation() . ', Alice';
    }
}
