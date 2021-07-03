<?php
declare(strict_types=1);


use DesignPatterns\Structural\Decorator\Component;
use DesignPatterns\Structural\Decorator\DecoratorOne;
use DesignPatterns\Structural\Decorator\DecoratorTwo;


include_once 'Component.php';
include_once 'ComponentInterface.php';
include_once 'Decorator.php';
include_once 'DecoratorOne.php';
include_once 'DecoratorTwo.php';


$component = new Component();
echo "Result: {$component->operation()} Guest!" . PHP_EOL;

$decoratorOne = new DecoratorOne($component);
echo "Result: {$decoratorOne->operation()}!" . PHP_EOL;

$decoratorTwo = new DecoratorTwo($decoratorOne);
echo "Result: {$decoratorTwo->operation()}!" . PHP_EOL;
