<?php

namespace patterns\structural\Bridge;

class PdfSaver implements SaverInterface
{
    public function save($data)
    {
        echo 'Pdf saver' . PHP_EOL;
    }
}