<?php

use patterns\structural\Bridge\ReporterInterface;

include dirname(__DIR__, 3) . '/vendor/autoload.php';

function main($data, ReporterInterface $reporter)
{
    $reporter->report($data);
}

$order = new \patterns\structural\Bridge\Order(1);
//$reporter = new \patterns\structural\Bridge\OrderJsonReporter();
//$reporter = new \patterns\structural\Bridge\OrderTxtReporter();

$saver = new \patterns\structural\Bridge\TxtSaver()
    //new \patterns\structural\Bridge\JsonSaver()
    //new \patterns\structural\Bridge\PdfSaver()
    ;

//$reporter = new \patterns\structural\Bridge\OrderReporter($saver);
$reporter = new \patterns\structural\Bridge\UserReporter($saver);

main($order, $reporter);