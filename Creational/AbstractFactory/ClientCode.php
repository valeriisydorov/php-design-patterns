<?php
declare(strict_types=1);


use DesignPatterns\Creational\AbstractFactory\ConcreteFactoryOne;
use DesignPatterns\Creational\AbstractFactory\ConcreteFactoryTwo;


include_once 'AbstractFactory.php';
include_once 'ConcreteFactoryOne.php';
include_once 'ConcreteFactoryTwo.php';
include_once 'AbstractProductOne.php';
include_once 'AbstractProductTwo.php';
include_once 'ConcreteProductOneFirst.php';
include_once 'ConcreteProductOneSecond.php';
include_once 'ConcreteProductTwoFirst.php';
include_once 'ConcreteProductTwoSecond.php';


$factoryOne = new ConcreteFactoryOne();
$factoryTwo = new ConcreteFactoryTwo();

$factoryOneProductOne = $factoryOne->createProductOne();
$factoryOneProductTwo = $factoryOne->createProductTwo();

echo $factoryOneProductOne->usefulFunctionOne() . PHP_EOL;
echo $factoryOneProductTwo->usefulFunctionTwo() . PHP_EOL;

$factoryTwoProductOne = $factoryTwo->createProductOne();
$factoryTwoProductTwo = $factoryTwo->createProductTwo();

echo $factoryTwoProductOne->usefulFunctionOne() . PHP_EOL;
echo $factoryTwoProductTwo->usefulFunctionTwo() . PHP_EOL;

echo $factoryOneProductTwo->anotherUsefulFunctionTwo($factoryOneProductOne) . PHP_EOL;
echo $factoryTwoProductTwo->anotherUsefulFunctionTwo($factoryTwoProductOne) . PHP_EOL;
