<?php

namespace patterns\structural\Adapter;

interface NotificatorInterface
{
    public function send(User $user, string $message);
}