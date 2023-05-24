<?php

namespace patterns\creational\FactoryMethod;

// Запущен
abstract class FactoryAbstract
{
    public function create(): CarInterface
    {
        return $this->createConcrete();
    }

    abstract protected function createConcrete(): CarInterface;
}