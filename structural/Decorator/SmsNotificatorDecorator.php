<?php

namespace patterns\structural\Decorator;

class SmsNotificatorDecorator extends NotificatorAbstractDecorator
{
    public function send(User $user, string $message)
    {
        $this->notificator->send($user, $message);

        echo 'SMS to ' . $user->getPhone() . ' was sent successfully' . PHP_EOL;
    }
}