<?php

require_once('Vehicle.php');

class Skateboard extends Vehicle
{

    public function start(): string
    {
        $sentence = "<br> <h1 style='color:pink; margin:0px;'>Let's gong my little Mcfly !!!</h1>";
        return $sentence;
    }
}
