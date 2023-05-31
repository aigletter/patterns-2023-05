<?php

namespace patterns\creational\AbstractFactory;

class FordFactory implements FactoryInterface
{
    public function createSedan(): SedanInterface
    {
        return new FordSedan();
    }

    public function createCoupe(): CoupeInterface
    {
        return new FordCoupe();
    }
}