<?php
declare(strict_types=1);

use DesignPatterns\Creational\Prototype\ComponentWithBackReference;
use DesignPatterns\Creational\Prototype\Prototype;


include_once 'Prototype.php';
include_once 'ComponentWithBackReference.php';


$prototype = new Prototype();
$prototype->primitive = 100;
$prototype->component = new \DateTime();
$prototype->circularReference = new ComponentWithBackReference($prototype);

$clonedPrototype = clone $prototype;

if ($prototype->primitive === $clonedPrototype->primitive) {
    echo "Primitive field values have been carried over to a clone." . PHP_EOL;
} else {
    echo "Primitive field values have not been copied." . PHP_EOL;
}
if ($prototype->component === $clonedPrototype->component) {
    echo "Simple component has not been cloned." . PHP_EOL;
} else {
    echo "Simple component has been cloned." . PHP_EOL;
}

if ($prototype->circularReference === $clonedPrototype->circularReference) {
    echo "Component with back reference has not been cloned." . PHP_EOL;
} else {
    echo "Component with back reference has been cloned." . PHP_EOL;
}

if ($prototype->circularReference->prototype === $clonedPrototype->circularReference->prototype) {
    echo "Component with back reference is linked to original object." . PHP_EOL;
} else {
    echo "Component with back reference is linked to the clone." . PHP_EOL;
}



