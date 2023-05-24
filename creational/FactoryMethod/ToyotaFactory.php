<?php

namespace patterns\creational\FactoryMethod;

class ToyotaFactory extends FactoryAbstract
{
    protected function createConcrete(): CarInterface
    {
        return new Toyota();
    }
}