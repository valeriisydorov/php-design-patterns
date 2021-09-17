<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Facade;


/**
 * Class SubsystemOne
 * @package DesignPatterns\Structural\Facade
 */
class SubsystemOne
{
    /**
     * @return string
     */
    public function operationOne(): string
    {
        return (new \ReflectionClass(new static()))->getShortName() . ': Ready!';
    }

    /**
     * @return string
     */
    public function operationTwo(): string
    {
        return (new \ReflectionClass(new static()))->getShortName() . ': Go!';
    }
}