<?php
declare(strict_types=1);


use DesignPatterns\Behavioral\Observer\Observable;
use DesignPatterns\Behavioral\Observer\ObserverOne;
use DesignPatterns\Behavioral\Observer\ObserverTwo;


include_once 'Observable.php';
include_once 'ObservableInterface.php';
include_once 'ObserverOne.php';
include_once 'ObserverTwo.php';
include_once 'ObserverInterface.php';

$observable = new Observable();

$observerOne = new ObserverOne();
$observable->attach($observerOne);

$observerTwo = new ObserverTwo();
$observable->attach($observerTwo);

$observable->changeStatus();
$observable->changeStatus();

$observable->detach($observerTwo);

$observable->changeStatus();
