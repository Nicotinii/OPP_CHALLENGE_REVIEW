<?php

class Bicycle
{
    private string $color;
    private int $currentSpeed;
    private int $nbSeats;
    private int $nbWheels;

    public function __construct(string $color, int $currentSpeed)
    {
        $this->color = $color;
        $this->currentSpeed = $currentSpeed;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }


    public function forward(): string
    {
        $this->currentSpeed = 10;
        return "<br> <h1 style='color:Green; margin:0px;'>Bicycle GREEN LIGHT !</h1><br>";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!  ";
        }
        $sentence .= "<br>I'm stopped.<br>";
        return $sentence;
    }
}
