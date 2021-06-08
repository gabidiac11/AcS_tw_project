<?php

class MaintenanceQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyStatus() : int
    {
        $sql = "SELECT mode FROM maintenance WHERE id=1";
        $query = $this->db->select($sql);
        return $query[0]['mode'];
    }

    public function updateStatus($data)
    {
        if ($this->fieldsNotPresent($data, ['mode'])) {
            return ['success' => false];
        }
        $value = $data['mode'];
        $sql = "UPDATE maintenance SET mode='$value' WHERE id=1";
        $this->db->update($sql);
        return ['success' => true];
    }
    public function updateDescription($value)
    {
        $sql = "UPDATE maintenance SET description='$value' WHERE id=1";
        $this->db->update($sql);
    }
    public function getDescription()
    {
        $sql = "SELECT description FROM maintenance";
        return $this->db->select($sql);
    }
    public function getStatus()
    {
        $sql = "SELECT mode FROM maintenance";
        return $this->db->select($sql);
    }
}