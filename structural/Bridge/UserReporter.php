<?php

namespace patterns\structural\Bridge;

class UserReporter implements ReporterInterface
{
    protected $saver;

    public function __construct(SaverInterface $saver)
    {
        $this->saver = $saver;
    }

    /**
     * @param User $user
     * @return void
     */
    public function report($user)
    {
        $data = [
            $user->getId()
        ];

        echo 'Reporting user' . PHP_EOL;
        $this->saver->save($data);
    }
}