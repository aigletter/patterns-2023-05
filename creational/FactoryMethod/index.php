<?php

use patterns\creational\FactoryMethod\FactoryAbstract;

include __DIR__ . '/../../../vendor/autoload.php';

// Запущен 5 лет назад
function manage(FactoryAbstract $factoryAbstract, $pointA, $pointB)
{
    $car = $factoryAbstract->create();

    $car->move($pointA, $pointB);
}

$factories[] = new \patterns\creational\FactoryMethod\BmwFactory();

// Запущен 5 лет назад
$factories[] = new \patterns\creational\FactoryMethod\FordFactory();
$factories[] = new \patterns\creational\FactoryMethod\ToyotaFactory();
foreach ($factories as $factory) {
    manage($factory, 'Kyiv', 'Odessa');
}