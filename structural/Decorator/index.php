<?php

use patterns\structural\Decorator\EmailNotificator;
use patterns\structural\Decorator\OrderManager;
use patterns\structural\Decorator\PushNotificatorDecorator;
use patterns\structural\Decorator\SmsNotificatorDecorator;
use patterns\structural\Decorator\User;

include dirname(__DIR__, 3) . '/vendor/autoload.php';

$user = new User(1, 'john.smith@gmail.com', '+1234567890');


/*$emailNotificator = new EmailNotificator();
$smsNotificator = new SmsNotificatorDecorator($emailNotificator);
$notificator = new PushNotificatorDecorator($smsNotificator);*/

$notificator = new PushNotificatorDecorator(
    new SmsNotificatorDecorator(
        new EmailNotificator()
    )
);

$orderManager = new OrderManager($notificator);


// Код оформления заказ
$orderManager->createOrder($user, []);