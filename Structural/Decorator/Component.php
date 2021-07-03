<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Decorator;


include_once 'ComponentInterface.php';


/**
 * Class Component
 * @package DesignPatterns\Structural\Decorator
 */
class Component implements ComponentInterface
{
    /**
     * @return string
     */
    public function operation(): string
    {
        return 'Hello';
    }
}
