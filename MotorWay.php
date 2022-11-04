<?php

require_once('HighWay.php');
require_once('Car.php');

final class MotorWay extends HighWay
{

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle): string
    {
        $sentence = '';
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
            $sentence = 'Waaou nice car <br>';
        } else {
            $sentence = 'Go away looser<br>';
        }
        return $sentence;
    }
}
