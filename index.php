<?php

require_once('Bicycle.php');
require_once('Car.php');

$bike = new Bicycle('red', 1);
$car1 = new Car('pink', 4, 'electric');

echo $bike->forward();
echo $bike->brake() . "<br>";

echo $car1->start();
echo $car1->forward();
echo $car1->brake() . "<br>";


echo $car1->start();
echo $car1->forward();
$car1->setCurrentSpeed(200);
echo $car1->brake();
