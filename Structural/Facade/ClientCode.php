<?php declare(strict_types=1);


use DesignPatterns\Structural\Facade\Facade;
use DesignPatterns\Structural\Facade\SubsystemOne;
use DesignPatterns\Structural\Facade\SubsystemTwo;


include_once 'Facade.php';
include_once 'SubsystemOne.php';
include_once 'SubsystemTwo.php';

echo (new Facade(new SubsystemOne(), new SubsystemTwo()))->performActions();