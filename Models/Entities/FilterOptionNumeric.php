<?php

require_once __DIR__."/FilterOption.php";

class FilterOptionNumeric extends FilterOption
{
    /**
     * @var float
     */
    public $value;

    /**
     * FilterOption constructor.
     * @param string $label
     * @param float $value
     * @param string $filterKey
     */
    public function __construct(string $label, float $value, string $filterKey)
    {
        parent::__construct($label, $value, $filterKey);
        $this->value = $value;
    }

    public function setValue($value) {
        $this->value = floatval($value);
    }
}