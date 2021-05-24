<?php

require_once __DIR__."./Entities/Accident.php";
require_once __DIR__."./Entities/Filter.php";

class ExportModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function exportCsv($postData) {
        $listResults = $this->db->select("SELECT * FROM accidents LIMIT 20");

        $keys = [
        "ID",
        "Source",
        "TMC",
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
        "Astronomical_Twilight"];

        $list = [
            $keys
        ];

        foreach($listResults as $obj) {
            
            foreach($keys as $key) {

            }    
        }

    
        $filename = __DIR__."/exports/".uniqid(time())."-file.csv";

        $fp = fopen($filename, 'w');
        
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
        
        fclose($fp);

        //Check the file exists or not
        if(file_exists($filename)) {

            //Define header information
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header("Cache-Control: no-cache, must-revalidate");
            header("Expires: 0");
            header('Content-Disposition: attachment; filename="'.basename($filename).'"');
            header('Content-Length: ' . filesize($filename));
            header('Pragma: public');

            //Clear system output buffer
            flush();

            //Read the size of the file
            readfile($filename);
        }

       return $accidents;
    }
}