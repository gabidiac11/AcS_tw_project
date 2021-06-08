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
     * 
     * (from DATA SET)
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

    public function importFromCsvFile() {
        while (($row = fgetcsv($_FILES['file']['tmp_name'], 1000, ",")) !== FALSE) {
            try{
                $stmt = $this->db->prepare("INSERT INTO MyGuests (ID, Severity, Start_Time, End_Time, Start_Lat, Start_Lng, End_Lat, End_Lng, Distance, Description, Number, Street, Side, City, County, State, Zipcode, Country, Timezone, Airport_Code, Weather_Timestamp, Temperature, Wind_Chill, Humidity, Pressure, Visibility, Wind_Direction, Wind_Speed, Precipitation, Weather_Condition, Amenity, Bump, Crossing, Give_Way, Junction, No_Exit, Railway, Roundabout, Station, Stop, Traffic_Calming, Traffic_Signal, Turning_Loop, Sunrise_Sunset, Civil_Twilight, Nautical_Twilight, Astronomical_Twilight) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS", $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[14], $row[15], $row[16], $row[17], $row[18], $row[19], $row[20], $row[21], $row[22], $row[23], $row[24], $row[25], $row[26], $row[27], $row[28], $row[29], $row[30], $row[31], $row[32], $row[33], $row[34], $row[35], $row[36], $row[37], $row[38], $row[39], $row[40], $row[41], $row[42], $row[43], $row[44], $row[45], $row[46], $row[47]);
                $stmt->execute();
                $stmt->close();
                echo "New data imported successfully!";
            } catch(Exception $e) {
                echo "Error: " . $e->getMessage(); 
            }
        }
    }
}
