<?php

require_once __DIR__."/FilterOption.php";

class FilterOptionBooleanColumn extends FilterOptionBoolean
{
    /**
     * FilterOption constructor.
     * @param string $label
     * @param bool $value
     * @param string $filterKey
     */
    public function __construct(string $label, bool $value, string $filterKey)
    {
        parent::__construct($label, $value, $filterKey);
    }

    public function queryBuild($selectionType = "") : string {
        if($this->value === true) {
            return $this->bind . "='True' ";
        }

        return "";
    }
}