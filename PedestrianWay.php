<?php

require_once('HighWay.php');

final class PedestrianWay extends HighWay
{

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle): string
    {
        $sentence = '';
        if (($vehicle instanceof Bicycle) || ($vehicle instanceof Skateboard)) {
            $this->currentVehicle[] = $vehicle;
            $sentence = 'Hello my ecologist friends <br>';
        } else {
            $sentence = 'you are killing the planet, monster !  <i>*cry in reusable tissues* <i><br>';
        }
        return $sentence;
    }
}
