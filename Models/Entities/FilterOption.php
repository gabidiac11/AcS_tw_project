<?php

/**
 * Class FilterOption
 *
 * @OA\Schema(schema="FilterOption", required={"name"})
 */
class FilterOption
{
    
    /**
     * @OA\Property(
     *     description="label",
     *     title="label"
     * )
     * @var string
     */
    public $label;
    
    /**
     * @OA\Property(
     *     description="value",
     *     title="value"
     * )
     * @var string
     */
    public $value;
    
    /**
     * @OA\Property(
     *     description="key",
     *     title="key"
     * )
     * @var string
     */
    public $key;

    
    /**
     * the db column bind to this filter
     * @var string
     */
    protected $bind = "";

    /**
     * FilterOption constructor.
     * @param string $label
     * @param string $value
     * @param string $filterKey
     */
    public function __construct(string $label, string $value, string $filterKey)
    {
        $this->label = $label;
        $this->value = $value;
        $this->key = "option-$label-$value-filter-$filterKey";
    }

    public static function createNumericFilter(string $filterKey, float $value) : FilterOptionNumeric {
        return new FilterOptionNumeric(
            "",
            $value,
            $filterKey
        );
    }

    public function setBind($bind): FilterOption
    {
        $this->bind = $bind;

        return $this;
    }

    public function setValue($value) {
        $this->value = strval($value);
    }

    public function queryBuild() : string {
        return "";
    }
}