<?php

class MaintenanceUtil extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verifyStatus(): array
    {
        $sql = "SELECT mode FROM maintenance WHERE id=1";
        return $this->db->select(sql);
    }

    public function updateStatus($value): array
    {
        $sql = "UPDATE maintenance SET mode=" + $value + " WHERE id=1";
        $this->db->update(sql);
    }

}
