<?php

namespace patterns\structural\Adapter;

use PHPMailer\PHPMailer\PHPMailer;

class PHPMailerAdapter implements NotificatorInterface
{
    protected $phpMailer;

    public function __construct(PHPMailer $phpMailer)
    {
        $this->phpMailer = $phpMailer;
    }

    public function send(User $user, string $message)
    {
        $this->phpMailer->isSMTP();
        $this->phpMailer->addAddress($user->getEmail());
        $this->phpMailer->Body = $message;
        // и т.д. и т.п.

        if ($this->phpMailer->send()) {
            echo 'Email успешно отправлен' . PHP_EOL;
        }
    }
}