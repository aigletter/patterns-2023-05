<?php

namespace patterns\structural\Decorator;

class PushNotificatorDecorator extends NotificatorAbstractDecorator
{
    public function send(User $user, string $message)
    {
        $this->notificator->send($user, $message);

        echo 'Отправляем PUSH уведомление пользователю с id: ' . $user->getId() . PHP_EOL;
    }
}