<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Decorator;


/**
 * Interface ComponentInterface
 * @package DesignPatterns\Structural\Decorator
 */
interface ComponentInterface
{
    /**
     * @return string
     */
    public function operation(): string;
}
