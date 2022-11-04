<?php

require_once('Car.php');
require_once('Truck.php');
require_once('Bicycle.php');
require_once('Skateboard.php');
require_once('MotorWay.php');
require_once('ResidentialWay.php');
require_once('PedestrianWay.php');

$c1 = new Car('Pink', 4, 'electric');
$multipla = new Car('Rainbow', 20, 'kerosene');
$tandem = new Bicycle('Purple', 2, 'elbow grease');
$hoverboard = new Skateboard('PinkYellowGreen', 1, 'elbow grease');

$motorway = new MotorWay(4, 130);
$residentialWay = new ResidentialWay(2, 50);
$pedestrianWay = new PedestrianWay(1, 10);

echo $motorway->addVehicle($c1);
echo $motorway->addVehicle($multipla);
echo $motorway->addVehicle($tandem) . '<br>';

echo $residentialWay->addVehicle($tandem);
echo $residentialWay->addVehicle($hoverboard);
echo $residentialWay->addVehicle($ufo) . '<br>';

echo $pedestrianWay->addVehicle($hoverboard);
echo $pedestrianWay->addVehicle($multipla);
