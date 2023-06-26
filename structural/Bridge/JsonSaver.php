<?php

namespace patterns\structural\Bridge;

class JsonSaver implements SaverInterface
{
    public function save($data)
    {
        echo 'JSON saver' . PHP_EOL;
    }
}