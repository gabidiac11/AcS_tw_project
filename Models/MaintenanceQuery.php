<?php

class MaintenanceQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyStatus(): int
    {
        $sql = "SELECT mode FROM maintenance WHERE id=1";
        $query = $this->db->select($sql);
        return $query[0]['mode'];
    }

    public function updateStatus($value)
    {
        $sql = "UPDATE maintenance SET mode=" + $value + " WHERE id=1";
        $this->db->update($sql);
    }
}