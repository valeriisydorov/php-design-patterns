<?php
declare(strict_types=1);


namespace DesignPatterns\Structural\Adapter;


include_once 'ExistingInterface.php';


/**
 * Class Existing
 * @package DesignPatterns\Structural\Adapter
 */
class Existing implements ExistingInterface
{
    /**
     * @inheritDoc
     */
    public function request(): string
    {
        return 'Outdated data';
    }
}