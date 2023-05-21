<?php

namespace patterns\creational\Singleton;

class Db
{
    protected $connection;

    protected static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __construct()
    {
        /*if (self::$count >= 1) {

        }*/
        $this->connection = mysqli_connect('localhost', 'root', '1q2w3e', 'tmp');
    }

    public function select($query)
    {
        // TODO
        echo 'Selected' . PHP_EOL;

        return [];
    }
}