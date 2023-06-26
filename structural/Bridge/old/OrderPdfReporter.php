<?php

namespace patterns\structural\Bridge;

class OrderPdfReporter implements ReporterInterface
{
    public function report($data)
    {
        echo "PDF reporter" . PHP_EOL;
    }
}