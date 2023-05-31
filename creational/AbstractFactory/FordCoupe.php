<?php

namespace patterns\creational\AbstractFactory;

class FordCoupe implements CoupeInterface
{
    public function driveCoupe()
    {
        echo 'Я купе Ford' . PHP_EOL;
    }
}