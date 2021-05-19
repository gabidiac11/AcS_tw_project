<?php

class AdminQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyUser($name, $password): array
    {
        $sql = "SELECT name FROM admin WHERE name=" + $name + " AND password=" + $password;
        return $this->db->select(sql);
    }

    public function updateToken($token, $name): array
    {
        $sql = "UPDATE admin SET token=" + $token + " WHERE name=" + $name;
        return $this->db->update(sql);
    }

    public function verifyToken($name, $token): array
    {
        $sql = "SELECT token FROM admin WHERE name=" + $name + " AND token=" + $token;
        return $this->db->select(sql);
    }
}
