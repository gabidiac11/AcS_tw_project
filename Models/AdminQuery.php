<?php

class AdminQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyUser($name, $password): boolean
    {
        $sql = "SELECT name FROM admin WHERE name=" + $name + " AND password=" + $password;
        $query = $this->db->select($sql);
        if ($query[0]['name'] !== '') {
            return true;
        } else {
            return false;
        }
    }

    public function updateToken($token, $name): array
    {
        $sql = "UPDATE admin SET token=" + $token + " WHERE name=" + $name;
        return $this->db->update($sql);
    }

    public function verifyToken($name, $token): array
    {
        $sql = "SELECT token FROM admin WHERE name=" + $name + " AND token=" + $token;
        return $this->db->select($sql);
    }
}
