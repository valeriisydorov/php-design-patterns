<?php
declare(strict_types=1);

use DesignPatterns\Behavioral\Visitor\ConcreteComponentOne;
use DesignPatterns\Behavioral\Visitor\ConcreteComponentTwo;
use DesignPatterns\Behavioral\Visitor\ConcreteVisitorOne;
use DesignPatterns\Behavioral\Visitor\ConcreteVisitorTwo;
use DesignPatterns\Behavioral\Visitor\Visitor;


include_once 'Component.php';
include_once 'ConcreteComponentOne.php';
include_once 'ConcreteComponentTwo.php';
include_once 'Visitor.php';
include_once 'ConcreteVisitorOne.php';
include_once 'ConcreteVisitorTwo.php';

$components = [
    new ConcreteComponentOne(),
    new ConcreteComponentTwo(),
];

$visitorOne = new ConcreteVisitorOne();
$visitorTwo = new ConcreteVisitorTwo();

foreach ($components as $component) {
    $component->accept($visitorOne);
}

foreach ($components as $component) {
    $component->accept($visitorTwo);
}
