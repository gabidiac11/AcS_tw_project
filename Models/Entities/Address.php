<?php

class Address
{
    public $street;
    public $number;
    public $city;
    public $state;
    public $zipCode;

    /**
     * Address constructor.
     * @param $street
     * @param $number
     * @param $city
     * @param $state
     * @param $zipCode
     */
    public function __construct($street, $number, $city, $state, $zipCode)
    {
        $this->street = $street;
        $this->number = $number;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
    }

    public static function instanceFromAssocArray($array) {
        return new Address(
            $array['Street'],
            $array['Number'],
            $array['City'],
            $array['State'],
            $array['Zipcode']
        );
    }
}