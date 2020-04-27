<?php 

class Speedometer
{

    public const KmToMiles = 0.621371;
    public const MilesToKm = 1.60934;


    public static function convertKmToMiles(float $Km ) : float
    {
        return ($Km * self ::KmToMiles);
    }

    public static function convertMilesToKm (float $Miles) : float
    {
        return ($Miles * self::MilesToKm);
    }

}