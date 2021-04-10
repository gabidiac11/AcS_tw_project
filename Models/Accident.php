<?php

class Accident extends Model {
    private $ID;
    private $Source;
    private $TMC;
    private $Severity;
    private $Start_Time;
    private $End_Time;
    private $Start_Lat;
    private $Start_Lng;
    private $End_Lat;
    private $End_Lng;
    private $Distance;
    private $Description;
    private $Number;
    private $Street;
    private $Side;
    private $City;
    private $County;
    private $State;
    private $Zipcode;
    private $Country;
    private $Timezone;
    private $Airport_Code;
    private $Weather_Timestamp;
    private $Temperature;
    private $Wind_Chill;
    private $Humidity;
    private $Pressure;
    private $Visibility;
    private $Wind_Direction;
    private $Wind_Speed;
    private $Precipitation;
    private $Weather_Condition;
    private $Amenity;
    private $Bump;
    private $Crossing;
    private $Give_Way;
    private $Junction;
    private $No_Exit;
    private $Railway;
    private $Roundabout;
    private $Station;
    private $Stop;
    private $Traffic_Calming;
    private $Traffic_Signal;
    private $Turning_Loop;
    private $Sunrise_Sunset;
    private $Civil_Twilight;
    private $Nautical_Twilight;
    private $Astronomical_Twilight;

    private static $db = Database::getInstance();

    function __construct($row)
    {
        parent::__construct();

        $this->ID = $row['ID'];
        $this->Source = $row['Source'];
        $this->TMC = $row['TMC'];
        $this->Severity = $row['Severity'];
        $this->Start_Time = $row['Start_Time'];
        $this->End_Time = $row['End_Time'];
        $this->Start_Lat = $row['Start_Lat'];
        $this->Start_Lng = $row['Start_Lng'];
        $this->End_Lat = $row['End_Lat'];
        $this->End_Lng = $row['End_Lng'];
        $this->Distance = $row['Distance'];
        $this->Description = $row['Description'];
        $this->Number = $row['Number'];
        $this->Street = $row['Street'];
        $this->Side = $row['Side'];
        $this->City = $row['City'];
        $this->County = $row['County'];
        $this->State = $row['State'];
        $this->Zipcode = $row['Zipcode'];
        $this->Country = $row['Country'];
        $this->Timezone = $row['Timezone'];
        $this->Airport_Code = $row['Airport_Code'];
        $this->Weather_Timestamp = $row['Weather_Timestamp'];
        $this->Temperature = $row['Temperature'];
        $this->Wind_Chill = $row['Wind_Chill'];
        $this->Humidity = $row['Humidity'];
        $this->Pressure = $row['Pressure'];
        $this->Visibility = $row['Visibility'];
        $this->Wind_Direction = $row['Wind_Direction'];
        $this->Wind_Speed = $row['Wind_Speed'];
        $this->Precipitation = $row['Precipitation'];
        $this->Weather_Condition = $row['Weather_Condition'];
        $this->Amenity = $row['Amenity'];
        $this->Bump = $row['Bump'];
        $this->Crossing = $row['Crossing'];
        $this->Give_Way = $row['Give_Way'];
        $this->Junction = $row['Junction'];
        $this->No_Exit = $row['No_Exit'];
        $this->Railway = $row['Railway'];
        $this->Roundabout = $row['Roundabout'];
        $this->Station = $row['Station'];
        $this->Stop = $row['Stop'];
        $this->Traffic_Calming = $row['Traffic_Calming'];
        $this->Traffic_Signal = $row['Traffic_Signal'];
        $this->Turning_Loop = $row['Turning_Loop'];
        $this->Sunrise_Sunset = $row['Sunrise_Sunset'];
        $this->Civil_Twilight = $row['Civil_Twilight'];
        $this->Nautical_Twilight = $row['Nautical_Twilight'];
        $this->Astronomical_Twilight = $row['Astronomical_Twilight'];
    }

    private static function getSeverityArrayOfState($stateName) {
        $rows = $this->db->select(
                        "SELECT * FROM accidents where State = '$stateName'"
        );

        $accidentsBySeverity = [];
        foreach($rows as $row) {
            $accident = new Accident($row);
            
            if(!isset($accidentsBySeverity[$accident->Severity])) {
                $accidentsBySeverity[$accident->Severity] = [];
            }

            $accidentsBySeverity[$accident->Severity][] = $accident;
        }

        return $accidentsBySeverity;
    } 

    private static function dbRowsToInstances($array) {
        $accidents = [];
        foreach($array as $row) {
            $accidents[] = new Accident($row);
        }

        return $accidents;
    }

    public static function getSeverityChartPerState() {
        $charts = [];

        $this->db->select(
            "SELECT
                
                FROM accidents WHERE ")
    } 
}

