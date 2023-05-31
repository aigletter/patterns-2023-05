<?php

namespace patterns\creational\Builder;

class Car
{
    protected $power;

    protected $color;

    protected $parktronik;

    protected $climat;

    protected $abs;

    protected $cruise;

    /*public function __construct($power, $color, $parktronik = false, $climat = false, $abs = null, $cruise = false)
    {
        $this->power = $power;
        $this->color = $color;
        $this->parktronik = $parktronik;
        $this->climat = $climat;
        $this->abs = $abs;
        $this->cruise = $cruise;
    }*/

    /**
     * @param BuilderInterface|CarBuilder $builder
     */
    public function __construct(BuilderInterface $builder)
    {
        $this->power = $builder->getPower();
        $this->color = $builder->getColor();
        $this->parktronik = $builder->isParktronik();
        $this->climat = $builder->isClimat();
        $this->abs = $builder->getAbs();
        $this->cruise = $builder->isCruise();
    }
}