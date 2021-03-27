<?php

class DatabaseUtl extends Model
{


    function __construct()
    {
        parent::__construct();
    }

    /**
     * inserts from csv
     */
    public function phpCsvToDb()
    {
        $row = 1;
        if (($csvFile = fopen(__DIR__. "/../US_Accidents_Dec20.csv", "r")) !== FALSE) {
            while (($result = fgetcsv($csvFile, 1000, ",")) !== FALSE) {
                $count = count($result);
                echo "<div> $count columns for row $row: <br/> </div>";
                
                /* skip first line where column names are */
                if($row == 1) {
                    $row++;
                    continue;
                       
                }

                $row++;

                $query = "INSERT INTO test2 VALUES(";
                for ($indexColumn = 0; $indexColumn < $count; $indexColumn++) {
                    echo $result[$indexColumn] . "<br />";

                    $value = $result[$indexColumn];
                    $query .= "'$value'";

                    if($indexColumn < $count - 1) {
                        $query .= ",";
                    }
                }

                $query .= ")";
                echo $query . "<br/>";

                $this->db->insert($query);
            }
            
            echo "<br/> ....................................... <br/>";

            fclose($csvFile);
        }
    }
}
