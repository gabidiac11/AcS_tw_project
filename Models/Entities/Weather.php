<?php


/**
 * Class Weather
 *
 * @OA\Schema(schema="Weather", required={"name"})
 */
class Weather
{
    /**
     * @OA\Property(
     *     description="Temperature(F)",
     *     title="temperature",
     *     format="float"
     * )
     * @var float
     */
    public $temperature;

    /**
     * @OA\Property(
     *     description="wind coldness",
     *     title="windChill",
     *     format="float"
     * )
     * @var float
     */
    public $windChill;

    /**
     * @OA\Property(
     *     description="Humidity(%)",
     *     title="humidity",
     *     format="float"
     * )
     * @var float
     */
    public $humidity;

    /**
     * @OA\Property(
     *     description="pressure",
     *     title="pressure",
     *     format="float"
     * )
     * @var float
     */
    public $pressure;

    /**
     * @OA\Property(
     *     description="Visibility(mi)",
     *     title="visibility",
     *     format="float"
     * )
     * @var float
     */
    public $visibility;

    /**
     * @OA\Property(
     *     enum={"East", "SE","nan","West","NNE","CALM","SSW","NE","W","S","ENE","NW","NNW","WNW","South","E","N","SW","North","SSE","ESE","VAR","WSW","Variable"},
     *     description="Wind direction",
     *     title="windDirection"
     * )
     * 
     * @var string
     */
    public $windDirection;

    /**
     * @OA\Property(
     *     description="Wind Speed(mph)",
     *     title="windSpeed",
     *     format="float"
     * )
     * @var float
     */
    public $windSpeed;

    /**
     * @OA\Property(
     *     description="Precipitation(in)",
     *     title="precipitation",
     *     format="float"
     * )
     * @var float
     */
    public $precipitation;

    /**
     * @OA\Property(
     *     description="A short description related to the weather (Ex. 'clear', 'cloudy', 'sunny') ",
     *     title="generalCondition"
     * )
     * @var string
     */
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
