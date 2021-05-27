<?php

class DatabaseUtl extends Model
{


    function __construct()
    {
        parent::__construct();
    }

    const COLUMNS = ["ID",
                     "Severity",
                     "Start_Time",
                     "End_Time",
                     "Start_Lat",
                     "Start_Lng",
                     "End_Lat",
                     "End_Lng",
                     "Distance",
                     "Description",
                     "Number",
                     "Street",
                     "Side",
                     "City",
                     "County",
                     "State",
                     "Zipcode",
                     "Country",
                     "Timezone",
                     "Airport_Code",
                     "Weather_Timestamp",
                     "Temperature",
                     "Wind_Chill",
                     "Humidity",
                     "Pressure",
                     "Visibility",
                     "Wind_Direction",
                     "Wind_Speed",
                     "Precipitation",
                     "Weather_Condition",
                     "Amenity",
                     "Bump",
                     "Crossing",
                     "Give_Way",
                     "Junction",
                     "No_Exit",
                     "Railway",
                     "Roundabout",
                     "Station",
                     "Stop",
                     "Traffic_Calming",
                     "Traffic_Signal",
                     "Turning_Loop",
                     "Sunrise_Sunset",
                     "Civil_Twilight",
                     "Nautical_Twilight",
                     "Astronomical_Twilight"
                    ];

    /**
     * inserts from csv
     */
    public function phpCsvToDb()
    {
        die();
        /**  */
        $columnsString = implode(",", self::COLUMNS);

        $row = 1;
        if (($csvFile = fopen(__DIR__. "/../US_Accidents_Dec20_Updated.csv", "r")) !== FALSE) {
            while (($result = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
                $count = count($result);
                // echo "<div> $count columns for row $row: <br/> </div>";
                
                /* skip first line where column names are */
                if($row == 1) {
                    $row++;
                    continue;
                }



                $row++;
                // if($row <= 109924) {
                //     continue;
                // }

                $columnValues = [];
                foreach(self::COLUMNS as $index => $column) {
                    $columnValues[] = "'" . $this->db->escape($result[$index]) . "'";
                }
                $columnValuesStr = implode(",", $columnValues);

                $query = "INSERT INTO accidents($columnsString) VALUES($columnValuesStr);";

                $insertId = $this->db->insert($query);
                // echo "<div>";
                // echo $query;
                // echo "</br>
                // insertid: '$insertId'
                // row: '$row'
                // </br></div>";
                // echo "<div> ---------------------------------------------------------------------------------------- </div>";
                
            }
            
            // echo "<br/> ....................................... <br/>";

            fclose($csvFile);
        }
    }
}
