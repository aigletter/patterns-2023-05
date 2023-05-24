<?php

namespace patterns\creational\FactoryMethod;

class Ford implements CarInterface
{
    public function move($pointA, $pointB)
    {
        echo 'Я Ford. Везу c ' . $pointA . ' в ' . $pointB . PHP_EOL;
    }
}