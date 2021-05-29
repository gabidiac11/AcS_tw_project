<?php

require_once __DIR__."/FilterOption.php";

/**
 * Class FilterOptionBoolean
 *
 * @OA\Schema(schema="FilterOptionBoolean")
 */
class FilterOptionBoolean extends FilterOption
{
    /**
     * @OA\Property(
     *     description="value",
     *     title="value",
     *     format="boolean"
     * )
     * @var bool
     */
    public $value;

    /**
     * FilterOption constructor.
     * @param string $label
     * @param bool $value
     * @param string $filterKey
     */
    public function __construct(string $label, bool $value, string $filterKey)
    {
        parent::__construct($label, $value, $filterKey);
        $this->value = $value;
    }

    public function setValue($value) {
        $this->value = boolval($value);
    }

    public function queryBuild($selectionType = "") : string {
        if($this->value === true) {
            return $this->bind . "='".$this->label."' ";
        }

        return "";
    }
}