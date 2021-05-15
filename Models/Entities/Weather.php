

<?php

class Weather
{
    public $temperature;
    public $widthChill;
    public $humidity;
    public $pressure;
    public $visibility;
    public $windDirection;
    public $windSpeed;
    public $precipitation;

    public $generalCondition;

    /**
     * Weather constructor.
     * @param $temperature
     * @param $widthChill
     * @param $humidity
     * @param $pressure
     * @param $visibility
     * @param $windDirection
     * @param $windSpeed
     * @param $precipitation
     * @param $generalCondition
     */
    public function __construct($temperature, $widthChill, $humidity, $pressure, $visibility, $windDirection, $windSpeed, $precipitation, $generalCondition)
    {
        $this->temperature = $temperature;
        $this->widthChill = $widthChill;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        $this->visibility = $visibility;
        $this->windDirection = $windDirection;
        $this->windSpeed = $windSpeed;
        $this->precipitation = $precipitation;
        $this->generalCondition = $generalCondition;
    }

    public static function instanceFromAssocArray($array): Weather
    {
        return new Weather(
            floatval($array['Temperature(F)']),
            floatval($array['Wind_Chill(F)']),
            floatval($array['Humidity(%)']),
            floatval($array['Pressure(in)']),
            floatval($array['Visibility(mi)']),
            $array['Wind_Direction'],
            floatval($array['Wind_Speed(mph)']),
            floatval($array['Precipitation(in)']),
            $array['Weather_Condition']
        );
    }
}

