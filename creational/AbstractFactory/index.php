<?php

use patterns\creational\AbstractFactory\FactoryInterface;
use patterns\creational\AbstractFactory\FordFactory;
use patterns\creational\AbstractFactory\ToyotaFactory;

include dirname(__DIR__, 3) . '/vendor/autoload.php';

function run(FactoryInterface $factory)
{
    $sedan = $factory->createSedan();
    $sedan->driveSedan();

    $coupe = $factory->createCoupe();
    $coupe->driveCoupe();
}

$factories = [
    new FordFactory(),
    new ToyotaFactory(),
];
foreach ($factories as $factory) {
    run($factory);
}
