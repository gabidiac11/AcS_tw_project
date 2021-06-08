
<?php

class Import extends Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        // $this->loadModel("DatabaseUtl")->phpCsvToDb();
    }

    public function csv() {
        //verify if an admin is logged, otherwise deny action 
        if($this->loadModel('MaintenanceQuery')->verifyStatus() == 1) {
            $this->loadModel("DatabaseUtl")->importFromCsvFile();
        } else {
            header($_SERVER["SERVER_PROTOCOL"]." 401 Unauthorized");
            die("");
        }
    }
}

$conn = mysqli_connect("localhost", "root", "", "csv");

if(isset($_POST["import"])){
    $fileName = $_FILES["file"]["tmp_name"];

    if($_FILES["file"]["size"] > 0){
        $file = fopen($fileName, "r");

        while(($row = fgetcsv($file, 1000, ",")) != FALSE){
            $sqlInsert = "Insert into data (ID, Severity, Start_Time, End_Time, Start_Lat, Start_Lng, End_Lat, End_Lng, Distance, Description, Number, Street, Side, City, County, State, Zipcode, Country, Timezone, Airport_Code, Weather_Timestamp, Temperature, Wind_Chill, Humidity, Pressure, Visibility, Wind_Direction, Wind_Speed, Precipitation, Weather_Condition, Amenity, Bump, Crossing, Give_Way, Junction, No_Exit, Railway, Roundabout, Station, Stop, Traffic_Calming, Traffic_Signal, Turning_Loop, Sunrise_Sunset, Civil_Twilight, Nautical_Twilight, Astronomical_Twilight)
            values ( $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $row[9], $row[10], $row[11], $row[12], $row[13], $row[14], $row[15], $row[16], $row[17], $row[18], $row[19], $row[20], $row[21], $row[22], $row[23], $row[24], $row[25], $row[26], $row[27], $row[28], $row[29], $row[30], $row[31], $row[32], $row[33], $row[34], $row[35], $row[36], $row[37], $row[38], $row[39], $row[40], $row[41], $row[42], $row[43], $row[44], $row[45], $row[46], $row[47])";

            $results = mysqli_query($conn, $sqlInsert);

            if(!empty($results)){
                echo "CSV Data Imported into the database";
            }else{
                echo "Problem in importing CSV";
            }
        }
    }
}

?>

<form method="post" enctype="multipart/form-data" name="uploadCsv">
    <div>
        <label for="file">Choose file to upload</label>
        <input type="file" id="file" name="file" accept=".csv">
    </div>
    <div>
        <button type="submit" name="import">Import</button>
    </div>
</form>