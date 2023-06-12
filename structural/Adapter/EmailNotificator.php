<?php

namespace patterns\structural\Adapter;

class EmailNotificator implements NotificatorInterface
{
    public function send(User $user, string $message)
    {
        // 5000+ строк кода...

        echo 'Sent email' . PHP_EOL;
    }
}