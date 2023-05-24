<?php

namespace patterns\creational\FactoryMethod;

class BmwFactory extends FactoryAbstract
{
    protected function createConcrete(): CarInterface
    {
        return new Bmw();
    }
}