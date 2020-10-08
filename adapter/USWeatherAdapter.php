<?php 

require_once 'WeatherService.php';
require_once 'USWeatherService.php';


class USWeatherAdapter implements WeatherService
{
    private $latitude;
    private $longtitude;
    private $service;

    public function __construct(USWeatherService $service)
    {
        $this->service = $service;
    }

    public function getTemperature()
    {
        $tf = $this->service->getTemperature($this->latitude, $this->longtitude);
        return ($tf-32)*5/9;
    }

    public function getWind()
    {
        $windFtMin = $this->service->getWind($this->latitude, $this->longtitude);
        return $windFtMin / 196.85; // ft/min -> M/s
    }

    public function getFeelsLikeTemperature()
    {
        return 1.04*$this->getTemperature() - $this->getWind()*0.65-0.9; // Высокая влажность
    }

    public function setPosition(String $city)
     {          
         switch ($city) {
             case 'Вашингтон': 
                 $this->latitude = 38.53;
                 $this->longtitude = 71.03;
                 break;
             case 'Нью-Йорк': 
                 $this->latitude = 43.43;
                 $this->longtitude = 73.55;
                 break;
             
         }
     }





}