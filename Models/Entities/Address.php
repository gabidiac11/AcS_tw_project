<?php

/**
 * Class Address
 *
 * @OA\Schema(schema="Address", required={"name"})
 */
class Address
{
    /**
     * @OA\Property(
     *     description="Street name",
     *     title="Street name",
     *     format="int32"
     * )
     * @var string
     */
    public $street;

    /**
     * @OA\Property(
     *     description="Street name",
     *     title="Street name",
     *     format="int32"
     * )
     * @var string
     */
    public $number;

    /**
     * @OA\Property(
     *     description="city",
     *     title="city"
     * )
     * @var string
     */
    public $city;

    /**
     * @OA\Property(
     *     description="state",
     *     title="state"
     * )
     * @var string
     */
    public $state;

    /**
     * @OA\Property(
     *     description="zip code",
     *     title="zip code"
     * )
     * @var string
     */
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

    public static function instanceFromAssocArray($array)
    {
        return new Address(
            $array['Street'],
            $array['Number'],
            $array['City'],
            $array['State'],
            $array['Zipcode']
        );
    }
}
