<?php

namespace patterns\structural\Adapter;

class OrderManager
{
    private $notificator;

    public function __construct(NotificatorInterface $notificator)
    {
        $this->notificator = $notificator;
    }

    public function createOrder(User $user, array $data)
    {
        // TODO
        // Добавим в БД новую запись...


        $this->notificator->send($user, 'Заказ успешно отправлен');
    }
}