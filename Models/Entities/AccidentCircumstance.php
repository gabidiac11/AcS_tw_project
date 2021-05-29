<?php

/**
 * Class AccidentCircumstance
 *
* @OA\Schema(schema="AccidentCircumstance", required={"name"})
*/
class AccidentCircumstance
{
    
    /**
     * @OA\Property(
     *     description="The feature of the accident site",
     *     title="amenity",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $amenity;
    
    /**
     * @OA\Property(
     *     description="The accident implies a crush",
     *     title="bump",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $bump;
    
    /**
     * @OA\Property(
     *     description="The accident implies a crossing",
     *     title="crossing",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $crossing;
    
    /**
     * @OA\Property(
     *     description="The accident implies a giveAway",
     *     title="giveAway",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $giveAway;
    
    /**
     * @OA\Property(
     *     description="The accident implies a junction",
     *     title="junction",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $junction;
    
    /**
     * @OA\Property(
     *     description="The accident implies a noExit",
     *     title="noExit",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $noExit;
    
    /**
     * @OA\Property(
     *     description="The accident implies a railWay",
     *     title="railWay",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $railWay;
    
    /**
     * @OA\Property(
     *     description="The accident implies a roundAbout",
     *     title="roundAbout",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $roundAbout;
    
    /**
     * @OA\Property(
     *     description="The accident implies a station",
     *     title="station",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $station;
    
    /**
     * @OA\Property(
     *     description="The accident implies a stop",
     *     title="stop",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $stop;
    
    /**
     * @OA\Property(
     *     description="The accident implies a trafficCalmin",
     *     title="trafficCalmin",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $trafficCalming;
    
    /**
     * @OA\Property(
     *     description="The accident implies a trafficSignal",
     *     title="trafficSignal",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $trafficSignal;
    
    /**
     * @OA\Property(
     *     description="The accident implies a trafficLoop",
     *     title="trafficLoop",
     *     format="boolean"
     * )
     * @var boolean
     */
    public $trafficLoop;

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
     * @param bool $trafficSignal
     * @param bool $trafficLoop
     */
    public function __construct(bool $amenity, bool $bump, bool $crossing, bool $giveAway, bool $junction, bool $noExit, bool $railWay, bool $roundAbout, bool $station, bool $stop, bool $trafficCalming, bool $trafficSignal, bool $trafficLoop)
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
        $this->trafficSignal = $trafficSignal;
        $this->trafficLoop = $trafficLoop;
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
            AccidentCircumstance::parseBool($array['Traffic_Calming']),
            AccidentCircumstance::parseBool($array['Traffic_Signal']),
            AccidentCircumstance::parseBool($array['Turning_Loop'])
        );
    }
}