<?php

require_once __DIR__."/Filter.php";
require_once __DIR__."/FilterOptionRange.php";
require_once __DIR__ . "/FilterOptionNumeric.php";
require_once __DIR__."/FilterOptionBoolean.php";
require_once __DIR__."/FilterOptionBooleanColumn.php";

class Filter
{
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
    private static $bindColumn = null;
    private static $db = null;

    private static function getBindToColumn() : array {
        if(!Filter::$bindColumn) {
            Filter::$bindColumn = [
                Filter::$filterState => ['column' =>'State'],
                Filter::$filterWindDirection => ['column' => 'Wind_Direction'],
                Filter::$filterWeatherCondition => ['column' => 'Weather_Condition'],
                Filter::$filterAstrologicalTwilight => ['column' => 'Astronomical_Twilight']
            ];
        }

        return Filter::$bindColumn;
    }

    private static function getFilterKeys():array {
        return [
            Filter::$filterSeverity,
            Filter::$filterTime,
            Filter::$filterLocation,
            Filter::$filterDistance,
            Filter::$filterState,
            Filter::$filterTemperature,
            Filter::$filterWindChill,
            Filter::$filterHumidity,
            Filter::$filterPressure,
            Filter::$filterVisibility,
            Filter::$filterWindDirection,
            Filter::$filterWindSpeed,
            Filter::$filterPrecipitation,
            Filter::$filterWeatherCondition,
            Filter::$filterCircumstance,
            Filter::$filterAstrologicalTwilight
        ];
    }


