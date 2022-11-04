<?php

require_once('Vehicle.php');

class Bicycle extends Vehicle
{
    public function start(): string
    {
        $sentence = "<br> <h1 style='color:blue; margin:0px;'>Let's gong my little bicycle !!!</h1>";
        return $sentence;
    }
}
