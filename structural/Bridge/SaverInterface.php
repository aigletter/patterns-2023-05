<?php

namespace patterns\structural\Bridge;

interface SaverInterface
{
    public function save($data);
}