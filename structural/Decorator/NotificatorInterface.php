<?php

namespace patterns\structural\Decorator;

interface NotificatorInterface
{
    public function send(User $user, string $message);
}