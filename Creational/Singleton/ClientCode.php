<?php
declare(strict_types=1);


use DesignPatterns\Creational\Singleton\Singleton;


include_once 'Singleton.php';


$singletonOne = Singleton::getInstance();

$singletonTwo = Singleton::getInstance();
