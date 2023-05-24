<?php

namespace patterns\creational\FactoryMethod;

class FordFactory extends FactoryAbstract
{
    protected function createConcrete(): CarInterface
    {
        return new Ford();
    }
}