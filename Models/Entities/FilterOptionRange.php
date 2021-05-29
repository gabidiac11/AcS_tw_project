<?php

require_once __DIR__."/FilterOption.php";
require_once __DIR__."/FilterOptionNumeric.php";

/**
 * Class FilterOptionRange
 *
 * @OA\Schema(schema="FilterOptionRange")
 */
class FilterOptionRange extends FilterOptionNumeric
{
    /**
     * @OA\Property(
     *     description="min",
     *     title="min",
     *     format="float"
     * )
     * @var float
     */
    public $min;

    /**
     * @OA\Property(
     *     description="min",
     *     title="max",
     *     format="float"
     * )
     * @var float
     */
    public $max;

    /**
     * FilterOption constructor.
     * @param string $label
     * @param float $value
     * @param string $filterKey
     * @param float $min
     * @param float $max
     * @param string $dir
     */
    public function __construct(string $label, string $filterKey, float $min, float $max, string $dir)
    {
        $this->value = $min - 1000;
        parent::__construct($label, $this->value, $filterKey);

        $this->dir = $dir;
        $this->min = $min;
        $this->max = $max;
    }

    /**
     * @var $dir
     */
    public $dir = ">=";

    public function queryBuild() : string {
        if($this->value >= $this->min) {
            return $this->bind." ".$this->dir." '".$this->value."' ";
        }

        return "";
    }
}