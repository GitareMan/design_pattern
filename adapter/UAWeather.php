<?php 

require_once 'WeatherService.php';

class UAWeather implements WeatherService
{
    private $city = '';

    /**
     * Возвараше  температуру
     * @return В градусах Цельсия
     */

     public function getTemperature()
     {          
         switch ($this->city) {
             case 'Киев': 
                 return 12;
                 break;
             case 'Винница': 
                 return 15;
                 break;
             
             default:
                 return 10;
                 break;
         }
     }

    /**
     * Возвараше  скорость ветра
     * @return В М\С
     */

     public function getWind()
     {          
         switch ($this->city) {
             case 'Киев': 
                 return 3;
                 break;
             case 'Винница': 
                 return 4;
                 break;
             
             default:
                 return 2;
                 break;
         }
     }
     /**
     * Возвараше  ошушаемую температуру
     *  @return В градусах Цельсия
     */

     public function getFeelsLikeTemperature()
     {          
         switch ($this->city) {
             case 'Киев': 
                 return 10;
                 break;
             case 'Винница': 
                 return 11;
                 break;
             
             default:
                 return 7;
                 break;
         }
     }

     public function setPosition($city)
     {
        $this->city = $city;
     }


}