<?php
declare(strict_types=1);


use DesignPatterns\Behavioral\FactoryMethod\CreatorOne;
use DesignPatterns\Behavioral\FactoryMethod\CreatorTwo;


include_once 'Creator.php';
include_once 'CreatorOne.php';
include_once 'CreatorTwo.php';
include_once 'ProductInterface.php';
include_once 'ProductOne.php';
include_once 'ProductTwo.php';

echo "App launched with CreatorOne. " . (new CreatorOne())->execute();
echo "App launched with CreatorTwo. " . (new CreatorTwo())->execute();

