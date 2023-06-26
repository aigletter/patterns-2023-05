<?php

namespace patterns\structural\Composite;

class Span extends CompositeAbstract implements CompositeInterface
{
    protected $text;

    public function __construct(string $text = '')
    {
        $this->text = $text;
    }

    public function render(): string
    {
        $output = '<span>' . $this->text;
        $output .= $this->renderChildren();
        return $output . '</span>';
    }
}