<?php

require_once __DIR__ . "/Filter.php";
require_once __DIR__ . "/FilterOptionRange.php";
require_once __DIR__ . "/FilterOptionNumeric.php";
require_once __DIR__ . "/FilterOptionBoolean.php";
require_once __DIR__ . "/FilterOptionBooleanColumn.php";

/**
 * Class Filter
 *
 * @OA\Schema(schema="Filter")
 */
class Filter
{
    const SOME_INDICATOR_HTML = "<abbr title=\"The results that satisfy at least ONE of the items checked will be displayed.\"> (*some) </abbr>";
    const EVERY_INDICATOR_HTML = "<abbr title=\"The results that satisfy ALL of the items checked will be displayed.\"> (*every) </abbr>";

    public static $filterSeverity = "SEVERITY";
    public static $filterTime = "TIME";
    public static $filterLocation = "LOCATION";
    public static $filterDistance = "DISTANCE";
    public static $filterState = "STATE";
    public static $filterTemperature = "TEMPERATURE";
    public static $filterWindChill = "WIND_CHILL";
    public static $filterHumidity = "HUMIDITY";
    public static $filterPressure = "PRESSURE";
    public static $filterVisibility = "VISIBILITY";
    public static $filterWindDirection = "WIND_DIRECTION";
    public static $filterWindSpeed = "WIND_SPEED";

    public static $filterPrecipitation = "PRECIPITATION";
    public static $filterWeatherCondition = "WEATHER_CONDITION";
    public static $filterCircumstance = "CIRCUMSTANCE";
    public static $filterAstrologicalTwilight = "ASTRO-TWILIGHT"; // day/night

    private static $defaultFilters = null;
    /**
     * a would be array
     */
    private static $bindColumn = null;

    private static $locationRay = 15;

    /** get the column to fetch values from (use: to make a list of unique values to be checked for a filter to work) */
    private static function getBindToColumn(): array
    {
        if (!Filter::$bindColumn) {
            Filter::$bindColumn = [
                Filter::$filterState => ['column' => 'State'],
                Filter::$filterWindDirection => ['column' => 'Wind_Direction'],
                Filter::$filterWeatherCondition => ['column' => 'Weather_Condition'],
                Filter::$filterAstrologicalTwilight => ['column' => 'Astronomical_Twilight']
            ];
        }

        return Filter::$bindColumn;
    }

