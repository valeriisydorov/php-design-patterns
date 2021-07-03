<?php
declare(strict_types=1);


use DesignPatterns\Behavioral\Strategy\Context;
use DesignPatterns\Behavioral\Strategy\AlgorithmOne;
use DesignPatterns\Behavioral\Strategy\AlgorithmTwo;


include_once 'Context.php';
include_once 'AlgorithmInterface.php';
include_once 'AlgorithmTwo.php';
include_once 'AlgorithmOne.php';

$data = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];

$context = new Context(new AlgorithmOne());
$result = $context->doAlgorithm($data);
echo "The first algorithm result: $result\n";

$context = new Context(new AlgorithmTwo());
$result = $context->doAlgorithm($data);
echo "The second algorithm result: $result\n";

$context = new Context(new AlgorithmTwo());
$context->setAlgorithm(new AlgorithmOne());
$result = $context->doAlgorithm($data);
echo "The algorithm replacement result: $result\n";
