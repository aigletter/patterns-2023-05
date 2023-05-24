<?php

namespace patterns\creational\FactoryMethod;

class Toyota implements CarInterface
{
    public function move($pointA, $pointB)
    {
        echo 'Я Toyota. Я еду c ' . $pointA . ' в ' . $pointB . PHP_EOL;
    }
}