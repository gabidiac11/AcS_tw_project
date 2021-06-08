<?php

class AdminQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyAccount($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'password'])) {
            return ['success' => false, 'message' => 'Ups! You have a missing fields.'];
        }
        $name = $data['user'];
        $password = $data['password'];
        $query = $this->db->select("SELECT name FROM admin WHERE name='$name' AND password='$password'");

        if ($query != NULL) {
            return ['success' => true];
        }

        return ['success' => false];

    }

    public function verifySession($name, $token): bool
    {
        $sql = 'SELECT token from session s LEFT JOIN admin a ON s.name=a.name WHERE s.name=' + $name + ' AND s.password=a.password AND s.token=' + $token;
        if ($sql[0]['token'] !== '') {
            return true;
        } else {
            return false;
        }
    }

    public function getAccidents(): array
    {
        return Accident::resultsToInstances($this->db->select("SELECT * FROM accidents LIMIT 10"));
    }
}
