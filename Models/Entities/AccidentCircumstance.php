<?php
class AccidentCircumstance
{
    /**
     * @var boolean
     */
    public $amenity;
    /**
     * @var boolean
     */
    public $bump;
    /**
     * @var boolean
     */
    public $crossing;
    /**
     * @var boolean
     */
    public $giveAway;
    /**
     * @var boolean
     */
    public $junction;
    /**
     * @var boolean
     */
    public $noExit;
    /**
     * @var boolean
     */
    public $railWay;
    /**
     * @var boolean
     */
    public $roundAbout;
    /**
     * @var boolean
     */
    public $station;
    /**
     * @var boolean
     */
    public $stop;
    /**
     * @var boolean
     */
    public $trafficCalming;

    /**
     * AccidentCircumstance constructor.
     * @param bool $amenity
     * @param bool $bump
     * @param bool $crossing
     * @param bool $giveAway
     * @param bool $junction
     * @param bool $noExit
     * @param bool $railWay
     * @param bool $roundAbout
     * @param bool $station
     * @param bool $stop
     * @param bool $trafficCalming
     */
    public function __construct(bool $amenity, bool $bump, bool $crossing, bool $giveAway, bool $junction, bool $noExit, bool $railWay, bool $roundAbout, bool $station, bool $stop, bool $trafficCalming)
    {
        $this->amenity = $amenity;
        $this->bump = $bump;
        $this->crossing = $crossing;
        $this->giveAway = $giveAway;
        $this->junction = $junction;
        $this->noExit = $noExit;
        $this->railWay = $railWay;
        $this->roundAbout = $roundAbout;
        $this->station = $station;
        $this->stop = $stop;
        $this->trafficCalming = $trafficCalming;
    }

    private static function parseBool($value): bool
    {
        return is_string($value) && strtolower($value) === "true";
    }

    public static function instanceFromAssocArray($array): AccidentCircumstance
    {
        return new AccidentCircumstance(
            AccidentCircumstance::parseBool($array['Amenity']),
            AccidentCircumstance::parseBool($array['Bump']),
            AccidentCircumstance::parseBool($array['Crossing']),
            AccidentCircumstance::parseBool($array['Give_Way']),
            AccidentCircumstance::parseBool($array['Junction']),
            AccidentCircumstance::parseBool($array['No_Exit']),
            AccidentCircumstance::parseBool($array['Railway']),
            AccidentCircumstance::parseBool($array['Roundabout']),
            AccidentCircumstance::parseBool($array['Station']),
            AccidentCircumstance::parseBool($array['Stop']),
            AccidentCircumstance::parseBool($array['Traffic_Calming'])
        );
    }
}