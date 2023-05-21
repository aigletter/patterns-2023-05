<?php

include __DIR__ . '/../../../vendor/autoload.php';


// Vlad
//$db = new \patterns\creational\Singleton\Db();
$db1 = \patterns\creational\Singleton\Db::getInstance();
$users = $db1->select('SELECT * FROM users');


// Vlad
//$db = new \patterns\creational\Singleton\Db();
$db2 = \patterns\creational\Singleton\Db::getInstance();
$users = $db2->select('SELECT * FROM users');

// Vlad
//$db = new \patterns\creational\Singleton\Db();
$db3 = \patterns\creational\Singleton\Db::getInstance();
$users = $db3->select('SELECT * FROM users');


$result = $db1 === $db2 && $db2 === $db3;

var_dump($result);