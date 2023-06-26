<?php

namespace patterns\structural\Composite;

class P implements CompositeInterface
{
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return '<p>' . $this->text . '</p>';
    }
}