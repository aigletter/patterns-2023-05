<?php

namespace patterns\creational\AbstractFactory;

class ToyotaSedan implements SedanInterface
{
    public function driveSedan()
    {
        echo 'Я седан Toyota' . PHP_EOL;
    }
}