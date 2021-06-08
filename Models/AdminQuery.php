<?php

class AdminQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyAccount($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'password', 'token'])) {
            return ['success' => false, 'message' => 'Ups! You have a missing fields.'];
        }
        $name = $data['user'];
        $password = $data['password'];
        $token = $data['token'];
        $query = $this->db->select("SELECT name FROM admin WHERE name='$name' AND password='$password'");

        if ($query != NULL) {
                $this -> addTokenInside($data);
            return ['success' => true];
        }

        return ['success' => false];

    }

    public function verifySession($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'token'])) {
            return ['success' => false];
        }
        $name = $data['user'];
        $token = $data['token'];
        $sql = $this->db->select("SELECT token from session s LEFT JOIN admin a ON s.name=a.name WHERE s.name='$name' AND s.password=a.password AND s.token='$token'");
        if ($sql != NULL) {
            return ['success' => true];
        }

        return ['success' => false];
    }

    function addTokenInside($data){
        $name = $data['user'];
        $password = $data['password'];
        $token = $data['token'];
        $this->db->insert("INSERT INTO session (name, token, password) VALUES ('$name', '$token', '$password')");
    }

    public function getAccidents(): array
    {
        return Accident::resultsToInstances($this->db->select("SELECT * FROM accidents LIMIT 10"));
    }
}
