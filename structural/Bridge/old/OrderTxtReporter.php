<?php

namespace patterns\structural\Bridge;

class OrderTxtReporter implements ReporterInterface
{
    public function report($data)
    {
        echo 'Txt report';
    }
}