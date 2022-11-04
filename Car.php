<?php

require_once('Vehicle.php');

class Car extends Vehicle
{
    private bool $hasParkBrake;



    public function setParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function start(): string
    {
        $sentence = "";
        if ($this->hasParkBrake = true) {
            throw new Exception("Homer you are dumb ? take off that handbrake.");
        } else {
            $sentence = "<br> <h1 style='color:red; margin:0px;'>Let's gong my little car !!!</h1>";
            return $sentence;
        }
    }
}
