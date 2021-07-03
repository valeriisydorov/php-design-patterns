<?php
declare(strict_types=1);


use DesignPatterns\Behavioral\Iterator\Collection;


include_once 'CollectionInterface.php';
include_once 'Collection.php';
include_once 'IteratorInterface.php';
include_once 'Iterator.php';

$data = ['First', 'Second', 'Third'];

$collection = new Collection($data);
$iterator = $collection->getIterator();

while (!$iterator->isDone()) {
    echo $iterator->currentItem() . PHP_EOL;
    $iterator->next();
}
