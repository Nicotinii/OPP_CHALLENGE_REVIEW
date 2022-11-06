<?php

class Speedometer
{
    public const Km = 1234.8;

    public static function convertMachToKm(float $Ma): float
    {
        return $Ma * self::Km;
    }
}
