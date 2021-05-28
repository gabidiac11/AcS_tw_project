<?php

class Admin
{
    public $name;
    public $password;
    public $token;

    /**
     * Admin constructor.
     * @param $name
     * @param $password
     * @param $token
     */
    public function __construct($name, $password, $token)
    {
        $this->name = $name;
        $this->password = $password;
        $this->token = $token;
    }

    public static function instanceFromAssocArray($array) {
        return new Admin(
            $array['Name'],
            $array['Password']
        );
    }
}