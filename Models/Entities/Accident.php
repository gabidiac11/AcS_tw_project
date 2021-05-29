<?php
require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/Weather.php';
require_once __DIR__ . '/AccidentCircumstance.php';

/**
 * Class Accident
 *
 * @OA\Schema(schema="Accident")
 */
class Accident
{

    public static $SORT_COLUMN_MAPPING = [
        "STATE" => "State",
        "LOCATION" => "Start_Lat",
        "SEVERITY" => "Severity",
        "TIME" => "Start_Time",
        "DISTANCE" => "Distance",
        "TEMPERATURE" => "Temperature",
        "WIND_CHILL" => "Wind_Chill",
        "HUMIDITY" => "Humidity",
        "PRESSURE" => "Pressure",
        "VISIBILITY" => "Visibility",
        "WIND_SPEED" => "Wind_Speed",
        "PRECIPITATION" => "Precipitation",
        "WIND_DIRECTION" => "Wind_Direction",
        "WEATHER_CONDITION" => "Weather_Condition"
    ];

    /**
     * @OA\Property(
     *     description="Unique identifier",
     *     title="uniqueId",
     *     format="int"
     * )
     * @var int
     */
    public $uniqueId;

    /**
     * @OA\Property(
     *     description="Dataset Assigned ID",
     *     title="id"
     * )
     * @var string
     */
    public $id;

    /**
     * @OA\Property(
     *     description="There are up to 4 units for the severity scale, starting from 1.",
     *     title="severity",
     *     format="int"
     * )
     * @var int
     */
    public $severity;

    /**
     * @OA\Property(
     *     description="Timestamp",
     *     title="Time",
     *     format="float"
     * )
     * @var float
     */
    public $time;

    /**
     * @OA\Property(
     *     description="Date of the accident",
     *     title="date"
     * )
     * @var string
     */
    public $date;

    /**
     * @OA\Property(
     *     description="Latitude",
     *     title="Latitude",
     *     format="float"
     * )
     * @var float
     */
    public $lat;

    /**
     * @OA\Property(
     *     description="Longitude",
     *     title="Longitude",
     *     format="float"
     * )
     * @var float
     */
    public $long;

    /**
     * @OA\Property(
     *     description="Distance on which the car has drove while the accident was happening",
     *     title="Distance",
     *     format="float"
     * )
     * @var float
     */
    public $distance;

    /**
     * @OA\Property(
     *     description="A short description detailing the circumstances",
     *     title="Description"
     * )
     * @var string
     */
    public $description;

    /**
     * @OA\Property(
     *     description="address details",
     *     title="address",
     *     ref="#/components/schemas/Address"
     * )
     * 
     * @var Address
     */
    public $address;

    /**
     * @OA\Property(
     *     description="Weather details",
     *     title="Weather",
     *     ref="#/components/schemas/Weather"
     * )
     * 
     * @var Weather
     */
    public $weather;

    /**
     * @OA\Property(
     *     description="Accident Circumstance details",
     *     title="Accident Circumstance",
     *     ref="#/components/schemas/AccidentCircumstance"
     * )
     * 
     * @var AccidentCircumstance
     */
    public $accidentCircumstance;

    /**
     * Accident constructor.
     * @param int $uniqueId
     * @param string $id
     * @param int $severity
     * @param string $date
     * @param float $lat
     * @param float $long
     * @param float $distance
     * @param $description
     * @param Address $address
     * @param Weather $weather
     * @param AccidentCircumstance $accidentCircumstance
     */
    public function __construct(int $uniqueId, string $id, int $severity, string $date, float $lat, float $long, float $distance, $description, Address $address, Weather $weather, AccidentCircumstance $accidentCircumstance)
    {
        $this->uniqueId = $uniqueId;
        $this->id = $id;
        $this->severity = $severity;
        $this->time = strtotime($date);
        $this->lat = $lat;
        $this->long = $long;
        $this->distance = $distance;
        $this->description = $description;
        $this->address = $address;
        $this->weather = $weather;
        $this->accidentCircumstance = $accidentCircumstance;

        $this->date = date("F j, Y, g:i a", $this->time);
    }

    /**
     * @param $array - DATABASE rows from 'ACCIDENTS' table
     * @return Accident[]
     */
    public static function resultsToInstances($array): array
    {
        return array_map(function ($row) {
            return Accident::instanceFromAssocArray($row);
        }, $array);
    }

    /**
     * @param $row - a DATABASE row from 'ACCIDENTS' table
     * @return Accident
     */
    public static function instanceFromAssocArray($row): Accident
    {
        return new Accident(
            intval($row['accident_id']),
            $row['ID'],
            intval($row['Severity']),
            $row['Start_Time'],
            floatval($row['Start_Lat']),
            floatval($row['Start_Lng']),
            floatval($row['Distance']),
            $row['Description'],
            Address::instanceFromAssocArray($row),
            Weather::instanceFromAssocArray($row),
            AccidentCircumstance::instanceFromAssocArray($row)
        );
    }
}
