<?php

class Vehicle
{

    protected int $nbWheels;
    protected int $currentSpeed;
    protected string $color;
    protected int $nbSeats;
    protected string $energy;
    protected int $energyLevel;
    public const ALLOWED_ENERGIES = ['fuel', 'electric', 'elbow grease'];


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->setEnergy($energy);
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }



    public function forward(): string
    {
        return "Vroom Vroom " . $this->currentSpeed . " Ma <br>";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed -= 10;
            $sentence .= "Brake !!! ";
        }
        $sentence .= "<br>I'm stopped. <br><br>";
        return $sentence;
    }
}
