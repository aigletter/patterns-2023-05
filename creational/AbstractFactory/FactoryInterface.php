<?php

namespace patterns\creational\AbstractFactory;

interface FactoryInterface
{
    public function createSedan(): SedanInterface;

    public function createCoupe(): CoupeInterface;
}