<?php

use patterns\creational\Builder\BuilderInterface;

include dirname(__DIR__,3) . '/vendor/autoload.php';

// power: 300
// color: red
// cruise: true

$car1 = new \patterns\creational\Builder\Car(300, 'red', false, false, null, true);

/*$builder = new \patterns\creational\Builder\CarBuilder();
$builder->setPower(300);
$builder->setColor('red');
$builder->setCruise(true);
$car2 = $builder->build();*/

function defineNeedPower(BuilderInterface $builder, $isTrack = false)
{
    if ($isTrack) {
        $power = 300;
    } else {
        $power = 100;
    }
    $builder->setPower($power);
}

$builder = new \patterns\creational\Builder\CarBuilder();

defineNeedPower($builder, true);

$builder->setColor('red');

if (true) {
    $builder->setCruise(true);
}

$car3 = $builder->build();

exit();