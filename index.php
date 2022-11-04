<?php

require_once('Bicycle.php');
require_once('Car.php');
require_once('Truck.php');

$bike = new Bicycle('red', 1);
$c1 = new Car('pink', 4, 'electric');
$amazon = new Truck('purple', 2, 'electric', 40);

$amazon->setLoading(10);
echo $amazon->fillingTruck();

echo $amazon->start();
$amazon->setCurrentSpeed(80);
echo $amazon->forward();
echo $amazon->brake();


$amazon->setLoading(40);
echo $amazon->fillingTruck();

echo $amazon->start();
$amazon->setCurrentSpeed(80);
echo $amazon->forward();
echo $amazon->brake();


var_dump($amazon);


echo '<br>' . $c1->start();
$c1->setCurrentSpeed(200);
echo $c1->forward();
echo $c1->brake();
