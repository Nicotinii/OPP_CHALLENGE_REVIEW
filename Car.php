<?php

require_once('Vehicle.php');

class Car extends Vehicle
{

    public function start(): string
    {
        $sentence = "<br> <h1 style='color:red; margin:0px;'>Let's gong my little car !!!</h1>";
        return $sentence;
    }
}
