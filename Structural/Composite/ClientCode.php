<?php
declare(strict_types=1);

use DesignPatterns\Structural\Composite\Leaf;
use DesignPatterns\Structural\Composite\Composite;

include_once 'Component.php';
include_once 'Leaf.php';
include_once 'Composite.php';


$leaf = new Leaf();
echo 'We\'ve got a simple component: ' . $leaf->operation() . PHP_EOL;

$tree = new Composite();
$branch1 = new Composite();
$branch1->add(new Leaf());
$branch1->add(new Leaf());
$branch2 = new Composite();
$branch2->add(new Leaf());
$tree->add($branch1);
$tree->add($branch2);
echo 'We\'ve got a composite tree: ' . $tree->operation() . PHP_EOL;
