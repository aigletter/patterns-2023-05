<?php

include dirname(__DIR__, 3) . '/vendor/autoload.php';

use patterns\structural\Composite\CompositeInterface;
use patterns\structural\Composite\Div;
use patterns\structural\Composite\P;
use patterns\structural\Composite\Span;

function view(CompositeInterface $composite)
{
    echo $composite->render();
}


//////////////////////


$span = new Span('Hello');
$p = new P('Параграф');
$span->addChild($p);
$element = new Div();
$element->addChild($span);

$span2 = new Span('Второй span');
$element->addChild($span2);

view($element);