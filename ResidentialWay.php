<?php

require_once('HighWay.php');

final class ResidentialWay extends HighWay
{

    public function __construct(int $nbLane, int $maxSpeed)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

    public function addVehicle($vehicle): string
    {
        $sentence = '';
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicle[] = $vehicle;
            $sentence = 'Welcome to france all the door are open <br>';
        } else {
            $sentence = 'Not for you E.T <br>';
        }
        return $sentence;
    }
}
