<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Facade;


/**
 * Class SubsystemTwo
 * @package DesignPatterns\Structural\Facade
 */
class SubsystemTwo
{
    /**
     * @return string
     */
    public function operationOne(): string
    {
        return (new \ReflectionClass(new static()))->getShortName() . ': Get ready!';
    }

    /**
     * @return string
     */
    public function operationTwo(): string
    {
        return (new \ReflectionClass(new static()))->getShortName() . ': Fly!';
    }
}