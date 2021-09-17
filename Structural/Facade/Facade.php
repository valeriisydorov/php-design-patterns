<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Facade;


/**
 * Class Facade
 * @package DesignPatterns\Structural\Facade
 */
class Facade
{
    /**
     * @var SubsystemOne
     */
    protected SubsystemOne $subsystemOne;

    /**
     * @var SubsystemTwo
     */
    protected SubsystemTwo $subsystemTwo;

    /**
     * @param SubsystemOne $subsystemOne
     * @param SubsystemTwo $subsystemTwo
     */
    public function __construct(SubsystemOne $subsystemOne, SubsystemTwo $subsystemTwo)
    {
        $this->subsystemOne = $subsystemOne;
        $this->subsystemTwo = $subsystemTwo;
    }

    /**
     * @return string
     */
    public function performActions(): string
    {
        $result = 'Facade initializes subsystems:' . PHP_EOL;
        $result .= $this->subsystemOne->operationOne() . PHP_EOL;
        $result .= $this->subsystemTwo->operationOne() . PHP_EOL;
        $result .= 'Facade orders subsystems to perform the actions:' . PHP_EOL;
        $result .= $this->subsystemOne->operationTwo() . PHP_EOL;
        $result .= $this->subsystemTwo->operationTwo() . PHP_EOL;

        return $result;
    }
}