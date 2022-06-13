<?php
declare(strict_types=1);

use DesignPatterns\Behavioral\Command\ComplexCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Behavioral\Command\SimpleCommand;

include_once 'Command.php';
include_once 'SimpleCommand.php';
include_once 'ComplexCommand.php';
include_once 'Receiver.php';
include_once 'Invoker.php';


$invoker = new Invoker();
$invoker->setOnStart(new SimpleCommand("Say Hi!"));
$receiver = new Receiver();
$invoker->setOnFinish(new ComplexCommand($receiver, "Send email", "Save report"));

$invoker->doSomethingImportant();
