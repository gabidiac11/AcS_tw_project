<?php
require_once __DIR__ . '/Address.php';
require_once __DIR__ . '/Weather.php';
require_once __DIR__ . '/AccidentCircumstance.php';

class Accident
{
    public $id;

    /**
     * @var int
     */
    public $severity;

    /**
     * @var float
     */
    public $time;

    /**
     * @var float
     */
    public $lat;

    /**
     * @var float
     */
    public $long;

    /**
     * @var float
     */
    public $distance;

    public $description;

    /**
     * @var Address
     */
    public $address;

    /**
     * @var Weather
     */
    public $weather;

    /**
     * @var AccidentCircumstance
     */
    public $accidentCircumstance;

    /**
     * Accident constructor.
     * @param $id
     * @param int $severity
     * @param float $time
     * @param float $lat
     * @param float $long
     * @param float $distance
     * @param $description
     * @param Address $address
     * @param Weather $weather
     * @param AccidentCircumstance $accidentCircumstance
     */
    public function __construct($id, int $severity, float $time, float $lat, float $long, float $distance, $description, Address $address, Weather $weather, AccidentCircumstance $accidentCircumstance)
    {
        $this->id = $id;
        $this->severity = $severity;
        $this->time = $time;
        $this->lat = $lat;
        $this->long = $long;
        $this->distance = $distance;
        $this->description = $description;
        $this->address = $address;
        $this->weather = $weather;
        $this->accidentCircumstance = $accidentCircumstance;
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
            $row['ID'],
            intval($row['Severity']),
            floatval($row['Start_Time']),
            floatval($row['Start_Lat']),
            floatval($row['Start_Lng']),
            floatval($row['Distance(mi)']),
            $row['Description'],
            Address::instanceFromAssocArray($row),
            Weather::instanceFromAssocArray($row),
            AccidentCircumstance::instanceFromAssocArray($row)
        );
    }
}