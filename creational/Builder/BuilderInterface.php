<?php

namespace patterns\creational\Builder;

interface BuilderInterface
{
    public function setPower(int $power);

    public function setColor(string $color);

    public function setParktronik(bool $parktronik);

    public function setClimat(bool $climat);

    public function setAbs(string $abs);

    public function setCruise(bool $cruise);
}