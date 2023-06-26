<?php

namespace patterns\structural\Composite;

class Div extends CompositeAbstract
{
    public function render(): string
    {
        return  '<div>' . $this->renderChildren() . '</div>';
    }
}