<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Adapter;


/**
 * Class Adaptable
 * @package DesignPatterns\Structural\Adapter
 */
class Adaptable
{
    /**
     * @return string
     */
    public function specificRequest(): string
    {
        return 'Actual data';
    }
}