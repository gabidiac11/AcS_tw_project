<?php

class AdminQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyAccount($name, $password): bool
    {
        $sql = "SELECT name FROM admin WHERE name=" + $name + " AND password=" + $password;
        $query = $this->db->select($sql);
        if ($query[0]['name'] !== '') {
            return true;
        } else {
            return false;
        }
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
}
