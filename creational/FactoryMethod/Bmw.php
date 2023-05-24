<?php

namespace patterns\creational\FactoryMethod;

class Bmw implements CarInterface
{
    public function move($pointA, $pointB)
    {
        echo 'Я bmw' . PHP_EOL;
    }
}