    private static function getDefaultOptions() : array {
        if(Filter::$defaultFilters == null) {
            Filter::$defaultFilters = [
                Filter::$filterSeverity => [
                    "filterKey" => Filter::$filterSeverity,
                    "title" => "Severity",
                    "selectionType" => "star",
                    "bind" => "Severity",
                    "availableOptions" => [
                        new FilterOptionBoolean("0", false, Filter::$filterTime),
                        new FilterOptionBoolean("1", false, Filter::$filterTime),
                        new FilterOptionBoolean("2", false, Filter::$filterTime),
                        new FilterOptionBoolean("3", false, Filter::$filterTime),
                        new FilterOptionBoolean("4", false, Filter::$filterTime)
                    ]
                ],
                Filter::$filterTime => [
                    "filterKey" => Filter::$filterTime,
                    "title" => "Duration",
                    "selectionType" => "date_range",
                    "bind" => "Start_Time",
                    "availableOptions" => [
                        new FilterOption("Start", "", Filter::$filterTime),
                        new FilterOption("End", "", Filter::$filterTime)
                    ]
                ],
                Filter::$filterLocation => [
                    "filterKey" => Filter::$filterLocation,
                    "title" => "Location",
                    "selectionType" => "location",
                    "bind" => "",
                    "availableOptions" => [
                        new FilterOption("Lat", "", Filter::$filterTime),
                        new FilterOption("Long", "", Filter::$filterTime)
                    ]
                ],
                Filter::$filterDistance => [
                    "filterKey" => Filter::$filterDistance,
                    "title" => "Distance",
                    "selectionType" => "numeric_range",
                    "bind" => "Distance",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterDistance, 0, 1000, ">="),
                        new FilterOptionRange("Max", Filter::$filterDistance, 0, 1000, "<=")
                    ]
                ],

                Filter::$filterTemperature => [
                    "filterKey" => Filter::$filterTemperature,
                    "title" => "Temperature",
                    "selectionType" => "numeric_range",
                    "bind" => "Temperature",
                    "availableOptions" => [
                        new FilterOptionRange("Min", Filter::$filterTemperature, -80, 80, ">="),
                        new FilterOptionRange("Max", Filter::$filterTemperature, -80, 80,"<=")
                    ]
                ],
                Filter::$filterWindChill => [
                    "filterKey" => Filter::$filterWindChill,
                    "title" => "Wind Chill",
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
                        new FilterOptionRange("Min", Filter::$filterHumidity, 0, 1000, ">="),
                        new FilterOptionRange("Max", Filter::$filterHumidity, 0, 1000, "<=")
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
                    "title" => "Wind Direction",
                    "selectionType" => "checkbox-list",
                    "bind" => "Weather_Condition",
                    "availableOptions" => []
                ],
                Filter::$filterState => [
                    "filterKey" => Filter::$filterState,
                    "title" => "State",
                    "selectionType" => "checkbox-button-list",
                    "bind" => "State",
                    "availableOptions" => []
                ],
                Filter::$filterWeatherCondition => [
                    "filterKey" => Filter::$filterWeatherCondition,
                    "title" => "Weather Condition",
                    "selectionType" => "checkbox-list",
                    "bind" => "Weather_Condition",
                    "availableOptions" => []
                ],
                Filter::$filterCircumstance => [
                    "filterKey" => Filter::$filterCircumstance,
                    "title" => "Circumstances",
                    "selectionType" => "checkbox-list",
                    "bind" => "",
                    "availableOptions" => []
                ],
                Filter::$filterAstrologicalTwilight => [
                    "filterKey" => Filter::$filterAstrologicalTwilight,
                    "title" => "Astrological twilight",
                    "selectionType" => "checkbox-list",
                    "bind" => "Astronomical_Twilight",
                    "availableOptions" => []
                ]
            ];
        }
        return Filter::$defaultFilters;
    }

    /**
     * @var string
     */
    public $filterKey;

    /**
     * @var string
     */
    public $title;

    /**
     * @var FilterOption[]
     */
    public $availableOptions;

    /**
     * @var string
     */
    private $bind;

    /**
     * @var string - relevant for the FRONTEND
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
    private function setupAvailableOptions($defaultOptions) : array {
        if(Filter::$filterCircumstance === $this->filterKey) {
            return array_map(function($item) {
                $filterOption = new FilterOptionBooleanColumn($item['label'], false, $this->filterKey);
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
            ]);
        }

        $bindToColumn = Filter::getBindToColumn();
        if(isset($bindToColumn[$this->filterKey])) {
            $data = $bindToColumn[$this->filterKey];
            $column = $data['column'];

            return array_values(array_filter(
                array_map(function($item) use($column) {
                    $filterOption = new FilterOptionBoolean($item['label'], false, $this->filterKey);
                    $filterOption->setBind($column);
                    return $filterOption;
                }, Filter::$db->select("SELECT DISTINCT($column) as label from accidents")),

                function ($filterOption) {
                    return $filterOption->label != "";
                }
            ));
        }

        foreach ($defaultOptions as $option) {
            $option->setBind($this->bind);
        }

        return $defaultOptions;
    }


    /**
     * matches a json filter from the client and applies its properties
     * (this array must be validated before calling this method)
     * @param $jsonFilters
     */
    public function searchAndApplyJson($jsonFilters) {
        $match = array_values(array_filter($jsonFilters, function($item) {
            return $item['filterKey'] === $this->filterKey;
        }));

        if(count($match) > 0) {
           $match = $match[0];
           foreach ($this->availableOptions as $option) {
               foreach ($match['availableOptions'] as $optionJson) {
                   if($optionJson['key'] === $option->key) {
                       $option->setValue($optionJson['value']);
                       break;
                   }
               }
           }
        }
    }

    /**
     * @return string - a condition for a query or an empty string
     */
    public function queryBuild() : string {
        $string = "";
        if(in_array($this->selectionType, ["date_range"])) {
            if($this->availableOptions[0]->value != "") {
                $string .= $this->bind." >= '". $this->availableOptions[0]->value ."' ";
            }

            if($this->availableOptions[1]->value != "") {
                if($string != "") {
                    $string .= " AND ";
                }

                $string .= $this->bind." <= '". $this->availableOptions[0]->value ."' ";
            }
        } else if(in_array($this->selectionType, ["checkbox-list", "star", "checkbox-button-list"])) {
            foreach ($this->availableOptions as $option) {
                $query = $option->queryBuild();
                if($query) {
                    if($string != "") {
                        $string .= " || ";
                    }
                    $string .= "$query ";
                }
            }
        } else if($this->selectionType === "location") {
            $latQ = "";
            $lonQ = "";

            $lat = $this->availableOptions[0]->value;
            $long = $this->availableOptions[1]->value;

            if($lat !== "") {
                $latMin = floatval($lat) - 100;
                $latMax = floatval($lat) + 100;
                $latQ = "Start_Lat >= $latMin && Start_Lat <= $latMax";
            }

            if($long !== "") {
                $longMin = floatval($long) - 100;
                $longMax = floatval($long) + 100;
                $lonQ = "Start_Lng >= $longMin && Start_Lng <= $longMax";
            }

            if($latQ !== "" && $lonQ !== "") {
                $string = "$latQ AND $lonQ";
            } else if($latQ !== "" || $lonQ !== "") {
                $string = $latQ !== "" ? $latQ : $lonQ;
            }
        } else if($this->selectionType === "numeric_range") {
            $stringMin = $this->availableOptions[0]->queryBuild();
            $stringMax = $this->availableOptions[1]->queryBuild();


            if($stringMin !== "" && $stringMax !== "") {
                $string = "$stringMin AND $stringMax";
            } else if($stringMin !== "" || $stringMax !== "") {
                $string = $stringMin !== "" ? $stringMin : $stringMax;
            }
        }

        return $string;
    }

    /**
     * @param Database $db
     * @return Filter[]
     */
    public static function createFilters(Database  $db) : array {
        Filter::$db = $db;

        $defaultOptions = Filter::getDefaultOptions();
        $filters = [];
        foreach ($defaultOptions as $optionDefault) {
            $filters[] = new Filter($optionDefault);
        }

        return $filters;
    }
}