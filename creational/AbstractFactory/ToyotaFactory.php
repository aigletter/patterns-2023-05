<?php

namespace patterns\creational\AbstractFactory;

class ToyotaFactory implements FactoryInterface
{
    public function createSedan(): SedanInterface
    {
        return new ToyotaSedan();
    }

    public function createCoupe(): CoupeInterface
    {
        return new ToyotaCoupe();
    }
}