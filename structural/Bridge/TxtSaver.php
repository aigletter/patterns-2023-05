<?php

namespace patterns\structural\Bridge;

class TxtSaver implements SaverInterface
{
    public function save($data)
    {
        echo 'Txt saver' . PHP_EOL;
    }
}