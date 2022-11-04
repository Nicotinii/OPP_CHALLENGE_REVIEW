<?php

require_once('Vehicle.php');
require_once('LightableInterface.php');

class Car extends Vehicle implements LightableInterface
{


    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start(): string
    {
        $sentence = "<br> <h1 style='color:red; margin:0px;'>Let's gong my little car !!!</h1>";
        return $sentence;
    }
}
