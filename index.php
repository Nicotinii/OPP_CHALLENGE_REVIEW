<?php

require_once('Car.php');
require_once('Truck.php');
require_once('Bicycle.php');
require_once('Skateboard.php');
require_once('MotorWay.php');
require_once('ResidentialWay.php');
require_once('PedestrianWay.php');
require_once('Speedometer.php');

$c1 = new Car('Pink', 4, 'electric');
$multipla = new Car('Rainbow', 20, 'kerosene');
$tandem = new Bicycle('Purple', 2, 'elbow grease');
$hoverboard = new Skateboard('PinkYellowGreen', 1, 'elbow grease');



echo Speedometer::convertMachToKm(10) . ' km/h for 10 mach';
