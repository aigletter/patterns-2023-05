<?php

use patterns\structural\Adapter\EmailNotificator;
use patterns\structural\Adapter\OrderManager;
use patterns\structural\Adapter\PHPMailerAdapter;
use patterns\structural\Adapter\User;
use PHPMailer\PHPMailer\PHPMailer;

include dirname(__DIR__, 3) . '/vendor/autoload.php';

$user = new User(1, 'john.smith@gmail.com', '+1234567890');

//$notificator = new EmailNotificator();
$phpMailer = new PHPMailer(false);
$adapter = new PHPMailerAdapter($phpMailer);
$orderManager = new OrderManager($adapter);

$orderManager->createOrder($user, []);