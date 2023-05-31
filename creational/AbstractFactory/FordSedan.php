<?php

namespace patterns\creational\AbstractFactory;

class FordSedan implements SedanInterface
{
    public function driveSedan()
    {
        echo 'Я седан Ford' . PHP_EOL;
    }
}