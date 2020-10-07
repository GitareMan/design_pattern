<?php 

class  USWeatherService
{

   /** 
   * Возвп=рвщает температуру в Фаренгейтх
  */

    public function getTemperature(float $latitude, float $longtitude)
    {
        if($latitude == 38.53 && $longtitude == 77.22)
        return 86;
        else {
            if($latitude == 38.53 && $longtitude == 77.22)
            return 95;
            else 
                return 80;
        }
    }


  /** 
   * Возвращет скоросттть ветра Футs в сек
  */

    public function getWind(float $latitude, float $longtitude)
    {
        if($latitude == 38.53 && $longtitude == 77.22)
        return 1000;
        else {
            if($latitude == 38.53 && $longtitude == 77.22)
            return 950;
            else 
                return 800;
        }
    }

}
