<?php

namespace patterns\creational\AbstractFactory;

class ToyotaCoupe implements CoupeInterface
{
    public function driveCoupe()
    {
        echo 'Я купе Toyota' . PHP_EOL;
    }
}