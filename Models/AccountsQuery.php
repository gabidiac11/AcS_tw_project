<?php

class AccountsQuery extends Model
{
    public function __construct()
    {
        parent::__construct();
    }


    public function verifySession($name, $token)
    {
        $sql = $this->db->select("SELECT token from session s LEFT JOIN admin a ON s.name=a.name WHERE s.name='$name' AND s.password=a.password AND s.token='$token'");
        if ($sql != NULL) {
            return ['success' => true];
        }

        return ['success' => false];
    }

    function addAccount($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'token', 'name', 'pass'])) {
            return ['success' => false];
        }
            $token = $data['token'];
            $user = $data['user'];
            $name = $data['name'];
            $password = $data['pass'];
            $result = $this->verifySession($user, $token)['success'];
            if ($result === true) {
                $this->db->insert("INSERT INTO admin (name, password) VALUES ('$name', '$password')");
                return ['success' => true];
            } else {
                return ['success' => false];
            }
    }

    function editAccount($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'token', 'name', 'pass'])) {
            return ['success' => false];
            $token = $data['token'];
            $user = $data['user'];
            $name = $data['name'];
            $password = $data['pass'];
            $result = $this->verifySession($user, $token)['success'];
            if ($result === true) {
                $sql = $this->db->select("SELECT name FROM admin WHERE name='$name'");
                if (!empty ($newres)) {
                    $sql = "UPDATE admin SET password='$value' WHERE name='$name'";
                    return ['success' => true];
                } else {
                    return ['success' => false];
                }
            } else {
                return ['success' => false];
            }
        }
    }

    function getAllAccounts($data): array
    {
        if ($this->fieldsNotPresent($data, ['user', 'token'])) {
            return ['success' => false];
        }
        $token = $data['token'];
        $user = $data['user'];
        $result = $this->verifySession($user, $token)['success'];
        if ($result === true) {
            $sql = $this->db->select("SELECT name FROM admin");
            return ['acc' => $sql];
        } else {
            return ['success' => false];
        }
    }

    function removeAccount($data)
    {
        if ($this->fieldsNotPresent($data, ['user', 'token', 'name'])) {
            return ['success' => false];
        }
        $token = $data['token'];
        $user = $data['user'];
        $name = $data['name'];
        $result = $this->verifySession($user, $token)['success'];
        if ($result === true) {
            $sql = $this->db->select("SELECT name FROM admin WHERE name='$name'");
            if (!empty ($sql)) {
                $this->db->remove("DELETE FROM admin WHERE name='$name'");
                return ['success' => true,];
            }
            return ['success' => false,];
        } else {
            return ['success' => false];
        }
    }
}
