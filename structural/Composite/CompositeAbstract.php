<?php

namespace patterns\structural\Composite;

abstract class CompositeAbstract implements CompositeInterface
{
    /**
     * @var array|CompositeInterface[]
     */
    protected $children = [];

    public function addChild(CompositeInterface $child)
    {
        $this->children[] = $child;
    }

    public function renderChildren(): string
    {
        $output = '';
        foreach ($this->children as $child) {
            $output .= $child->render();
        }
        return $output;
    }
}