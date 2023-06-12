<?php

namespace patterns\structural\Facade;

class Facade
{
    protected $connector;

    public function __construct()
    {
        $this->connector = new Connector();
    }

    public function send(array $lines)
    {
        $this->connector->connect('', '', '', '');
        $this->connector->sayHello();
        $methods = $this->connector->getMethods();

        $formatter = new \patterns\structural\Facade\TextFormatter();
        $body = $formatter->format($lines);

        $something = new \patterns\structural\Facade\Something();
        $result = $something->anything(1, '', true);

        $this->connector->sendBody($body, $result);
    }
}