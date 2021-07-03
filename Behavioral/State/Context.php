<?php
declare(strict_types=1);


namespace DesignPatterns\Behavioral\State;


use ReflectionClass;

/**
 * Class Context
 * @package DesignPatterns\Behavioral\State
 */
class Context
{
    /**
     * @var
     */
    private $state;

    /**
     * Context constructor.
     * @param StateInterface $state
     */
    public function __construct(StateInterface $state)
    {
        $this->switchTo($state);
    }

    /**
     * @param StateInterface $state
     */
    public function switchTo(StateInterface $state): void
    {
        $observerClass = new ReflectionClass($state);
        $thisClass = new ReflectionClass($this);
        echo "{$thisClass->getShortName()} switches to {$observerClass->getShortName()}.\n";
        $this->state = $state;
    }

    public function actionOne(): void
    {
        $this->state->actionOne($this);
    }

    public function actionTwo(): void
    {
        $this->state->actionTwo($this);
    }
}
