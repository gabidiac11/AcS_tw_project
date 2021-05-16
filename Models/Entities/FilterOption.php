<?php

class FilterOption
{
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $bind = "";

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