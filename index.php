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

$c1->setCurrentSpeed(11);
var_dump($c1->switchOn());
echo '<br>';
$c1->setCurrentSpeed(10);
var_dump($c1->switchOff());
echo '<br><br>';


$tandem->setCurrentSpeed(11);
var_dump($tandem->switchOn());
echo '<br>';
$tandem->setCurrentSpeed(10);
var_dump($tandem->switchOn());
echo '<br><br>';
