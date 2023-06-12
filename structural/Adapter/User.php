<?php

namespace patterns\structural\Adapter;

class User
{
    protected int $id;

    protected string $email;

    protected ?string $phone;

    public function __construct(int $id, string $email, string $phone = null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->phone = $phone;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
}