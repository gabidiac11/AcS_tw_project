<?php

require_once __DIR__."./Entities/Accident.php";
require_once __DIR__."./Entities/Filter.php";

class ExportModel extends Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function exportCsv($listResults) {
        
        $keys = [
        "accident_id",
        "ID",
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
            $listItem = [];
            foreach($keys as $key) {
                $listItem[] = $obj[$key];
            }    
            
            $list[] = $listItem;
        }

    
        $filename = __DIR__."/".uniqid(time())."-file.csv";

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

            unlink($filename);
        }
    }

    /**
     * make sure params from client that gets concatenated in SQL are not injections
     * input must match a text like "{number},{number}"
     */
    public function idsInputOk($ids) {
        $output_array = [];

        // preg_match() returns 1 if the pattern matches given subject, 0 if it does not, or false if an error occurred.
        return $ids !== "," && preg_match('/[^,\d\s]/', $ids, $output_array) !== 1;
    }

    public function exportCSVResults() {
        if(isset($_GET['ids']) && $_GET['ids'] && 
            $this->idsInputOk($_GET['ids']) && //validation
            isset($_GET['limit']) && intval($_GET['limit'])
        ) {
             
            $this->exportCsv($this->db->select(
                "SELECT * FROM accidents where accident_id IN (".$_GET['ids'].") LIMIT ". intval($_GET['limit'])
            ));
        } else {
            $this->exportCsv([]);
        }
    }

    /**
     * use last search query from the search page to fetch the last search of results
     */
    public function exportCSVOfSession() {
        session_start();

        if(isset($_SESSION['last_search_query'])) {
            try {
                $this->exportCsv($this->db->select(
                    $_SESSION['last_search_query'] . " LIMIT 10000"
                ));
            } catch(Exception $e) {
                echo "Limit exceeded";
            }
            
        } else {
            $this->exportCsv([]);
        }
    }
}