<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Adapter;


/**
 * Interface ExistingInterface
 * @package DesignPatterns\Structural\Adapter
 */
interface ExistingInterface
{
    /**
     * @return string
     */
    public function request(): string;
}