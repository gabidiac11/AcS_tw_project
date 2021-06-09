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
        if ($this->fieldsNotPresent($data, ['token','user','mode'])) {
            return ['success' => false];
        }
        $value = $data['mode'];
        $token = $data['token'];
        $user = $data['user'];
        $result = $this->verifySession($user, $token)['success'];
        if($result === true) {
            $sql = "UPDATE maintenance SET mode='$value' WHERE id=1";
            $this->db->update($sql);
            return ['success' => true];
        }else{
            return ['success' => false];
        }
    }
    public function updateDescription($data)
    {
        if ($this->fieldsNotPresent($data, ['token','user','description'])) {
            return ['success' => false];
        }
        $value = $data['description'];
        $token = $data['token'];
        $user = $data['user'];
        $result = $this->verifySession($user, $token)['success'];
        if($result === true) {
            $sql = "UPDATE maintenance SET description='$value' WHERE id=1";
            $this->db->update($sql);
            return ['success' => true];
        }else{
            return ['success' => false];
        }
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
    public function verifySession($name, $token)
    {
        $sql = $this->db->select("SELECT token from session s LEFT JOIN admin a ON s.name=a.name WHERE s.name='$name' AND s.password=a.password AND s.token='$token'");
        if ($sql != NULL) {
            return ['success' => true];
        }

        return ['success' => false];
    }
}