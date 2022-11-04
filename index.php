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

try {
    echo $multipla->start();
} catch (Exception $msg) {
    echo $msg->getMessage(), "<br>";
    $multipla->setParkBrake(true);
} finally {
    $multipla->setCurrentSpeed(80);
    echo $multipla->forward();
    echo $multipla->brake();
    echo "Ma voiture roule comme un donut.<br><br>";
}

try {
    echo $multipla->start();
} catch (Exception $msg) {
    echo $msg->getMessage(), "<br>";
    $multipla->setParkBrake(false);
} finally {
    $multipla->setCurrentSpeed(80);
    echo $multipla->forward();
    echo $multipla->brake();
    echo "Ma voiture roule comme un donut.<br><br>";
}
