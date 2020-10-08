<?php 


require_once 'UAWeather.php';
require_once 'USWeatherService.php';
require_once 'USWeatherAdapter.php';

$service = new UAWeather();
$service->setPosition("Киев");
//$service->setPosition("Винница");


echo " <h1>Kyev </h1><h2> ";
echo "Temperature (C) : ", $service->getTemperature(), "<br>";
echo "Speed Wind (M\s) : ", $service->getWind(), "<br>";
echo "Feels  Like Temperature (C) : ", $service->getFeelsLikeTemperature(), "<br>";
echo "</h2><br><br>";

$service = new USWeatherAdapter( new USWeatherService);
$service->setPosition("Вашингтон");
//$service->setPosition("Нью-Йорк");


echo " <h1>Нью-Йорк</h1><h2> ";
echo "Temperature (C) : ", $service->getTemperature(), "<br>";
echo "Speed Wind (M\s) : ", $service->getWind(), "<br>";
echo "Feels  Like Temperature (C) : ", $service->getFeelsLikeTemperature(), "<br>";
echo "</h2><br><br>";

