<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Decorator;


/**
 * Class Decorator
 * @package DesignPatterns\Structural\Decorator
 */
class Decorator implements ComponentInterface
{
    /**
     * @var Component
     */
    protected $component;

    /**
     * Decorator constructor.
     * @param Component $component
     */
    public function __construct(ComponentInterface $component)
    {
        $this->component = $component;
    }

    /**
     * @return string
     */
    public function operation(): string
    {
        return $this->component->operation();
    }
}
