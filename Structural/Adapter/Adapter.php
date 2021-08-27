<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Adapter;


include_once 'ExistingInterface.php';


/**
 * Class Adapter
 * @package DesignPatterns\Structural\Adapter
 */
class Adapter implements ExistingInterface
{
    /**
     * @var Adaptable
     */
    private Adaptable $adaptable;

    /**
     * @param Adaptable $adaptable
     */
    public function __construct(Adaptable $adaptable)
    {
        $this->adaptable = $adaptable;
    }

    /**
     * @return string
     */
    public function request(): string
    {
        return $this->adaptable->specificRequest();
    }
}