<?php
declare(strict_types=1);


use DesignPatterns\Behavioral\State\Context;
use DesignPatterns\Behavioral\State\StateOne;
use DesignPatterns\Behavioral\State\StateTwo;


include_once 'Context.php';
include_once 'StateInterface.php';
include_once 'StateOne.php';
include_once 'StateTwo.php';


$context = new Context(new StateOne());
$context->actionOne();
$context->actionTwo();
