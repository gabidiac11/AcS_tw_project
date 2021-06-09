<?php

class DatabaseQuery extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function addNewRow($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'token', 'ids', 'severity', 'timestart', 'timeend', 'latstart', 'latend', 'longstart',
            'longend', 'distance', 'description', 'street', 'number', 'city', 'state', 'zipcode', 'temperature', 'windchill',
            'humidity', 'pressure', 'visibility', 'winddirection', 'precipitation', 'generalcondition'])) {
            return ['success' => false];
        }
        $token = $data['token'];
        $user = $data['user'];
        $result = $this->verifySession($user, $token)['success'];
        if ($result === true) {
            $ids = $data['ids'];
            $severity = $data['severity'];
            $timestart = $data['timestart'];
            $timeend = $data['timeend'];
            $latstart = $data['latstart'];
            $latend = $data['latend'];
            $longstart = $data['longstart'];
            $longend = $data['longend'];
            $distance = $data['distance'];
            $description = $data['description'];
            $street = $data['street'];
            $number = $data['number'];
            $city = $data['city'];
            $state = $data['state'];
            $zipcode = $data['zipcode'];
            $temperature = $data['temperature'];
            $windchill = $data['windchill'];
            $humidity = $data['humidity'];
            $pressure = $data['pressure'];
            $visibility = $data['visibility'];
            $winddirection = $data['winddirection'];
            $precipitation = $data['precipitation'];
            $generalcondition = $data['generalcondition'];
            $amenity = boolval($data['amenity']) ? 'True' : 'False';
            $bump = boolval($data['bump']) ? 'True' : 'False';
            $crossing = boolval($data['crossing']) ? 'True' : 'False';
            $giveaway = boolval($data['giveaway']) ? 'True' : 'False';
            $junction = boolval($data['junction']) ? 'True' : 'False';
            $noexit = boolval($data['noexit']) ? 'True' : 'False';
            $railway = boolval($data['railway']) ? 'True' : 'False';
            $roundabout = boolval($data['roundabout']) ? 'True' : 'False';
            $station = boolval($data['station']) ? 'True' : 'False';
            $stop = boolval($data['stop']) ? 'True' : 'False';
            $trafficcalming = boolval($data['trafficcalming']) ? 'True' : 'False';
            $trafficsignal = boolval($data['trafficsignal']) ? 'True' : 'False';
            $trafficloop = boolval($data['trafficloop']) ? 'True' : 'False';

            $this->db->insert("INSERT INTO accidents(ID, Severity, Start_Time, End_Time, Start_Lat, Start_Lng, End_Lat, End_Lng, Distance, Description, Number, Street, City,
                      State, Zipcode, Temperature, Wind_Chill, Humidity, Pressure, Visibility, Wind_Direction, Precipitation, Weather_Condition,Amenity, Bump, Crossing, Give_Way, Junction,
                      No_Exit, Railway, Roundabout, Station, Stop,Traffic_Calming, Traffic_Signal, Turning_Loop) 
            VALUES ('$ids', '$severity', '$timestart', '$timeend', '$latstart', '$longstart', '$latend', '$longend',', $distance',
                   '$description', '$number', '$street', '$city', '$state', '$zipcode', '$temperature', '$windchill', '$humidity', '$pressure', '$visibility',
                    '$winddirection', '$precipitation', '$generalcondition', '$amenity', '$bump', '$crossing', '$giveaway', '$junction', '$noexit', '$railway', '$roundabout', '$station', '$stop', '$trafficcalming', '$trafficsignal', '$trafficloop')");
            return ['success' => false];
        } else {
            return ['success' => false];
        }
    }

    public function removeID($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'token', 'id'])) {
            return ['success' => false];
        }
        $token = $data['token'];
        $user = $data['user'];
        $id = $data['id'];
        $result = $this->verifySession($user, $token)['success'];
        if ($result === true) {
            $newres = $this->db->select("SELECT ID FROM accidents WHERE accident_id='$id'");
            if (!empty ($newres)) {
                $this->db->remove("DELETE FROM accidents WHERE accident_id='$id'");
                return ['success' => true];
            } else {
                return ['success' => false];
            }
        }
        return ['success' => false];


    }
    public function removeRangeID($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'token', 'id1', 'id2'])) {
            return ['success' => false];
        }
        $token = $data['token'];
        $user = $data['user'];
        $id1 = $data['id1'];
        $id2 = $data['id2'];
        $result = $this->verifySession($user, $token)['success'];
        if ($result === true) {
            $newres = $this->db->select("SELECT ID FROM accidents WHERE accident_id BETWEEN '$id1' AND '$id2'");
            if (!empty ($newres)) {
                $this->db->remove("DELETE FROM accidents WHERE accident_id BETWEEN '$id1' AND '$id2'");
                return ['success' => true];
            } else {
                return ['success' => false];
            }
        }
        return ['success' => false];


    }

    public function getAccidents(): array
    {
        return Accident::resultsToInstances($this->db->select("SELECT * FROM accidents LIMIT 10"));
    }

    public function verifySession($name, $token)
    {
        $sql = $this->db->select("SELECT token from session s LEFT JOIN admin a ON s.name=a.name WHERE s.name='$name' AND s.password=a.password AND s.token='$token'");
        if ($sql != NULL) {
            return ['success' => true];
        }

        return ['success' => false];
    }
}