<?php

namespace patterns\structural\Decorator;

class EmailNotificator implements NotificatorInterface
{
    public function send(User $user, string $message)
    {
        // 500+ строк кода чтобы - делаем!!!
        echo 'Send email with text "' . $message . '" to ' . $user->getEmail() . PHP_EOL;
    }
}