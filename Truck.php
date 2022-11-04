<?php

require_once('Vehicle.php');

class Truck extends Vehicle
{

    private int $loadingCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingCapacity)
    {
        parent::__construct($color, $nbSeats, $energy);
        $this->setEnergy($energy);
        $this->loadingCapacity = $loadingCapacity;
    }

    public function fillingTruck(): string
    {
        $sentence = "";
        if ($this->loading < 0 || $this->loading > $this->loadingCapacity) {
            $sentence = "You miss.";
        } else if ($this->loading < $this->loadingCapacity) {
            $sentence = "In filling.";
        } else {
            $sentence = "Full. ";
        }
        return $sentence;
    }

    public function start(): string
    {
        $sentence = "<br> <h1 style='color:red; margin:0px;'>Let's gong my big truck !!!</h1>";
        return $sentence;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getLoadingCapacity(): int
    {
        return $this->energyLevel;
    }

    public function setLoadingCapacity(int $loadingCapacity): void
    {
        $this->loadingCapacity = $loadingCapacity;
    }

    public function getLoading(): int
    {
        return $this->loading;
    }

    public function setLoading(int $loading): void
    {
        $this->loading = $loading;
    }
}
