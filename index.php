<?php
require 'Speedometer.php';

echo 'Conversion des Km en miles :'.'<br>';
echo Speedometer::convertKmToMiles(10).'<br>';
echo '<br>';
echo '<br>';
echo 'Conversion des miles en Km :'.'<br>';
echo Speedometer::convertMilesToKm(10).'<br>';