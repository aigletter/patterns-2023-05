<?php

namespace patterns\structural\Bridge;

class Order
{
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}