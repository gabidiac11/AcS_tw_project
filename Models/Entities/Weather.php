

<?php

class Weather
{
    public $temperature;
    public $windChill;
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
     * @param $windChill
     * @param $humidity
     * @param $pressure
     * @param $visibility
     * @param $windDirection
     * @param $windSpeed
     * @param $precipitation
     * @param $generalCondition
     */
    public function __construct($temperature, $windChill, $humidity, $pressure, $visibility, $windDirection, $windSpeed, $precipitation, $generalCondition)
    {
        $this->temperature = $temperature;
        $this->windChill = $windChill;
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
            floatval($array['Temperature']),
            floatval($array['Wind_Chill']),
            floatval($array['Humidity']),
            floatval($array['Pressure']),
            floatval($array['Visibility']),
            $array['Wind_Direction'],
            floatval($array['Wind_Speed']),
            floatval($array['Precipitation']),
            $array['Weather_Condition']
        );
    }
}

