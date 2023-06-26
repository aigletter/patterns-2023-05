<?php

namespace patterns\structural\Bridge;

class OrderReporter implements ReporterInterface
{
    protected $saver;

    public function __construct(SaverInterface $saver)
    {
        $this->saver = $saver;
    }

    /**
     * @param Order $order
     * @return void
     */
    public function report($order)
    {
        $data = [
            $order->getId()
        ];

        echo 'Saving order...' . PHP_EOL;
        $this->saver->save($data);
    }
}