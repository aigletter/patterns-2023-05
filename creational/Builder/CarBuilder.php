<?php

namespace patterns\creational\Builder;

class CarBuilder implements BuilderInterface
{
    protected int $power;

    protected string $color;

    protected bool $parktronik = false;

    protected bool $climat = false;

    protected string|null $abs = null;

    protected bool $cruise = false;

    /**
     * @param int $power
     * @return CarBuilder
     */
    public function setPower(int $power): CarBuilder
    {
        $this->power = $power;
        return $this;
    }

    /**
     * @param string $color
     * @return CarBuilder
     */
    public function setColor(string $color): CarBuilder
    {
        $this->color = $color;
        return $this;
    }

    /**
     * @param bool $parktronik
     * @return CarBuilder
     */
    public function setParktronik(bool $parktronik): CarBuilder
    {
        $this->parktronik = $parktronik;
        return $this;
    }

    /**
     * @param bool $climat
     * @return CarBuilder
     */
    public function setClimat(bool $climat): CarBuilder
    {
        $this->climat = $climat;
        return $this;
    }

    /**
     * @param string|null $abs
     * @return CarBuilder
     */
    public function setAbs(?string $abs): CarBuilder
    {
        $this->abs = $abs;
        return $this;
    }

    /**
     * @param bool $cruise
     * @return CarBuilder
     */
    public function setCruise(bool $cruise): CarBuilder
    {
        $this->cruise = $cruise;
        return $this;
    }

    /**
     * @return int
     */
    public function getPower(): int
    {
        return $this->power;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return bool
     */
    public function isParktronik(): bool
    {
        return $this->parktronik;
    }

    /**
     * @return bool
     */
    public function isClimat(): bool
    {
        return $this->climat;
    }

    /**
     * @return string|null
     */
    public function getAbs(): ?string
    {
        return $this->abs;
    }

    /**
     * @return bool
     */
    public function isCruise(): bool
    {
        return $this->cruise;
    }

    public function build()
    {
        return new Car(
            $this->power,
            $this->color,
            $this->parktronik,
            $this->climat,
            $this->abs,
            $this->cruise
        );
        //return new Car($this);
    }
}