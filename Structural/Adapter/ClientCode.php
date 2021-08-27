<?php
declare(strict_types=1);


use DesignPatterns\Structural\Adapter\Adapter;
use DesignPatterns\Structural\Adapter\Adaptable;
use DesignPatterns\Structural\Adapter\Existing;


include_once 'Existing.php';
include_once 'Adaptable.php';
include_once 'Adapter.php';


echo 'Existing returned: ' . (new Existing())->request() . PHP_EOL;
echo 'Adaptable returned: ' . (new Adaptable())->specificRequest() . PHP_EOL;
echo 'Adapter returned: ' . (new Adapter(new Adaptable()))->request() . PHP_EOL;
