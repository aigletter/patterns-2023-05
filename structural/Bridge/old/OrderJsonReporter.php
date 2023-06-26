<?php

namespace patterns\structural\Bridge;

class OrderJsonReporter implements ReporterInterface
{
    public function report($order)
    {
        $filename = __DIR__ . '/reports/' . $order->getId() . '.json';
        file_put_contents($filename, json_encode([
            'id' => $order->getId()
        ]));
    }
}