    /**
     * method for creating a filter instances, using prepared data
     * some of the filters are further processed from their initial state (may need data from database) other are ready
     */
    private static function getDefaultOptions(): array
    {
        if (Filter::$defaultFilters == null) {
            Filter::$defaultFilters = [
                Filter::$filterState => [
                    "filterKey" => Filter::$filterState,
                    "title" => "States",
                    "selectionType" => "checkbox-button-list",
                    "bind" => "State",
                    "availableOptions" => []
                ],

                Filter::$filterLocation => [
                    "filterKey" => Filter::$filterLocation,
                    "title" => "Location (Within " . self::$locationRay . " ray)",
                    "selectionType" => "location",
                    "bind" => "",
                    "availableOptions" => [
                        new FilterOption("Lat", "", Filter::$filterTime),
                        new FilterOption("Long", "", Filter::$filterTime)
                    ]
                ],

                Filter::$filterSeverity => [
                    "filterKey" => Filter::$filterSeverity,
                    "title" => "Within Severity ".self::SOME_INDICATOR_HTML,
                    "selectionType" => "checkbox-list",
                    "bind" => "Severity",
                    "availableOptions" => [
                        new FilterOptionBoolean("1", false, Filter::$filterTime),
                        new FilterOptionBoolean("2", false, Filter::$filterTime),
                        new FilterOptionBoolean("3", false, Filter::$filterTime),
                        new FilterOptionBoolean("4", false, Filter::$filterTime)
                    ]
                ],

                Filter::$filterTime => [
                    "filterKey" => Filter::$filterTime,
                    "title" => "Period",
                    "selectionType" => "date_range",
                    "bind" => "Start_Time",
                    "availableOptions" => [
                        new FilterOption("Start", "", Filter::$filterTime),
                        new FilterOption("End", "", Filter::$filterTime)
                    ]
                ],

                Filter::$filterDistance => [
                    "filterKey" => Filter::$filterDistance,
                    "title" => "Distance (mi)",
                    "selectionType" => "numeric_range",
                    "bind" => "Distance",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterDistance, 0, 1000, ">="),
                        new FilterOptionRange("Max", Filter::$filterDistance, 0, 1000, "<=")
                    ]
                ],

                Filter::$filterTemperature => [
                    "filterKey" => Filter::$filterTemperature,
                    "title" => "Temperature (F)",
                    "selectionType" => "numeric_range",
                    "bind" => "Temperature",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterTemperature, -80, 80, ">="),
                        new FilterOptionRange("Max", Filter::$filterTemperature, -80, 80, "<=")
                    ]
                ],

                Filter::$filterWindChill => [
                    "filterKey" => Filter::$filterWindChill,
                    "title" => "Wind Chill (F)",
                    "selectionType" => "numeric_range",
                    "bind" => "Wind_Chill",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterWindChill, 0, 100, ">="),
                        new FilterOptionRange("Max", Filter::$filterWindChill, 0, 100, "<=")
                    ]
                ],

                Filter::$filterHumidity => [
                    "filterKey" => Filter::$filterHumidity,
                    "title" => "Humidity (%)",
                    "selectionType" => "numeric_range",
                    "bind" => "Humidity",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterHumidity, 0, 100, ">="),
                        new FilterOptionRange("Max", Filter::$filterHumidity, 0, 100, "<=")
                    ]
                ],

                Filter::$filterPressure => [
                    "filterKey" => Filter::$filterPressure,
                    "title" => "Pressure(in)",
                    "selectionType" => "numeric_range",
                    "bind" => "Pressure",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterPressure, 0, 1000, ">="),
                        new FilterOptionRange("Max", Filter::$filterPressure, 0, 1000, "<=")
                    ]
                ],

                Filter::$filterVisibility => [
                    "filterKey" => Filter::$filterVisibility,
                    "title" => "Visibility(mi)",
                    "selectionType" => "numeric_range",
                    "bind" => "Visibility",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterVisibility, 0, 1000, ">="),
                        new FilterOptionRange("Max", Filter::$filterVisibility, 0, 1000, "<=")
                    ]
                ],

                Filter::$filterWindSpeed => [
                    "filterKey" => Filter::$filterWindSpeed,
                    "title" => "Wind speed(mph)",
                    "selectionType" => "numeric_range",
                    "bind" => "Wind_Speed",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterWindSpeed, 0, 30, ">="),
                        new FilterOptionRange("Max", Filter::$filterWindSpeed, 0, 30, "<=")
                    ]
                ],

                Filter::$filterPrecipitation => [
                    "filterKey" => Filter::$filterPrecipitation,
                    "title" => "Precipitation(in)",
                    "selectionType" => "numeric_range",
                    "bind" => "Precipitation",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterPrecipitation, 0, 1000, ">="),
                        new FilterOptionRange("Max", Filter::$filterPrecipitation, 0, 1000, "<=")
                    ]
                ],

                Filter::$filterWindDirection => [
                    "filterKey" => Filter::$filterWindDirection,
                    "title" => "Wind Direction ".self::SOME_INDICATOR_HTML,
                    "selectionType" => "checkbox-list",
                    "bind" => "Weather_Condition",
                    "availableOptions" => []
                ],



                Filter::$filterWeatherCondition => [
                    "filterKey" => Filter::$filterWeatherCondition,
                    "title" => "Weather Condition ".self::SOME_INDICATOR_HTML,
                    "selectionType" => "checkbox-list",
                    "bind" => "Weather_Condition",
                    "availableOptions" => []
                ],

                Filter::$filterCircumstance => [
                    "filterKey" => Filter::$filterCircumstance,
                    "title" => "Circumstance ".self::EVERY_INDICATOR_HTML,
                    "selectionType" => "checkbox-list",
                    "bind" => "",
                    "availableOptions" => array_map(function ($item) {
                        $filterOption = new FilterOptionBooleanColumn($item['label'], false, Filter::$filterCircumstance);
                        $filterOption->setBind($item['column']);
                        return $filterOption;
                    }, [
                        ['column' => 'Amenity', 'label' => 'Amenity'],
                        ['column' => 'Bump', 'label' => 'Bump'],
                        ['column' => 'Crossing', 'label' => 'Crossing'],
                        ['column' => 'Give_Way', 'label' => 'Give Way'],
                        ['column' => 'Junction', 'label' => 'Junction'],
                        ['column' => 'No_Exit', 'label' => 'No Exit'],
                        ['column' => 'Railway', 'label' => 'Railway'],
                        ['column' => 'Roundabout', 'label' => 'Roundabout'],
                        ['column' => 'Station', 'label' => 'Station'],
                        ['column' => 'Stop', 'label' => 'Stop'],
                        ['column' => 'Traffic_Calming', 'label' => 'Traffic Calming'],
                        ['column' => 'Traffic_Signal', 'label' => 'Traffic Signal'],
                        ['column' => 'Turning_Loop', 'label' => 'Turning Loop']
                    ])
                ],

                Filter::$filterAstrologicalTwilight => [
                    "filterKey" => Filter::$filterAstrologicalTwilight,
                    "title" => "Astrological twilight ".self::SOME_INDICATOR_HTML,
                    "selectionType" => "checkbox-list",
                    "bind" => "Astronomical_Twilight",
                    "availableOptions" => []
                ]
            ];
        }
        return Filter::$defaultFilters;
    }

    /**
     * @OA\Property(
     *     description="filterKey",
     *     title="filterKey",
     *     enum={"STATE", "LOCATION", "SEVERITY", "TIME", "DISTANCE", "TEMPERATURE", "WIND_CHILL", "HUMIDITY", "PRESSURE", "VISIBILITY", "WIND_SPEED", "PRECIPITATION", "WIND_DIRECTION", "WEATHER_CONDITION", "CIRCUMSTANCE", "ASTRO-TWILIGHT"}
     * )
     * @var string
     */
    public $filterKey;

    /**
     * @OA\Property(
     *     description="title",
     *     title="title"
     * )
     * @var string
     */
    public $title;

    /**
     * @OA\Property(
     *     description="Available options to get selected",
     *     title="availableOptions",
     *     type="array", 
     *     @OA\Items(ref="#/components/schemas/FilterOption")
     * )
     * @var FilterOption[]
     */
    public $availableOptions;

    /**
     * @var string
     */
    protected $bind;

    /**
     * @OA\Property(
     *     default="checkbox-list",
     *     title="Selection Type",
     *     description="Manner of how filters are to be selected",
     *     enum={"date_range", "checkbox-list", "checkbox-button-list"}
     * )
     * @var string
     */
    public $selectionType;

    /**
     * Filter constructor.
     * @param array $data
     */
    private function __construct(array $data)
    {
        $this->filterKey = $data['filterKey'];
        $this->title = $data['title'];
        $this->selectionType = $data['selectionType'];
        $this->bind = $data['bind'];
        $this->availableOptions = $this->setupAvailableOptions($data['availableOptions']);
    }

    /**
     * @param $defaultOptions
     * @return array
     */
    private function setupAvailableOptions($defaultOptions): array
    {
        /** attach the private member referring to the column targeted by the filter (if there is one or some filter may be related to multiple columns - in that case the bind is set prior in the options) */
        if($this->bind) {
            foreach ($defaultOptions as $option) {
                $option->setBind($this->bind);
            }
        }

        return $defaultOptions;
    }


    /**
     * for certain filters a select of data may necessary (checkboxes, states) 
     * @var Database
     */
    private function updateFilterWithDbData(Database $db)
    {
        /** @returns - general checkbox filter: the filter itself is bind to a column; a checkbox is a unique value of the column  */
        $bindToColumn = Filter::getBindToColumn();
        if (isset($bindToColumn[$this->filterKey])) {
            $data = $bindToColumn[$this->filterKey];
            $column = $data['column'];

            $this->availableOptions = array_values(array_filter(
                array_map(function ($item) use ($column) {
                    $filterOption = new FilterOptionBoolean($item['label'], false, $this->filterKey);
                    $filterOption->setBind($column);
                    return $filterOption;
                }, $db->select("SELECT DISTINCT($column) as label from accidents")),

                function ($filterOption) {
                    return $filterOption->label != "";
                }
            ));
        }
    }

    /**
     * match and update Server generated filters with the client data
     *  
     * @param $jsonFilters - filter values from the client
     */
    public function searchAndApplyJson($jsonFilters, $db)
    {
        $match = array_values(array_filter($jsonFilters, function ($item) {
            return $item['filterKey'] === $this->filterKey;
        }));

        if (count($match) < 1) {
            return;
        }

        $match = $match[0];

        /**
         * for filters of which the field available options is a list of VALUES of the column the filter is bind to
         * update the filter with available option sent by the client - these will be used to filter the values of the column
         * this approach makes sure the client doesn't know which column is about, doesn't know how database is constructed, and no interrogation of available values is needed
         */
        $bindToColumn = Filter::getBindToColumn();
        if (isset($bindToColumn[$this->filterKey])) {
            $data = $bindToColumn[$this->filterKey];
            $column = $data['column'];

            $this->availableOptions = array_values(array_filter(
                array_map(function ($optionJson) use ($column) {
                    $filterOption = new FilterOptionBoolean(
                        $optionJson['label'],
                        
                        //prevent injection
                        boolval($optionJson['value']),
                        $this->filterKey
                    );
                    $filterOption->setBind($column);
                    return $filterOption;
                }, $match['availableOptions']),

                function ($filterOption) {
                    return $filterOption->label != "";
                }
            ));
        } else {
            /** 
             * match each available options with the default ones using the key
             * update ONLY the value sent by client
             */
            foreach ($this->availableOptions as $option) {
                foreach ($match['availableOptions'] as $optionJson) {
                    if ($optionJson['key'] === $option->key) {
                        $option->setValue(
                            //avoid injection   
                            $db->escape($optionJson['value'])
                        );
                        break;
                    }
                }
            }
        }
    }

    /**
     * @return string - a condition for a query or an empty string
     */
    public function queryBuild(): string
    {
        $string = "";
        if (in_array($this->selectionType, ["date_range"])) {
            if ($this->availableOptions[0]->value != "") {
                $string .= $this->bind . " >= '" . $this->availableOptions[0]->value . "' ";
            }

            if ($this->availableOptions[1]->value != "") {
                if ($string != "") {
                    $string .= " AND ";
                }

                $string .= $this->bind . " <= '" . $this->availableOptions[1]->value . "' ";
            }
        } else if (in_array($this->selectionType, ["checkbox-list", "star", "checkbox-button-list"])) {
            foreach ($this->availableOptions as $option) {
                $query = $option->queryBuild();
                if ($query) {
                    if ($string != "") {
                        if (in_array($this->filterKey, [Filter::$filterCircumstance])) {
                            /** each circumstance is bind to a column so AND is appropriate */
                            $string .= " AND ";
                        } else {
                            $string .= " OR ";
                        }
                    }
                    $string .= "$query ";
                }
            }
        } else if ($this->selectionType === "location") {
            $latQ = "";
            $lonQ = "";

            $lat = $this->availableOptions[0]->value;
            $long = $this->availableOptions[1]->value;

            $locationRay = self::$locationRay;
            if ($lat !== "") {
                $latMin = floatval($lat) - $locationRay;
                $latMax = floatval($lat) + $locationRay;
                $latQ = "Start_Lat >= $latMin AND Start_Lat <= $latMax";
            }

            if ($long !== "") {
                $longMin = floatval($long) - $locationRay;
                $longMax = floatval($long) + $locationRay;
                $lonQ = "Start_Lng >= $longMin AND Start_Lng <= $longMax";
            }

            if ($latQ !== "" && $lonQ !== "") {
                $string = "$latQ AND $lonQ";
            } else if ($latQ !== "" || $lonQ !== "") {
                $string = $latQ !== "" ? $latQ : $lonQ;
            }
        } else if ($this->selectionType === "numeric_range") {
            $stringMin = $this->availableOptions[0]->queryBuild();
            $stringMax = $this->availableOptions[1]->queryBuild();


            if ($stringMin !== "" && $stringMax !== "") {
                $string = "$stringMin AND $stringMax";
            } else if ($stringMin !== "" || $stringMax !== "") {
                $string = $stringMin !== "" ? $stringMin : $stringMax;
            }
        }

        return $string;
    }

    /**
     * @param Database $db
     * @return Filter[]
     */
    public static function createFilters(Database  $db): array
    {
        $defaultOptions = Filter::getDefaultOptions();
        $filters = [];
        foreach ($defaultOptions as $optionDefault) {
            $filter = new Filter($optionDefault);
            $filters[] = $filter;

            $filter->updateFilterWithDbData($db);
        }

        return $filters;
    }

    /**
     * doesn't do any interrogation for available values 
     * @return Filter[]
     */
    public static function createFiltersNoFetch(): array
    {

        $defaultOptions = Filter::getDefaultOptions();
        $filters = [];
        foreach ($defaultOptions as $optionDefault) {
            $filter = new Filter($optionDefault);
            $filters[] = $filter;
        }

        return $filters;
    }
}
