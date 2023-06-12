<?php

namespace patterns\structural\Decorator;

abstract class NotificatorAbstractDecorator implements NotificatorInterface
{
    protected NotificatorInterface $notificator;

    public function __construct(NotificatorInterface $notificator)
    {
        $this->notificator = $notificator;
    }
}